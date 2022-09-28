<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_user extends CI_Model{
     
    private $table = 't_user';
    public function __construct()
	{
        parent::__construct();
	}

    public function getById($id)
    {
        $id = $this->db->insert_id();
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query;
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    public function save()
    {
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "email" => $this->input->post('email'),
            "real_name" => $this->input->post('real_name'),
            
        );
        return $this->db->insert($this->table, $data);
    }
     
}