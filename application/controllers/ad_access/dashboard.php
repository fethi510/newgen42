<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data=array();
		if(!$this->session->userdata('admin_id')){
			redirect("ad_access/adminlogin");
		}else{
			if($this->input->get('disconnect',TRUE)=="true"){
				$this->session->sess_destroy();
				redirect('ad_access/adminlogin');
			}
			$this->layout->set_theme('dashboard');
			$this->layout->view('dashboard',$data);
		}
	}
}
