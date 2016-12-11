<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queries extends CI_Controller {

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
		$data=array();
    }
	public function index(){
		$this->layout->set_theme('empty');
		$this->layout->view('empty',array());
		$connected=0;
		if($this->input->is_ajax_request() && $this->session->userdata("admin_id")){
            if($this->input->post('clients',TRUE)=="clients"){
				$query=$this->db->select('*')->from('users_connected');

				$query=$this->db->get();

				$timestamp_2min = strtotime(date('Y-m-d H:i:s'));

	            $timestamp_2min-= 120;

           	 	$this->db->where('timestamp <=', $timestamp_2min, false);

            	$this->db->delete('users_connected');

	            $query=$this->db->select("*")->from('ci_sessions')->where('last_activity >=', $timestamp_2min);

	            $query=$this->db->get();

                foreach($query->result_array() as $row){

                    $q=$this->db->select("*")->from('users_connected')->where('ip',$row['ip_address']);

                    $q=$this->db->get();

                    if($q->num_rows()==0){

                        $this->db->insert('users_connected',array(

                            'ip'=>$row['ip_address'],

                            'timestamp'=>$row['last_activity']

                        ));

                    }

                }

				$connected= $query->num_rows();
			}
			echo json_encode(array('connected'=>$connected));
		}else{
			redirect(site_url());
		}
	}
}
