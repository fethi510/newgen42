<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

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
			if(!in_array('admins',$privilege)){
				redirect('ad_access');
			}
		}else{
			redirect('ad_access/');
		}
		$crud = new grocery_CRUD();
		$crud->set_language('french');
		$crud->set_table('admins');
		$crud->order_by('id','desc');
		if($crud->getState() == 'list' || $crud->getState() == 'success' || $crud->getState() == 'read'){
			$crud->set_theme('datatables');
		}else{
			$crud->set_theme('flexigrid');
		}
		$crud->set_subject('Administrateurs');
		$crud->unset_print();
        $crud->unset_export();
		$crud->fields('username','password','email','access','active');
		$crud->columns('username','email','date_add','email','access','active');
		$crud->display_as('username','Nom d\'utilisateur');
		$crud->display_as('password','Mot de passe');
		$crud->display_as('date_add','Date d\'ajout');
		$crud->display_as('access','Privilèges');
		$crud->display_as('active','Etat du compte');
		$crud->field_type('active','true_false',array(1=>'Actif',0=>'Inactif'));
		$crud->set_rules('username','Nom utilisateur','min_length[6]');
		$crud->set_rules('password','Mot de passe','min_length[8]');
		$crud->change_field_type('password','password');
		$crud->callback_edit_field('password',array($this,'_callback_show_password'));
		$crud->callback_before_insert(array($this,'_callback_password'));
		$crud->callback_before_update(array($this,'_callback_up_password'));
		$crud->field_type('access','multiselect',array(
			'admins'=>'Gestionnaire administrateurs','config'=>'Gestionnaire de configuration'));
		if($crud->getState() == "edit" || $crud->getState() == "add"){
			$crud->unset_fields('date_add');
		}
		if($crud->getState() == "read" ){
			$crud->unset_fields('password');
		}
		$crud->required_fields('username','password');
		$output = $crud->render();
		$data['output']=$output;
		$this->layout->set_theme('admins');
		$this->layout->view('admins',$data);
	}
	function _callback_show_password($value){
		$decrypted_password = $this->encrypt->decode($value);
		return "<input type='password' name='password' value='$decrypted_password' />";
	}
	function _callback_password($post_array){
		$post_array['password']=$this->encrypt->encode($post_array['password']);
		return $post_array;
	}
	function _callback_up_password($post_array,$primary_key){
		$post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
		return $post_array;
	}
}
