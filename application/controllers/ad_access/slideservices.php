<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideservices extends CI_Controller {

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
		$crud->set_table('slideservices')->order_by("position","asc")->order_by("id","desc");
		$crud->set_theme('datatables');
		$crud->set_subject('Slide');
		$crud->unset_print();
        $crud->unset_export();
		$crud->fields('image_principale','icone_1','icone_2','icone_3','icone_4','avantage_1_icone','avantage_2_icone','avantage_3_icone','titre_avantage_1','text_avantage_1','titre_avantage_2','text_avantage_2','titre_avantage_3','text_avantage_3','position','categorie');
		$crud->columns('image_principale');
        $crud->required_fields('image_principale','avantage_1_icone','titre_avantage_1','text_avantage_1','categorie');
        $crud->unset_texteditor("text_avantage_1");
        $crud->unset_texteditor("text_avantage_2");
        $crud->unset_texteditor("text_avantage_3");
        $crud->set_field_upload('image_principale','assets/img/services-carousel');
        $crud->set_field_upload('icone_1','assets/img/icons');
        $crud->set_field_upload('icone_2','assets/img/icons');
        $crud->set_field_upload('icone_3','assets/img/icons');
        $crud->set_field_upload('icone_4','assets/img/icons');
        $crud->display_as("icone_1","icone animée 1 (70px*70px)");
        $crud->display_as("icone_2","icone animée 2 (70px*70px)");
        $crud->display_as("icone_3","icone animée 3 (70px*70px)");
        $crud->display_as("icone_4","icone animée 4 (70px*70px)");
        $crud->display_as("avantage_1_icone", "Icone avantage 1 Font-Awesome <a href='http://fontawesome.io/icons/'>Lien des icones à choisir</a>");
        $crud->display_as("avantage_2_icone", "Icone avantage 2 Font-Awesome <a href='http://fontawesome.io/icons/'>Lien des icones à choisir</a>");
        $crud->display_as("avantage_3_icone", "Icone avantage 3 Font-Awesome <a href='http://fontawesome.io/icons/'>Lien des icones à choisir</a>");
        $crud->display_as("image_principale","Image principale (487px * 387px)");
        $crud->set_relation("categorie","categories","nom_categorie");
        $crud->callback_before_upload(array($this,"_callback_upload_image"));
		$output = $crud->render();
		$data['output']=$output;
		$this->layout->set_theme('slideservices');
		$this->layout->view('slideservices',$data);
	}
    function _callback_upload_image($files_to_upload, $field_info) {
        $ext = '';
        foreach ($files_to_upload as $value) {
            $ext = strtolower(pathinfo($value['name'], PATHINFO_EXTENSION));
            $allowed_formats = array("jpg", "jepg", "png", "gif");
            if (!in_array($ext, $allowed_formats)) {
                return 'L\'image du champ'.$value['field_name'].'doit etre de type (.jpg, .jpeg, .png .gif)';
            }
            list($width, $height) = getimagesize($value['tmp_name']);
            if ((int) $width !=70 && (int) $height!=70 && ($value['field_name']=="icone_1" || $value['field_name']=="icone_2" || $value['field_name']=="icone_3" || $value['field_name']=="icone_4")) {
                return 'Les icones doivent être de taille 70px x 70px';
            }
            if((int) $width !=487 && (int) $height!=387 && $value['field_name']=="image_principale"){
                return 'L\'image du slide doit être de taille 487px x 387px';
            }
        }
    }
}