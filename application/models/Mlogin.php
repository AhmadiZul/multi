<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

    function query_validasi_email($email){
    	$result = $this->db->query("SELECT * FROM t_user WHERE username='$email' LIMIT 1");
        return $result;
    }

    function query_validasi_password($email,$password){
    	$result = $this->db->query("SELECT * FROM t_user WHERE username='$email' AND password='$password' LIMIT 1");
        return $result;
    }

} 