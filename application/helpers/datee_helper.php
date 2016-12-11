<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  if(!function_exists('datemysql_to_date'))
  {
      function datemysql_to_date($date)
      {
            $y = substr($date, 0, 4);
            $date = substr($date, 5);
            $m = substr($date, 0, 2);
            $date = substr($date, 3, 2);
            $d = substr($date, 0);
            return $d.'-'.$m.'-'.$y;
      }
 }
 
 if(!function_exists('datetimemysql_to_date'))
  {
      function datetimemysql_to_date($datetime)
      {
            return datemysql_to_date($datetime);
      }
 }
 
  if(!function_exists('datetimemysql_to_time'))
  {
      function datetimemysql_to_time($datetime)
      {
           $hour = substr($datetime, 11, 2);
           $minute = substr($datetime, 14, 2);
           return $hour.':'.$minute;
      }
 }
 
 if(!function_exists('datetimemysql_to_datetime'))
  {
      function datetimemysql_to_datetime($datetime)
      {
            $date = datemysql_to_date($datetime);
            $time = substr($datetime, 11, -3);
            return $date.' / '.$time;
      }
 }
  if(!function_exists('date_to_mysql'))
  {
       function date_to_mysql($date)
       {
           $date = trim($date);

           if(strlen($date) < 10)
               return '';

             $d = substr($date, 0, 2);
             $date = substr($date, 3);
             $m = substr($date, 0, 2);
             $date = substr($date, 3);
             $y = substr($date, 0);
             $date = $y.'-'.$m.'-'.$d;
             return $date;
       }
  }
  
  if(!function_exists('get_full_year'))
  {
      function get_full_year($date)
      {
          return substr($date, 0, 4);
      }
  }
  
  if(!function_exists('get_month'))
  {
      function get_month($date)
      {
          return substr($date, 5, 2);
      }
  }
  
  if(!function_exists('get_day'))
  {
      function get_day($date)
      {
          return substr($date, 8, 2);
      }
  }
  
  if(!function_exists('get_hour'))
  {
      function get_hour($date)
      {
          if(strlen($date) < 13)
          {
              return '00';
          }
          
          return substr($date, 11, 2);
      }
  }
  
  if(!function_exists('get_minute'))
  {
      function get_minute($date)
      {
          if(strlen($date) < 16)
          {
              return '00';
          }
          
          return substr($date, 14, 2);
      }
  }
  
  if(!function_exists('get_second'))
  {
      function get_second($date)
      {
          if(strlen($date) < 19)
          {
              return '00';
          }
          
          return substr($date, 17, 2);
      }
  }
  
  if(!function_exists('get_current_datetimemysql'))
  {
      function get_current_datetimemysql()
      {
          return date('Y').'-'.date('m').'-'.date('d').' '.date('H').':'.date('i').':'.date('s');
      }
  }
?>
