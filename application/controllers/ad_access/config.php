<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
        parent::__construct();
		$this->load->database('default');
        $this->load->model("admin_model");
		$this->load->model("grocery_crud_model");
		$data=array();
     }
	public function index()
	{
		$data['validation']="";
		if($this->session->userdata('admin_id')){
			$privilege=explode(',',$this->session->userdata('access'));
			if(!in_array('config',$privilege)){
				redirect('ad_access');
			}
		}else{
			redirect('ad_access/');
		}
		$crud = new grocery_CRUD();
		$crud->set_language('french');
		$crud->set_table('config')->where("id","1");
		$crud->set_theme('datatables');
		$crud->set_subject('Configuration générale');
		$crud->unset_print();
        $crud->unset_export();
        if($crud->getState() == "read" || $crud->getState() == "add" || $crud->getState() == "list" || $crud->getState() =="success"){
            redirect(site_url("ad_access/config/index/edit/1"));
        }
		$crud->fields('email','adresse','code_postal','tel','fax','facebook','twitter','youtube','slogan','maps','maps_link','qui_sommes_nous','tag_manager','meta_description_fr','meta_description_en','mots_cle_fr','mots_cle_en');
		$crud->required_fields('email','adresse','code_postal','maps','maps_link','slogan');
		$crud->display_as('facebook','Page Facebook');
		$crud->display_as('twitter','Page Twitter');
		$crud->display_as('youtube','Page Youtube');
		$crud->display_as('tel','N°Tèl');
		$crud->display_as('fax','N°Fax');
        $crud->unset_texteditor("maps");
		$crud->unset_texteditor("maps_link");
		$crud->unset_texteditor("tag_manager");
		$crud->unset_texteditor("meta_description_fr");
		$crud->unset_texteditor("meta_description_en");
		$crud->unset_texteditor("mots_cle_fr");
		$crud->unset_texteditor("mots_cle_en");
		$output = $crud->render();
		$data['output']=$output;
		$this->layout->set_theme('config');
		$this->layout->view('config',$data);
	}
}