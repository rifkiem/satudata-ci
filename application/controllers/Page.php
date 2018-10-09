<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('v_dashboard');
  }

// function data_pengguna(){
 //  function ini hanya boleh diakses oleh admin dan petugas
//  if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
//    $this->load->view('v_pengguna');
//   }else{
//    echo "Anda tidak berhak mengakses halaman ini";
//   }
//  }


}
