<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vw_login');
		
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Auth->login_user($username,$password))
		{	
			/* if($username['user_akses']=='1'){ //Administrator
				$this->session->set_userdata('access','Administrator');
				$this->session->set_userdata('username');
				redirect('mahasiswa');

			}else if($username['user_akses']=='2'){ //Dosen
				$this->session->set_userdata('access','Dosen');
				$this->session->set_userdata('username');
				redirect('mahasiswa');

			}else if($username['user_akses']=='3'){ //Mahasiswa
				$this->session->set_userdata('access','Mahasiswa');
				$this->session->set_userdata('username');
				redirect('mahasiswa');
			} */
			// $this->session->set_userdata('username');
			redirect('mahasiswa');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('welcome');
		}
	}
 
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('welcome');
	}
 
	

	
}
?>
