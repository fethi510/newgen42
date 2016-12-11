<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function get_last_products(){
       $CI =& get_instance();
      $CI->db->select('id, nom_produit');
      $CI->db->order_by('id', 'desc');
      $CI->db->limit(5);
      $query = $CI->db->get_where('products', array('active' => 1));
      return $query->result();
    }
?>
