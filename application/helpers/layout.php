<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout 
{
    private $CI; 
    private $theme = 'default';
    private $var = array(); 
   
    public function __construct()
    {  
        $this->CI = get_instance(); 
        $this->var['output'] = '';
        $this->var['breadcrumb'] = '';
        $this->var['title_page'] = ucfirst($this->CI->router->fetch_class()).' | '.ucfirst($this->CI->router->fetch_method());
        $this->var['charset'] = $this->CI->config->item('charset');
        //array for css and js and code links
        $this->var['css'] = array(); 
        $this->var['js'] = array(); 
        $this->var['js_code'] = array();
        $this->var['slider']  ='';
        $this->var['top_wrapper'] = '';
        $this->var['bottom_wrapper'] = '';
        $this->var['meta_description'] = '';
    } 
   
    //upload one view
    public function view($name, $data = array()) 
    { 
         $this->var['output'] .= $this->CI->load->view($name, $data, true);
         $this->CI->load->view('../themes/'.$this->theme, $this->var); 
    } 
    
    //upload more than one view
    public function views($name, $data = array())
     {  
        $this->var['output'] .= $this->CI->load->view($name, $data, true); 
        return $this; 
     } 
     
   
     //set meta description
     function set_meta_desc($desc){
         $this->var['meta_description'] = $desc;
     }
     
    //upload top wrapper
     function top_wrapper($tags){
         $this->var['top_wrapper'] =  $tags.$this->var['breadcrumb'];
     }
    
     //upload bottom wrapper
     function bottom_wrapper($tags){
         $this->var['bottom_wrapper'] =  $tags;
     }
     
     public function set_title($title)
     { 
         if(is_string($title) AND !empty($title))
         {
             $this->var['title_page'] = $title;
                return true;        
         } 
         return false; 
         
     }
     
     public function set_charset($charset)
     { 
         if(is_string($charset) AND !empty($charset))
         {
             $this->var['charset'] = $charset;
             return true; 
         } 
         return false;
      }
   
      //css and js 
      public function add_css($name)
      {
          if(is_string($name) AND !empty($name) AND file_exists('./assets/css/' . $name . '.css'))
          {
              $this->var['css'][] = css_url($name); 
              return true; 
          } 
          return false;
       }
       
      public function add_css_assets($name)
      {
          if(is_string($name) AND !empty($name) AND file_exists('./assets/assets/' . $name))
          {
              $this->var['css'][] = assets_url($name); 
              return true; 
          } 
          return false;
      }
       
      public function add_js($name) 
      {
          if(is_string($name) AND !empty($name) AND file_exists('./assets/js/' . $name . '.js'))
          {
              $this->var['js'][] = js_url($name);  
              return true; 
          } 
          return false;
      }
      
      public function add_js_assets($name)
      {
          if(is_string($name) AND !empty($name) AND file_exists('./assets/assets/' . $name))
          {
              $this->var['js'][] = assets_url($name);  
              return true; 
          } 
          return false;
      }
      
      
      public function add_js_code($url, $data = array())
      {
          $code = $this->CI->load->view($url, $data, true);  
          if($code)
          {
              $this->var['js_code'][] = $code;
              return true; 
          }
          return false;     
      }
      
      //get plugins 
      public function add_js_plugin($url)
      {
           if(is_string($url) AND !empty($url) AND file_exists('./assets/plugins/' . $url))
          {
              $this->var['js'][] = plugins_url($url);  
              return true; 
          } 
          return false;
      }
      
       public function add_css_plugin($url)
      {
           if(is_string($url) AND !empty($url) AND file_exists('./assets/plugins/' . $url))
          {
              $this->var['css'][] = plugins_url($url);  
              return true; 
          } 
          return false;
      }
              
      //set theme
      public function set_theme($theme)
      {
          if(is_string($theme) AND !empty($theme) AND file_exists('./application/themes/' . $theme . '.php')) 
          {
              $this->theme = $theme;  
              return true;
          } 
          return false;
      }
      
      public function set_breadcrumb($breadcrumb)
      {
          $this->var['breadcrumb'] = $breadcrumb;
      }
      
      
       
       //add slider 
       public function set_slider($content_slider)
       {
            if(!empty($content_slider))
            {
                $this->var['slider'] = $content_slider;
                return true;
            }
           return false;
       }
       

  }
/* End of file layout.php */ /* Location: ./application/libraries/layout.php */
