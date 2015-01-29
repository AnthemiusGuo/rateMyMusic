<?php
include_once(APPPATH."models/record_model.php");
class User_model extends Record_model {
    public function __construct() {
        parent::__construct('uUser');
        $this->uname = '';
        $this->uid = 0;
        $this->field_list['_id'] = $this->load->field('Field_mongoid',"uid","_id");
        $this->field_list['uid'] = $this->load->field('Field_string',"uid","uid");
        
        $this->field_list['email'] = $this->load->field('Field_string',"电子邮箱","email");
        $this->field_list['phone'] = $this->load->field('Field_string',"电话","phone");
        
        $this->field_list['regTS'] = $this->load->field('Field_date',"注册时间","regTS");
        $this->field_list['pwd'] = $this->load->field('Field_string',"密码","pwd");
        $this->field_list['orgId'] = $this->load->field('Field_relate_org',"商户","orgId");

        $this->field_list['name'] = $this->load->field('Field_title',"姓名","name");
        $this->field_list['sign'] = $this->load->field('Field_string',"签名","sign");
        $this->field_list['intro'] = $this->load->field('Field_text',"个人介绍","intro");

        $this->field_list['everEdit'] = $this->load->field('Field_int',"曾修改","everEdit");
        
    }
    public function init($id){
        
        parent::init($id);
        $this->db->select('*')
                    ->from('uUser')
                    ->where('uid', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result = $query->row_array(); 
            $this->init_with_data($id,$result);
        }
        else
        {
            return -1;
        }
        
    }

    public function init_by_uid($uid){
        parent::init($uid);
        $id = new MongoId($uid);
        $this->cimongo->where(array('_id'=>$id));

        $query = $this->cimongo->get($this->tableName);
        if ($query->num_rows() > 0)
        {
            $result = $query->row_array(); 
            $this->init_with_data($id,$result);
            return 1;
        }
        else
        {
            return -1;
        }
    }

    public function init_with_email($email){
        parent::init($id);
        $this->cimongo->where(array('email'=>$email));

        $query = $this->cimongo->get($this->tableName);
        if ($query->num_rows() > 0)
        {
            $result = $query->row_array(); 
            $this->init_with_data($id,$result);
            return 1;
        }
        else
        {
            return -1;
        }
    }


    public function init_with_data($id,$data){
        parent::init_with_data($id,$data);

        $this->uid = $id->{'$id'};
        $this->uname = $data['name'];
    }

    public function check_user_inputed($email,$orgId=0){
        $this->db->select('inviteCode,orgId')
                    ->from('pPeaple')
                    ->where('email', $email);
        if ($orgId>0){
            $this->db->where('orgId', $orgId);
        }
        $query = $this->db->get();
        $result = array();
        foreach ($query->result_array() as $row)
        {
           $result[$row['inviteCode']] = $row['orgId'];
        }
        return $result;
    }

    public function update_pPeaple_binding($orgId,$email){
        $data = array(
               'uid' => $this->uid
            );

        $this->db->where('orgId', $orgId)
                ->where('email', $email)
                ->update('pPeaple', $data); 
    }

    public function check_email_exist($email){
        $this->cimongo->where(array('email'=>$email));
        $query = $this->cimongo->get($this->tableName);
        if ($query->num_rows() > 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public function check_phone_exist($phone){
        $this->cimongo->where(array('phone'=>$phone));
        $query = $this->cimongo->get($this->tableName);
        if ($query->num_rows() > 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public function reg_user($data){
        if ($data['email']!='' && $this->check_email_exist($data['email'])){
            return -1;
        }
        if ($data['phone']!='' && $this->check_phone_exist($data['phone'])){
            return -2;
        }
        if ($data['email']=='' && $data['phone']=='') {
            return -3;
        }

        $zeit = time();

        if ($inviteCode!=''){
            $temp = explode('-',$inviteCode);
            if (count($temp)!=2){
                return -4;
            }
            if ($temp[0]=='A'){
                

            } elseif ($temp[0]=='B'){
                

            } elseif ($temp[0]=='C'){
                
            } else {
                return -5;
            }
        }
        
        $data = array(
           'email' => $data['email'] ,
           'phone' => $data['phone'] ,
           'pwd' => strtolower(md5($data['pwd'])) ,
           'name' => $data['uName'],
           'regTS' =>time(),
           'orgId' => 0,
           'superPwd' => 'null',
           'isAdmin' =>0,
           'sign'=>'',
           'intro'=>'',
           'everEdit'=>0,
        );

        $this->cimongo->insert($this->tableName, $data); 
        $insert_ret = $this->cimongo->insert_id();
        if ($insert_ret===false) {
            return -999;
        }
        $uid = $insert_ret->{'$id'};

        $data['uid'] = $uid;
        $data['_id'] = $insert_ret;
        $this->init_with_data($insert_ret,$data);

        $this->uid = $uid;
        return 1;
    }

    public function verify_login($email,$pwd){

        $this->cimongo->or_where(array('phone'=>$email,'email'=>$email));

        $query = $this->cimongo->get($this->tableName);

        if ($query->num_rows() > 0)
        {
            $result = $query->row_array(); 
            $real_pwd = $result['pwd'];
            if (strtolower(md5($pwd))==strtolower($real_pwd)){


                $this->init_with_data($result['_id'],$result);
                return 1;
            } else {
                return -2;
            }
        }
        else
        {
            return -1;
        }
    }
    public function forceChangePwd($email,$new_password){
        $data = array(
           'pwd' => strtolower(md5($new_password))
        );
        $this->db->where('email', $email);
        $this->db->update('uUser', $data); 
    }
    public function changePwd($pwd,$pwdNew){

        if (strtolower(md5($pwd))!=strtolower($this->field_list['pwd']->value)){
            
            return -1;
        } 
        $data = array(
           'pwd' => strtolower(md5($pwdNew))
        );

        $this->db->where('uid', $this->uid);
        $this->db->update('uUser', $data); 
        return 1;
    }
    public function gen_list_html($templates){
        $msg = $this->load->view($templates, '', true);
    }
    public function gen_editor(){
        
    }
    public function buildInfoTitle(){
        return '人事关系:'.$this->field_list['name']->gen_show_html().'<small>'.$this->field_list['nickname']->gen_show_html().'</small>';
    }
   
    
}
?>