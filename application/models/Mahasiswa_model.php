<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $table = 'proposal';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',  //samakan dengan atribute name pada tags input
                'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'JenisKelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'NoHp',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
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
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    function dosen(){
        $query = $this->db->get('dosen');
        return $query;  
    }

    function mahasiswa($id){
        $query = $this->db->get_where('mahasiswa',['id_user'=>$id]);
        return $query->row();  
    }

    public function change_status($id, $data)
    {
        return $this->db->update('proposal', $data, ['id'=> $id] );
    }


    public function semua(){
        $id = $this->session->userdata('id');
        $this->db->select('d.nama_d,p.id, p.proposal, p.status, m.nama, m.email');
        $this->db->from('proposal as p');
        $query= $this->db->join('mahasiswa as m ', 'm.IdMhsw = p.id_mahasiswa');
        $query= $this->db->join('dosen as d ', 'd.id = p.dosen');
        $query= $this->db->where(array('d.id_user'=> $id));
        return $query->get()->result();
    }
    public function mhsw(){
        $id = $this->session->userdata('id');
        $this->db->select('d.nama_d, p.id, p.proposal, p.status, m.nama, m.email');
        $this->db->from('proposal as p');
        $query= $this->db->join('mahasiswa as m ', 'm.IdMhsw = p.id_mahasiswa');
        $query= $this->db->join('dosen as d ', 'd.id = p.dosen');
        $query= $this->db->where(array('m.id_user'=> $id));
        return $query->get()->result();
    }

    //menyimpan data mahasiswa
    public function save()
    {   
        /* $this->db->insert('mahasiswa'); */
        $id = $this->session->userdata('id');
        $mahasiswa = $this->mahasiswa($id);
        $data = array(
            'id_mahasiswa' => $mahasiswa->IdMhsw,
            "proposal" => $this->input->post('proposal'),
            "dosen" => $this->input->post('dosen')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update($id)
    {
        $data = array(
            "proposal" => $this->input->post('proposal'),
            "dosen" => $this->input->post('dosen')
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}