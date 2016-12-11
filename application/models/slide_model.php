<?php
class Slide_Model  extends CI_Model  {

	function __construct(){
        parent::__construct();
    }
	function getPrimarySlide($language){
		$query=$this->db->select("*")->from("slide")->where("categorie",$language)->order_by("position","asc")->order_by("position","desc");
        $query=$this->db->get();
        if($query->num_rows()!=0){
            return $query->result_array();
        }else{
            return array();
        }
	}
    function getSlideServices($language){
        $query=$this->db->select("*")->from("slideservices")->where("categorie",$language)->order_by("position","asc")->order_by("position","desc");
        $query=$this->db->get();
        if($query->num_rows()!=0){
            return $query->result_array();
        }else{
            return array();
        }
    }
    function getBrands(){
        $query=$this->db->select("*")->from("clients")->order_by("id","desc");
        $query=$this->db->get();
        if($query->num_rows()!=0){
            return $query->result_array();
        }else{
            return array();
        }
    }
    function countBrands(){
        $query=$this->db->select("*")->from("clients")->order_by("id","desc");
        $query=$this->db->get();
        return $query->num_rows();
    }
}
?>