<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

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
		$data=array();
     }
	public function index(){
		$data['validation']="";
		if($this->input->post('connexion')=='connexion'){
			$user=$this->input->post('user',TRUE);
			$password=$this->input->post('password',TRUE);
			$this->form_validation->set_rules('user', 'nom d\'utilisateur', 'required|trim|min_length[6]');
			$this->form_validation->set_rules('password', 'mot de passe', 'required|trim|min_length[8]');
			$this->form_validation->set_error_delimiters('<div class="alert-validation notif error">', '</div>');
			if($this->form_validation->run() == FALSE){
				$data['validation']=validation_errors();
			}else{
				if($this->admin_model->isTrueAdmin($user,$password)){
					foreach(($q=$this->admin_model->isTrueAdmin($user,$password)) as $row){
						$d=array(
							'admin_id'=>$row['id'],
							'username'=>$row['username'],
							'email'=>$row['email'],
							'access'=>$row['access']
						);
						$this->session->set_userdata($d);
						redirect(site_url('ad_access').'/dashboard');
					}
				}else{
					$data['validation']='<div class="alert-validation notif error">Nom d\'utilisateur out mot de passe incorrects</div>';
				}
			}
		}
		$this->layout->set_theme('adminlogin');
		$this->layout->view('adminlogin',$data);
	}
}
