<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mahasiswa extends CI_Controller {
 

    function __construct(){
		parent::__construct();
        $this->load->model("Mahasiswa_model");
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
	}


	public function index()
	{
        $data["title"] = "List Data Mahasiswa";
        $data["data_mahasiswa"] = $this->Mahasiswa_model->getAll();
        $data['dosen'] = $this->Mahasiswa_model->dosen()->result();
		$this->load->view('tpls/sidebar');
		$this->load->view('vw_mahasiswa', $data);
		$this->load->view('tpls/footer');

	}

    public function add()
    {
        $Mahasiswa = $this->Mahasiswa_model; //objek model
        $this->form_validation->set_rules('proposal', 'proposal', 'required');
        
        $this->form_validation->set_message('required', '{field} harus diisi!');
        $this->form_validation->set_message('is_unique', '{field} Sudah digunakan!');
        $this->form_validation->set_message('matches', '{field} harus sama dengan {param}!');

        if ($this->form_validation->run() === FALSE) {
            foreach ($this->input->post() as $key => $value) 
            {
                $res[$key] = form_error($key, '<div class="text-danger">', '</div>');
            }
            echo json_encode(['success' => false, 'message' => $res]);
        }else{
           /*  $id = $this->Mahasiswa_model->mahasiswa() */
            $Mahasiswa->save();//menerapkan rules validasi pada mahasiswa_model
            echo json_encode(['success' => true, 'message' => 'mahasiswa berasil ditambah']);
        }
       

       
    }

    public function edit($id=null)
    {
        if (!isset($id)) redirect('mahasiswa');

        $Mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($Mahasiswa->rules());
        $Mahasiswa->update($id);
        echo json_encode(['success' => true, 'message' => 'mahasiswa berasil diupdate']);
        
    }
    public function delete($id)
    {
        $deleted = $this->Mahasiswa_model->delete($id);

        if ($deleted){
            echo json_encode(['success' => true, 'message' => 'mahasiswa berasil didelete']);
        }
    }
}