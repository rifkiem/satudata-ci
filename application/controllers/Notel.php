<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notel extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_notel');

        //load library
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone',
            'data_notel'   => $this->model_notel->get_all(),

        );

        $this->load->view('notel/data_notel', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone - Tambah Data'

        );

        $this->load->view('notel/tambah_notel', $data);
    }

    public function simpan()
    {
        $this->form_validation->set_rules('direktorat', 'Direktorat', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pemilik', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        $this->form_validation->set_rules('no_handphone', 'No Handphone', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_notel');
        }else{

           // mengambil value dari form
            $data['direktorat']         = $this->input->post('direktorat');
            $data['nama']               = $this->input->post('nama');
            $data['no_telepon']         = $this->input->post('no_telepon');
            $data['no_handphone']       = $this->input->post('no_handphone');
           
            $this->model_notel->simpan($data);

                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! data berhasil disimpan. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

                redirect('notel/');
            }
        }
    

    public function edit($id_notel)
    {
        $id_notel = $this->uri->segment(3);

        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone - Edit Data',
            'data_notel'   => $this->model_notel->edit($id_notel)

        );

        $this->load->view('notel/edit_notel', $data);
    }

    public function update()
    {
        $id['id_notel'] = $this->input->post("id_notel");
        $data = array(

            'direktorat'      => $this->input->post("direktorat"),
            'nama'            => $this->input->post("nama"),
            'no_telepon'      => $this->input->post("no_telepon"),
            'no_handphone'    => $this->input->post("no_handphone"),

        );

        $this->model_notel->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil diperbarui. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

        //redirect
        redirect('notel/');

    }

    public function hapus($id_notel)
    {
        $id['id_notel'] = $this->uri->segment(3);

        $this->model_notel->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil di Hapus. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');

        //redirect
        redirect('notel/');

    }


  // ----------------------------Controller petugas-------------------------
    public function index_petugas()
    {
        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone',
            'data_notel'   => $this->model_notel->get_all(),

        );

        $this->load->view('notel/data_notel_petugas', $data);
    }

    public function tambah_petugas()
    {
        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone - Tambah Data'

        );

        $this->load->view('notel/tambah_notel_petugas', $data);
    }

    public function simpan_petugas()
    {
        $this->form_validation->set_rules('direktorat', 'Direktorat', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pemilik', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        $this->form_validation->set_rules('no_handphone', 'No Handphone', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_notel_petugas');
        }else{

           // mengambil value dari form
            $data['direktorat']       = $this->input->post('direktorat');
            $data['nama']             = $this->input->post('nama');
            $data['no_telepon']       = $this->input->post('no_telepon');
            $data['no_handphone']     = $this->input->post('no_handphone');
           
                $this->model_notel->simpan($data);

                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! data berhasil disimpan. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

                redirect('notel/index_petugas');
            }
        }
    

    public function edit_petugas($id_notel)
    {
        $id_notel = $this->uri->segment(3);

        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone - Edit Data',
            'data_notel'   => $this->model_notel->edit($id_notel)

        );

        $this->load->view('notel/edit_notel_petugas', $data);
    }

    public function update_petugas()
    {
        $id['id_notel'] = $this->input->post("id_notel");
        $data = array(

            'direktorat'    => $this->input->post("direktorat"),
            'nama'          => $this->input->post("nama"),
            'no_telepon'    => $this->input->post("no_telepon"),
            'no_handphone'  => $this->input->post("no_handphone"),
        );

        $this->model_notel->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil diperbarui. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

        //redirect
        redirect('notel/index_petugas');

    }

 //----------------------------------------------------------------------------


    public function index_pengguna()
    {
        $data = array(

            'title'     => 'Data Nomor Telepon & Handphone',
            'data_notel' => $this->model_notel->get_all(),

        );

        $this->load->view('notel/data_notel_pengguna', $data);
    }
}