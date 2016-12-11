<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {
   
   public function is_unique($str, $field)
   {
      if (substr_count($field, '.') == 3)
      {
         list($table,$field,$id_field,$id_val) = explode('.', $field);
         $query = $this->CI->db->limit(1)->where($field,$str)->where($id_field.' != ',$id_val)->get($table);
      } 
      else if(substr_count($field, '.') == 5)
      {
         list($table,$field,$id_field,$id_val, $id_field2,$id_val2) = explode('.', $field);
         $query = $this->CI->db->limit(1)->where($field,$str)->where($id_field.' != ',$id_val)->where($id_field2,$id_val2)->get($table);
      }
      else {
         list($table, $field)=explode('.', $field);
         $query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
      }
      
      return $query->num_rows() === 0;
    }
  
    public function is_unique_add($str, $field)
   {
      if (substr_count($field, '.') == 3)
      {
         list($table,$field,$id_field,$id_val) = explode('.', $field);

        $this->CI->db->where($field,$str);
        $this->CI->db->where($id_field, $id_val);
        $query = $this->CI->db->limit(1)->get($table);
      } 
      else if(substr_count($field, '.') == 5)
      {
         list($table,$field,$id_field,$id_val,$id_field2,$id_val2) = explode('.', $field);
        $this->CI->db->where($field,$str);
        $this->CI->db->where($id_field, $id_val);
        $this->CI->db->where($id_field2, $id_val2);
        $query = $this->CI->db->limit(1)->get($table);
      }
       else if(substr_count($field, '.') == 7)
       {
            list($table,$field,$id_field,$id_val,$id_field2,$id_val2,$id_field3,$id_val3) = explode('.', $field);
            $this->CI->db->where($field,$str);
            $this->CI->db->where($id_field, $id_val);
            $this->CI->db->where($id_field2, $id_val2);
            $this->CI->db->where($id_field3, $id_val3);
            $query = $this->CI->db->limit(1)->get($table);
       }
      else {
         list($table, $field)=explode('.', $field);
         $this->CI->db->where($field,$str);
         $query = $this->CI->db->limit(1)->get($table);
      }
      
      return $query->num_rows() === 0;
    }
    
    
     public function is_unique_edit($str, $field)
   {
      if (substr_count($field, '.') == 3)
      {
         list($table,$field,$id_field,$id_val) = explode('.', $field);

        $this->CI->db->where($field,$str);
        $this->CI->db->where($id_field.' != ', $id_val);
        $query = $this->CI->db->limit(1)->get($table);
      } 
      else if(substr_count($field, '.') == 5)
      {
        list($table,$field,$id_field,$id_val,$id_field2,$id_val2) = explode('.', $field);
        $this->CI->db->where($field,$str);
        $this->CI->db->where($id_field, $id_val);
        $this->CI->db->where($id_field2.' != ', $id_val2);
        $query = $this->CI->db->limit(1)->get($table);
      }
       else if(substr_count($field, '.') == 7)
       {
            list($table,$field,$id_field,$id_val,$id_field2,$id_val2,$id_field3,$id_val3) = explode('.', $field);
            $this->CI->db->where($field,$str);
            $this->CI->db->where($id_field, $id_val);
            $this->CI->db->where($id_field2, $id_val2);
            $this->CI->db->where($id_field3.' != ', $id_val3);
            $query = $this->CI->db->limit(1)->get($table);
       }
       else if(substr_count($field, '.') == 9)
       {
            list($table,$field,$id_field,$id_val,$id_field2,$id_val2,$id_field3,$id_val3,$id_field4,$id_val4) = explode('.', $field);
            $this->CI->db->where($field,$str);
            $this->CI->db->where($id_field, $id_val);
            $this->CI->db->where($id_field2, $id_val2);
            $this->CI->db->where($id_field3, $id_val3);
            $this->CI->db->where($id_field4.' != ', $id_val4);
            $query = $this->CI->db->limit(1)->get($table);
            return true;
       }
      else {
         list($table, $field)=explode('.', $field);
         $this->CI->db->where($field.' != ',$str);
         $query = $this->CI->db->limit(1)->get($table);
      }
      
      return $query->num_rows() === 0;
    }
}