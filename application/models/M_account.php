<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Account extends CI_Model
{

    function daftar($data)
    {
        $this->db->insert('t_user', $data);
    }

    //Start: method tambahan untuk reset code  
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('t_user', array('id_user' => $id), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($email)
    {
        $this->db->where('username', $email);
        $q = $this->db->get('t_user');
        return $q->row();
    }

    public function insertToken($user_id)
    {
        $token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d');

        $string = array(
            'token' => $token,
            'user_id' => $user_id,
            'created' => $date
        );
        $query = $this->db->insert_string('tokens', $string);
        $this->db->query($query);
        return $token . $user_id;
    }

    public function isTokenValid($token)
    {
        $tkn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn,
            'tokens.user_id' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
        } else {
            return false;
        }
    }

    public function updatePassword($email, $password)
    {
        $this->db->where('username', $email);
        $this->db->update('t_user', array('password' => $password));
        return true;
    }
    //End: method tambahan untuk reset code  
}