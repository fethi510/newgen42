<?php
class Admin_Model  extends CI_Model  {

	function __construct(){
        parent::__construct();
    }
	function isTrueAdmin($user,$password){
		$query=$this->db->select('*')->from('admins')->where(array(
			'username'=>$user,
			'active'=>1
		))->limit(1);
		$query=$this->db->get();
		if($query->num_rows()==0){
			return array();
		}else{
			foreach($query->result_array() as $row){
				if($this->encrypt->decode($row['password'])==$password){
					return $query->result_array();
				}else{
					return array();
				}
			}
		}
	}
}
?>