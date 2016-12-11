<?php

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
     
  if(!function_exists('get_lang_folder'))
  {
      function get_lang_folder()
      {
           $CI =& get_instance();
            if($CI->session->userdata('lang'))
            {
                switch($CI->session->userdata('lang'))
                {
                    case 'en':
                        $lang = 'english';
                    break;
                    case 'ar':
                       $lang = 'arabic';
                    break;
                    case 'es':
                           $lang = 'spanish';
                    break;
                    default: 
                        $lang = 'french';
                   break;     
                }
            }
            else
            {
                $lang = 'french';
                $CI->session->set_userdata('lang', 'fr');
            }
            return $lang;
      }
  }
    if(!function_exists('load_lang'))
    {
        function load_lang($files = array())
        {
            $CI =& get_instance();
            if($CI->session->userdata('lang'))
            {
                switch($CI->session->userdata('lang'))
                {
                    case 'en':
                        $lang = 'english';
                    break;
                    case 'ar':
                       $lang = 'arabic';
                    break;
                    case 'es':
                           $lang = 'spanish';
                    break;
                    default: 
                        $lang = 'french';
                   break;     
                }
            }
            else
            {
                $lang = 'french';
                $CI->session->set_userdata('lang', 'fr');
            }
            
            foreach ($files as $file)
            {
                $CI->lang->load($file, $lang);
            }
        }
    }
    
      if(!function_exists('lang_line'))
      {
          function lang_line($line)
          {
              $CI =& get_instance();
              return $CI->lang->line($line);
          }
      }
      
      if(!function_exists('lang_line_error'))
      {
          function lang_line_error($rule, $vals = null)
          {
              $CI =& get_instance();
              
              if($vals == null)
                  return $CI->lang->line($rule);
              
              if(!is_array($vals))
                  return str_replace('%s', ucfirst($CI->lang->line($vals)), $CI->lang->line($rule));

              $str = null;
              foreach($vals as $val)
                  if($str != null)
                      $str = preg_replace('#%s#', (($CI->lang->line($val)) ? ucfirst($CI->lang->line($val)) : $val), $str, 1);
                  else    
                    $str = preg_replace('#%s#', (($CI->lang->line($val)) ? ucfirst($CI->lang->line($val)) : $val), $CI->lang->line($rule), 1);
                  
              return $str;
          }
      }