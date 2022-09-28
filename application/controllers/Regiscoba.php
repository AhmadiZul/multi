<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Regiscoba extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_regis');
	}
 
	public function index()
	{
        $data['agama'] = $this->M_regis->agama()->result();
        $data['prodi'] = $this->M_regis->prodi()->result();
        $data['provinces'] = $this->M_regis->provinsi()->result();
		/* $data['user_group'] = $this->M_regis->grup()->result(); */
		$this->load->view('vw_regis', $data);
	}

    function kabupaten(){
        $provinces_id = $this->input->post('id',TRUE);
        $data = $this->M_regis->kabupaten($provinces_id)->result_array();
        echo json_encode($data);
    }

	function kecamatan(){
        $regencies_id = $this->input->post('id',TRUE);
        $data = $this->M_regis->kecamatan($regencies_id)->result_array();
        echo json_encode($data);
    }

	public function proses()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|callback_checkAlphaOnly|min_length[6]');
		$this->form_validation->set_rules('nik', 'nomor induk keluarga', 'trim|required|is_natural|min_length[12]');
		$this->form_validation->set_rules('nim', 'nomor induk mahasiswa', 'required|is_natural|min_length[6]');
		$this->form_validation->set_rules('agama', 'agama', 'required');
		$this->form_validation->set_rules('tempat', 'tempat lahir', 'required|callback_checkAlphaOnly');
		$this->form_validation->set_rules('tanggal', 'tanggal lahir', 'required|callback_valid_age');
		$this->form_validation->set_rules('nomor', 'nomor telepone', 'required|callback_checkNomor|trim');
		$this->form_validation->set_rules('email', 'alamat email', 'required');
		$this->form_validation->set_rules('alamat', 'alamat rumah', 'required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'required');
		$this->form_validation->set_rules('kabupaten', 'kabupaten', 'required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
		$this->form_validation->set_rules('prodi', 'prodi', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'username', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        
        $this->form_validation->set_message('required', '{field} harus diisi!');
		$this->form_validation->set_message('checkAlphaOnly', '{field} harus di isi dengan huruf!');
		$this->form_validation->set_message('checkNomor', '{field} anda tidak sesuai, silahkan cek nomor telepone anda kembali');
		$this->form_validation->set_message('min_length', '{field} tidak mencukupi batas minimal!!');
		$this->form_validation->set_message('is_natural', '{field} harus berupa angka!!');
		$this->form_validation->set_message('matches', '{field} harus sama dengan password!!');
		$this->form_validation->set_message('valid_age', '{field} harus melebihi 16 tahun!!');

		if ($this->form_validation->run()==false)
	   	{
			$data['agama'] = $this->M_regis->agama()->result();
        	$data['prodi'] = $this->M_regis->prodi()->result();
        	$data['provinces'] = $this->M_regis->provinsi()->result();
			/* $data['user_group'] = $this->M_regis->grup()->result(); */
			if(isset($_POST['provinces'])){
				$data['regencies'] = $this->M_regis->kabupaten($_POST['provinces'])->result();		
			}
			$this->load->view('vw_regis', $data); 
		}
		else
		{
			
			
			/* $id_user = $this->M_regis->save(); */
			
			$user = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
				'nama' => $this->input->post('nama'),
				/* 'id_group' => $this->input->post('id_group'), */
			);

			$this->db->insert('t_user',$user);
			$id_user = $this->db->insert_id();
			/* return $this->db->insert($this->table, $data); */

			$data = array(
				'id_user' => $id_user,
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'nomor' => $this->input->post('nomor'),
				'tempat' => $this->input->post('tempat'),
				'tanggal' => $this->input->post('tanggal'),
				'agama' => $this->input->post('agama'),
				'provinsi' => $this->input->post('provinsi'),
				'kabupaten' => $this->input->post('kabupaten'),
				'kecamatan' => $this->input->post('kecamatan'),
				'prodi' => $this->input->post('prodi'),
				'nik' => $this->input->post('nik'),
				'alamat' => $this->input->post('alamat'),
			);

			$saved = $this->db->insert('mahasiswa',$data);

			if ($saved) {
				$this->session->set_flashdata('message_success', 'Data mahasiswa berasil terdaftar!');
				return redirect('welcome');
			}

		}
	}

	
	public function checkAlphaOnly($str)
	{
			if (preg_match('/^[a-z ]*$/i', trim($str)))
			{
					return TRUE;
			}
					return FALSE;
			
	}

	public function checkNomor($val)
	{
			if (preg_match('/^(\+62|62|0)8[1-9][0-9]{6,9}$/', ($val)))return TRUE;
			
			else return FALSE;
			
	}

	public function valid_age($date)
	{
		$date1 = new DateTime("now");
        $date2 = new DateTime($date);
        $interval = $date1->diff($date2);
        if($interval->y < 16) return FALSE;
		else return TRUE;
	}

	
}
?>
