<?php
     if ( ! defined('BASEPATH')) exit('No direct script access allowed');
     
    if(!function_exists('site_url'))
    {
        function site_url($uri = '')
        {
            if(!is_array($uri))
                $uri = func_get_args();

            $CI =& get_instance();
            return $CI->config->site_url($uri);
        }
    }
    
    if(!function_exists('site_admin_url'))
    {
        function site_admin_url($uri = '')
        {
            return site_url('admin/'.$uri);
        }
    }
    
    if(!function_exists('url'))
    {
         function url($text, $uri = '#')
        {
            if(!is_array($uri))
            {
                $uri = func_get_args();
                array_shift($uri);
            }

            echo '<a href="'.site_url($uri).'">'.htmlentities($text).'</a>';
            return '';
        }
    }
    
    /*if ( ! function_exists('css_url'))
    {
        function css_url($name) 
        {  
            return base_url() . 'assets/css/' . $name . '.css';
         }
    }
    
    if ( ! function_exists('js_url'))
    {
        function js_url($name) 
        { 
            return base_url() . 'assets/js/' . $name . '.js';
         }
     }

    
     if(!function_exists('img_url'))
    {
        function img_url($name)
        {
            return base_url().'assets/images/'.$name;
        }
    }
   
    if ( ! function_exists('img')) 
    {
        function img($name, $alt = '')
        {
            return '<img src="' . img_url($name) . '" alt="' . $alt . '" />';
         }
     }

     if(!function_exists('font_url'))
    {
        function font_url($name)
        {
            return base_url().'assets/font/'.$name;
        }
    }
    
    if(!function_exists('assets_url'))
    {
        function assets_url($url)
        {
            return base_url().'assets/assets/'.$url;
        }
    }*/
    
?>
