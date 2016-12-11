<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideprincipal extends CI_Controller {

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
		$crud->set_table('slide')->order_by("position","asc")->order_by("id","desc");
		$crud->set_theme('datatables');
		$crud->set_subject('Slide');
		$crud->unset_print();
        $crud->unset_export();
		$crud->fields('image','title_image','description_image','title_slide','end_of_title','description_slide','link','position','categorie');
		$crud->required_fields('image','title_image','description_image','title_slide','end_of_title','description_slide','categorie');
        $crud->unset_texteditor("description_image");
		$crud->unset_texteditor("description_slide");
        $crud->set_field_upload('image','assets/img/slide/slides');
        $crud->set_relation("categorie","categories","nom_categorie");
        $crud->callback_before_upload(array($this,"_callback_upload_image"));
		$output = $crud->render();
		$data['output']=$output;
		$this->layout->set_theme('slideprincipal');
		$this->layout->view('slideprincipal',$data);
	}
    function _callback_upload_image($files_to_upload, $field_info) {
        $ext = '';
        foreach ($files_to_upload as $value) {
            $ext = strtolower(pathinfo($value['name'], PATHINFO_EXTENSION));
        }
		$allowed_formats = array("jpg", "jepg", "png");
        if (!in_array($ext, $allowed_formats)) {
            return 'L\'image doit etre de type (.jpg, .jpeg, .png)';
        }
        list($width, $height) = getimagesize($value['tmp_name']);
        if ((int) $width !=1580 && (int) $height!=800) {
            return 'L\'image doit etre de formation 1580px x 800px';
        }
    }
}