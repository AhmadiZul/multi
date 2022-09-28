<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_regis extends CI_Model{
     
    private $table = 'mahasiswa';
    public function __construct()
	{
        parent::__construct();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["IdMhsw" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("IdMhsw", "desc");
        $query = $this->db->get();
        return $query;
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    function agama(){
        $query = $this->db->get('agama');
        return $query;  
    }

    function prodi(){
        $query = $this->db->get('prodi');
        return $query;  
    }

    function provinsi(){
        $query = $this->db->get('provinces');
        return $query;  
    }

    function grup(){
        $query = $this->db->get('user_group');
        return $query;  
    }

    function kabupaten($provinces_id){
        $query = $this->db->get_where('regencies', array('province_id' => $provinces_id));
        return $query;
    }

    function kecamatan($regencies_id){
        $query = $this->db->get_where('districts', array('regency_id' => $regencies_id));
        return $query;
    }

    public function save()
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "nik" => $this->input->post('nik'),
            "nim" => $this->input->post('nim'),
            "agama" => $this->input->post('agama'),
            "tempat" => $this->input->post('tempat'),
            "tanggal" => $this->input->post('tanggal'),
            "nomor" => $this->input->post('nomor'),
            "alamat" => $this->input->post('alamat'),
            "provinsi" => $this->input->post('provinsi'),
            "kabupaten" => $this->input->post('kabupaten'),
            "kecamatan" => $this->input->post('kecamatan'),
            "prodi" => $this->input->post('prodi'),
            "id_user" =>$this->db->insert_id('t_user')
        );
        return $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
     
}