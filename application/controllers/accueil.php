<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

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
		$this->load->model("config_model");
		$this->load->model("slide_model");
		$data=array();
     }
	public function index(){
        $data=array();
		$data['config']=$this->config_model->getConfig();
		$data['slideprincipal']=$this->slide_model->getPrimarySlide(1);
		$data['slideservices']=$this->slide_model->getSlideServices(1);
		$data['brands']=$this->slide_model->getBrands();
		$data['countBrands']=$this->slide_model->countBrands();
		$this->layout->set_theme('accueil');
		$this->layout->view('accueil',$data);
	}
}
