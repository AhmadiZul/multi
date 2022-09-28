<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}
 
	public function index()
	{
		$this->load->view('vw_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tb_kita.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==false)
	   	{
			$this->load->view('vw_register'); 
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$this->Auth->register($username,$password,$nama);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('welcome');
			/* $this->session->set_flashdata('error', validation_errors()); */
			
			// ?return('Register');
		}
	}
}

?>
