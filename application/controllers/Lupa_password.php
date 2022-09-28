<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lupa_password extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model("M_account");
     }
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Halaman Reset Password | Tutorial reset password CodeIgniter @ https://recodeku.blogspot.com';
            $this->load->view('account/v_lupa_password', $data);
        } else {
            $email = $this->input->post('email');
            $userInfo = $this->M_account->getUserInfoByEmail($email);

            if (!$userInfo) {
                $this->session->set_flashdata('salah', 'email address salah, silakan coba lagi.');
                redirect(site_url('login'), 'refresh');
            }

            //build token   
            $data['email'] = $email;
            $this->session->set_userdata($data);

            
            $url = site_url() . 'lupa_password/reset_password/';
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $message = '';
            $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';
            $message .= '<strong>Silakan klik link ini:</strong> ' . $link;

            echo $message; //send this through mail  
            exit;
        }
    }

    public function reset_password()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/v_reset_password');
        } else {
            $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
            $email = $this->session->userdata('email');
            if (!$this->M_account->updatePassword($email, $password)) {
                $this->session->set_flashdata('sukses', 'Update password gagal.');
            } else {
                $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');
             redirect(base_url('login'), 'refresh');
            }
            
        }
    }

    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}