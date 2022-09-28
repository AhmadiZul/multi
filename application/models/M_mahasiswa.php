<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_mahasiswa extends CI_Model 
{
//karyawan aktif
    var $table = 'tb_kita';
    var $column_order = array(null, 'nama', 'jenis_kelamin','alamat','agama','no_hp','email',''); //set column field database for datatable orderable
    var $column_search = array('nama', 'jenis_kelamin', 'alamat','agama','no_hp','email'); //set column field database for datatable searchable 
    var $order = array('id' =--> 'asc'); // default order 
	
    public function __construct()
    {
        parent::__construct();
    }
 
    private function _get_query()
    {
		$this->db->select('pegawai.id, pegawai.nik_karyawan, CONCAT(pegawai.nama_depan," ", pegawai.nama_belakang) AS karyawan, pegawai.start_join, pegawai.no_hp, client.nama_client, admin.nama');
		$this->db->join('client', 'client.id = pegawai.id_vendor', 'left');
		$this->db->->join('lokasi', 'lokasi.id = pegawai.id_lokasi', 'left');
		$this->db->join('client_project', 'pegawai.id_project = client_project.id', 'left');
		$this->db->join('admin', 'client_project.id_pic = admin.id_admin', 'left');
		$this->db->from($this->table);
		$this->db->where('pegawai.del', 0);
		$this->db->where('pegawai.status_aktif', 1);
			
        $i = 0;
        foreach ($this->column_search as $emp) // loop column 
        {
			if(isset($_POST['search']['value']) &amp;&amp; !empty($_POST['search']['value']))
			{
				$_POST['search']['value'] = $_POST['search']['value'];
			} else {
				$_POST['search']['value'] = '';
			}
			
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start();
					$this->db->like($emp, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($emp, $_POST['search']['value']);
				}
 
				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this-&gt;column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this-&gt;order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
    }
 
    function get_employees()
    {
        $this-&gt;_get_query();
		if(isset($_POST['length']) &amp;&amp; $_POST['length'] &lt; 1) {
			$_POST['length']= '10';
		} else
		$_POST['length']= $_POST['length'];
		
		if(isset($_POST['start']) &amp;&amp; $_POST['start'] &gt; 1) {
			$_POST['start']= $_POST['start'];
		}
        $this->db->limit($_POST['length'], $_POST['start']);
		//print_r($_POST);die;
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this-&gt;_get_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this-&gt;table);
        return $this->db->count_all_results();
    }