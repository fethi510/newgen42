<?php
        if( ! defined('BASEPATH')) exit('No direct script access allowed');
        
        function get_ville($where = array())
        {
             $CI =& get_instance();
             $CI->db->where($where);
             return $CI->db->get('wilaya')->result();
        }
        
        function get_commune($where = array())
        {
             $CI =& get_instance();
             $CI->db->where($where);
             $CI->db->order_by('nom');
             return $CI->db->get('communes')->result();
        }
?>
