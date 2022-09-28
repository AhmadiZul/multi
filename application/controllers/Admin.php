<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mahasiswa extends CI_Controller {

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
        $data["title"] = "List Data Mahasiswa";
        $data["data_mahasiswa"] = $this->Mahasiswa_model->getAll();
        $data['dosen'] = $this->Mahasiswa_model->dosen()->result();
		$this->load->view('tpls/sidebar');
		$this->load->view('vw_admin', $data);
		$this->load->view('tpls/footer');

	}
}