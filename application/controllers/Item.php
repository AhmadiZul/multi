<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Item extends CI_Controller {


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->model("Mahasiswa_model");
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function index()
   {
      $data['dosen'] = $this->Mahasiswa_model->dosen()->result();
      $this->load->view('vw_mahasiswa', $data);
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function get_items()
   {


      $query = $this->Mahasiswa_model->mhsw();
      


      $data = [];


      foreach($query as $p => $r) {
         if($r->status === '1'){
            $btn_verif = '<span class="badge bg-success">Terverifikasi</span>';
        }else{
            $btn_verif = '<span class="badge bg-warning">Belum Terverifikasi</span>';
        }

           $data[] = array(
                $p+1,
                $r->nama,
                ''.$this->session->userdata('username').'',
                '<strong>'.$r->proposal.'</strong>',
                $r->nama_d,
                $btn_verif
           );
      }


      $result = array(
                 "data" => $data
            );


      echo json_encode($result);
      /* exit(); */
   }
   public function verif()
   {
       $id = $this->input->post("id");
       
       $data = array(
           'status' => '1',
       );
       $this->Mahasiswa_model->change_status($id, $data);
     echo json_encode(['success' => true, 'message' => 'Mahasiswa berhasil diupdate!']);
   }

   public function get_itums()
   {
     
      $query = $this->Mahasiswa_model->semua();


      $data = [];
		
        $btn_verif = "";



      foreach($query as $p => $r) {
         if($r->status === '1'){
            $btn_verif = '<span class="badge bg-success">Terverifikasi</span>';
        }else{
            $btn_verif = '<button type="button" class="badge bg-warning" data-bs-id ="'.$r->id.'" data-bs-nama ="'.$r->nama.'" data-bs-proposal="'.$r->proposal.'" data-bs-toggle="modal" data-bs-target="#modal_verif">Belum Terverifikasi</button>';
        }

         $data[] = array(
            $p+1,
            $r->nama,
            $r->email,
            '<strong>'.$r->proposal.'</strong>',
           $btn_verif
       );
      }


      $result = array(
                 "data" => $data
            );


      echo json_encode($result);
      /* exit(); */
   }
}