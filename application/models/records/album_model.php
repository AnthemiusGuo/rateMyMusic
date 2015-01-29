<?php
include_once(APPPATH."models/record_model.php");
class Crm_model extends Record_model {
    public function __construct() {
        parent::__construct("cCrm");
        $this->default_is_lightbox_or_page = false;
        $this->deleteCtrl = 'crm';
        $this->deleteMethod = 'doDeleteCrm';
        $this->edit_link = 'crm/editCrm/';
        $this->info_link = 'crm/info/';

        $this->field_list['_id'] = $this->load->field('Field_mongoid',"id","_id");
        $this->field_list['name'] = $this->load->field('Field_title',"名称","name",true);
        $this->field_list['orgId'] = $this->load->field('Field_relate_org',"组织","orgId");

        $this->field_list['typ'] = $this->load->field('Field_enum',"类型","typ",true);
        $this->field_list['typ']->setEnum(array("未设置","上游-厂商","上游-其他","同行","下游-批发商","下游-零售商","下游-其他","其他"));

        $this->field_list['mainContactorName'] = $this->load->field('Field_string',"主要联系人","mainContactorName",true);
        $this->field_list['mainContactorName']->tips = '其他联系人及联系方式可以稍后创建';
        $this->field_list['mainContactorType'] = $this->load->field('Field_enum',"主要联系方式","mainContactorType",true);
        $this->field_list['mainContactorType']->setEnum(array("电话","qq","微信","其他"));
        $this->field_list['mainContactorNum'] = $this->load->field('Field_string',"号码","mainContactorNum",true);


        $this->field_list['allContactors'] = $this->load->field('Field_array',"联系人","allContacts");
        $this->field_list['allContactors']->arrayModel = "contactor_model";

        $this->field_list['status'] = $this->load->field('Field_enum',"状态","status",true);
        $this->field_list['status']->setEnum(array("未设置","保持联系","很少联系/结束合作"));

        $this->field_list['province'] = $this->load->field('Field_provinceid',"省份","province",true);
        $this->field_list['updateTS'] = $this->load->field('Field_ts',"更新时间","updateTS");
        
        $this->field_list['createUid'] = $this->load->field('Field_userid',"创建人","createUid");
        $this->field_list['createTS'] = $this->load->field('Field_ts',"创建时间","createTS");
        $this->field_list['lastModifyUid'] = $this->load->field('Field_userid',"最终编辑人","lastModifyUid");
        $this->field_list['lastModifyTS'] = $this->load->field('Field_ts',"最后更新","lastModifyTS");
    }

    public function gen_list_html($templates){
        $msg = $this->load->view($templates, '', true);
    }
    public function gen_editor(){
        
    }
    public function gen_new_contactor($name,$typ,$num){
        return array('_id'=>new MongoId(),'name'=>$name,'typ'=>$typ,'num'=>$num);
    }
    public function buildInfoTitle(){
        return $this->field_list['name']->gen_show_html().' <small> '.$this->field_list['typ']->gen_show_html().' </small>';
    }


    public function checkImportDataP($data){
        $cfg_field_lists = array(
            0=>"name",3=>"province",4=>'status'
        );
        
        return $this->checkImportDataBase($data,$cfg_field_lists);
    }
    //名称*必填 省份*必填   状态*必填   情况说明    通讯地址    邮编  需赞助金额   汇款账号    建筑设施    其他  联系人姓名   联系电话    电子邮箱    其他联系方式

    public function checkImportDataO($data){
        $cfg_field_lists = array(
            0=>"name",1=>"province",2=>'status'
        );
        
        return $this->checkImportDataBase($data,$cfg_field_lists);
    }

    public function importData($line,$typ){
        if ($typ=="BedonaredP") {
            $cfg_field_lists = array(
                0=>"name",3=>"province",4=>'status'
            );
        } else {
            $cfg_field_lists = array(
                0=>"name",1=>"province",2=>'status'
            );
        }
        $data = array();
        foreach ($line as $key => $value) {
            # code...
            if (!isset($cfg_field_lists[$key])) {
                continue;
            }
            $field_name = $cfg_field_lists[$key];
            
            $data[$field_name] = $this->field_list[$field_name]->importData($value);
        }
        return $data;
    }


    public function buildChangeNeedFields(){
        return array('name','typ','status','province','mainContactorName','mainContactorType','mainContactorNum');
    }

    public function buildChangeShowFields(){
            return array(
                    array('name'),
                    array('typ'),                    
                    array('status','province'),
                    array('mainContactorName','null'),
                    array('mainContactorType','mainContactorNum'),


                );
    }

    public function buildDetailShowFields(){
        return array(
                    array('name'),
                    array('typ'),                    
                    array('status','province'),
                    array('mainContactorName','null'),
                    array('mainContactorType','mainContactorNum'),
                    
                );
    }

    
}
?>