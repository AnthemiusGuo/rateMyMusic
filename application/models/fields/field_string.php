<?php
include_once(APPPATH."models/fields/fields.php");

class Field_string extends fields {
    
    public function __construct($show_name,$name,$is_must_input=false) {
        parent::__construct($show_name,$name,$is_must_input);
        $this->typ = "Field_string";
        $this->value = '';
    }
    public function init($value){
        parent::init($value);
    }
    public function gen_list_html($len=15){
        $str = $this->gen_show_html();
        if (mb_strlen($str)>$len) {
            return mb_substr($str, 0,$len-2)."...";
        } else {
            return $str;
        }
    }
    public function gen_show_html(){
        return $this->value;
    }
    public function gen_search_element($default="="){
        $editor = "<select id=\"searchEle_{$this->name}\" name=\"searchEle_{$this->name}\" class=\"form-control input-sm\" value=\"{$default}\">";
        $editor.= "<option value=\"=\" ".(($default=="=")?"selected=\"selected\"":"").">=</option>";
        $editor.= "<option value=\"like\" ".(($default=="like")?"selected=\"selected\"":"").">包含</option>";
        $editor .= "</select>";
        return $editor;
    }
    public function gen_editor($typ=0){
        $inputName = $this->build_input_name($typ);
        $validates = $this->build_validator();
        if ($typ==1){
            $this->default = $this->value;
        }
        return "<input id=\"$inputName\"  name=\"$inputName\" class=\"{$this->input_class}\" placeholder=\"{$this->placeholder}\" type=\"text\" value=\"{$this->default}\" $validates/>";
    }
}
?>