<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     function css_url($name, $admin = '')
    {
        return base_url().'assets/'.$admin.'css/'.$name.'.css';
    }

    function js_url($name, $admin = '')
    {
        return base_url().'assets/'.$admin.'js/'.$name.'.js';
    }
    
    function img_url($name, $admin = '')
    {
        return base_url().'assets/'.$admin.'/images/'.$name;
    }

    function imgs_url($name, $admin = '')
    {
        return base_url().'assets/'.$admin.'img/'.$name;
    }
    
    function img($name, $admin = '', $alt = '')
    {
        return '<img src="'.img_url($name, $admin).'" alt="'.$alt.'" / >';
    }
    
    function font_url($name, $admin = '')
    {
        return base_url().'assets/'.$admin.'fonts/'.$name;
    }
    
    function assets_url($url)
    {
        return base_url().'assets/assets/'.$url;
    }
    
    function themes_url($url)
    {
        return base_url().'assets/themes/'.$url;
    }
    
    function plugins_url($url)
    {
        return base_url().'assets/plugins/'.$url;
    }

    function files_url($url)
    {
        return base_url().'assets/uploads/files/'.$url;
    }

    function plugins_grocery_url($url)
    {
        return 'assets/plugins/'.$url;
    }
    
    function grocry_crud_css($url)
    {
        return 'assets/css/admin/'.$url;
    }
    
    function grocry_crud_js($url)
    {
        return 'assets/js/admin/'.$url;
    }
