<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
				$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

		         }else{ //akses petugas
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else{ //jika login sebagai pengguna
					$cek_pengguna=$this->login_model->auth_pengguna($username,$password);
					if($cek_pengguna->num_rows() > 0){
							$data=$cek_pengguna->row_array();
        					$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['nik']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();

							echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible"> <b>Login Gagal!</b> Silahkan periksa kembali username dan password anda. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');


							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible"> <b>Login Gagal!</b> Silahkan periksa kembali username dan password anda. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');
        redirect($url);
    }

}
