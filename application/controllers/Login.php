<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('Mlogin','Mlogin');
    }
    
	function index(){
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('vw_login');
        }else{
            $url=base_url('mahasiswa');
            $url=base_url('dasboard');
            redirect($url);
        };
    }
    
    function autentikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
                
        $validasi_email = $this->Mlogin->query_validasi_email($username);
        if($validasi_email->num_rows() > 0){
            $validate_ps=$this->Mlogin->query_validasi_password($username,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['is_active']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('username',$username);
                    $id=$x['id'];
                    if($x['id_group']=='1'){ //Administrator
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','Admin');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('nama',$nama);
                        redirect('dasboard');

                    }else if($x['id_group']=='2'){ //Dosen
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','Mahasiswa');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('nama',$nama);
                        redirect('mahasiswa');

                    }else if($x['id_group']=='3'){ //Mahasiswa
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','Dosen');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('nama',$nama);
                        redirect('mahasiswa');
                    }
                }else{
                    $url=base_url('login');
                    echo $this->session->set_flashdata('msg','Akun kamu telah di blokir. Silahkan hubungi admin.');
                    redirect($url);
                }
            }else{
                $url=base_url('login');
                echo $this->session->set_flashdata('msg','password yang kamu masukan salah');
                redirect($url);
            }

        }else{
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','email yang kamu masukan salah');
            redirect($url);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }

}