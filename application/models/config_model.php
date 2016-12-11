<?php
class Config_Model  extends CI_Model  {

	function __construct(){
        parent::__construct();
    }
	function getConfig(){
		$query=$this->db->select("*")->from("config")->where("id","1");
        $query=$this->db->get();
        if($query->num_rows()!=0){
            return $query->result()[0];
        }else{
            return array();
        }
	}
}
?>