<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dasboard extends CI_Controller {
 
	function __construct(){
		parent::__construct();
        $this->load->model("Mahasiswa_model");
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
	}
 
	public function index()
	{
		$this->load->view('tpls/sidebar');
		$this->load->view('vw_dasboard');
		$this->load->view('tpls/footer');
		
	}

	public function mahasiswa()
	{
		$this->load->view('tpls/sidebar');
		$this->load->view('vw_mahasiswa');
		$this->load->view('tpls/footer');

	}
}