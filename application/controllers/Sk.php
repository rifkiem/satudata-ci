<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sk extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_sk');

        //load library
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Surat Keputusan',
            'data_sk'   => $this->model_sk->get_all(),

        );

        $this->load->view('sk/data_sk', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Data Surat Keputusan - Tambah Data'

        );

        $this->load->view('sk/tambah_sk', $data);
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('jenis_sk', 'Jenis SK', 'required');
        $this->form_validation->set_rules('nama_sk', 'Nama SK', 'required');
        $this->form_validation->set_rules('tgl_terbit_sk', 'Tanggal Terbit', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal Input', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_sk');
        }else{

           // mengambil value dari form
            $data['nomor_sk']       = $this->input->post('nomor_sk');
            $data['jenis_sk']       = $this->input->post('jenis_sk');
            $data['nama_sk']        = $this->input->post('nama_sk');
            $data['tgl_terbit_sk']  = $this->input->post('tgl_terbit_sk');
            $data['tgl_input']      = $this->input->post('tgl_input');
            $data['status']         = $this->input->post('status');

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/uploads/';
            $config['allowed_types']        = 'pdf';
            //$config['allowed_types']      = 'gif|jpg|png';
            //$config['max_size']           = 100;

            $this->load->library('upload', $config);

             if ( ! $this->upload->do_upload('file_url')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('tambah_sk', $error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['file_url'] = $upload_data['file_name'];

                //store pic data to the db
                $this->model_sk->simpan($data);

                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! data berhasil disimpan. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

                redirect('sk/');
            }
        }
    }

    public function edit($id_sk)
    {
        $id_sk = $this->uri->segment(3);

        $data = array(

            'title'     => 'Data Surat Keputusan - Edit Data',
            'data_sk'   => $this->model_sk->edit($id_sk)

        );

        $this->load->view('sk/edit_sk', $data);
    }

    public function update()
    {
        $id['id_sk'] = $this->input->post("id_sk");
        $data = array(

            'nomor_sk'         => $this->input->post("nomor_sk"),
            'jenis_sk'         => $this->input->post("jenis_sk"),
            'nama_sk'          => $this->input->post("nama_sk"),
            'tgl_terbit_sk'    => $this->input->post("tgl_terbit_sk"),
            'tgl_input'        => $this->input->post("tgl_input"),
            'status'           => $this->input->post("status"),
        );

        $this->model_sk->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil diperbarui. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

        //redirect
        redirect('sk/');

    }

    public function hapus($id_sk)
    {
        $id['id_sk'] = $this->uri->segment(3);

        $this->model_sk->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil di Hapus. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');

        //redirect
        redirect('sk/');

    }


  // ----------------------------Controller petugas-------------------------
    public function index_petugas()
    {
        $data = array(

            'title'     => 'Data Surat Keputusan',
            'data_sk'   => $this->model_sk->get_all(),

        );

        $this->load->view('sk/data_sk_petugas', $data);
    }

    public function tambah_petugas()
    {
        $data = array(

            'title'     => 'Data Surat Keputusan - Tambah Data'

        );

        $this->load->view('sk/tambah_sk_petugas', $data);
    }

    public function simpan_petugas()
    {
        $this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('jenis_sk', 'Jenis SK', 'required');
        $this->form_validation->set_rules('nama_sk', 'Nama SK', 'required');
        $this->form_validation->set_rules('tgl_terbit_sk', 'Tanggal Terbit', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal Input', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_sk_petugas');
        }else{

           // mengambil value dari form
            $data['nomor_sk']       = $this->input->post('nomor_sk');
            $data['jenis_sk']       = $this->input->post('jenis_sk');
            $data['nama_sk']        = $this->input->post('nama_sk');
            $data['tgl_terbit_sk']  = $this->input->post('tgl_terbit_sk');
            $data['tgl_input']      = $this->input->post('tgl_input');
            $data['status']         = $this->input->post('status');

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/uploads/';
            $config['allowed_types']        = 'pdf';
            //$config['allowed_types']      = 'gif|jpg|png';
            //$config['max_size']           = 100;

            $this->load->library('upload', $config);

             if ( ! $this->upload->do_upload('file_url')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('tambah_sk_petugas', $error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['file_url'] = $upload_data['file_name'];

                //store pic data to the db
                $this->model_sk->simpan($data);

                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! data berhasil disimpan. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

                redirect('sk/index_petugas');
            }
        }
    }

    public function edit_petugas($id_sk)
    {
        $id_sk = $this->uri->segment(3);

        $data = array(

            'title'     => 'Data Surat Keputusan - Edit Data',
            'data_sk'   => $this->model_sk->edit($id_sk)

        );

        $this->load->view('sk/edit_sk_petugas', $data);
    }

    public function update_petugas()
    {
        $id['id_sk'] = $this->input->post("id_sk");
        $data = array(

            'nomor_sk'         => $this->input->post("nomor_sk"),
            'jenis_sk'         => $this->input->post("jenis_sk"),
            'nama_sk'          => $this->input->post("nama_sk"),
            'tgl_terbit_sk'    => $this->input->post("tgl_terbit_sk"),
            'tgl_input'        => $this->input->post("tgl_input"),
            'status'           => $this->input->post("status"),
        );

        $this->model_sk->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Sukses! Data Berhasil diperbarui. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>');

        //redirect
        redirect('sk/index_petugas');

    }

 //----------------------------------------------------------------------------


    public function index_pengguna()
    {
        $data = array(

            'title'     => 'Data Surat Keputusan',
            'data_sk'   => $this->model_sk->get_all(),

        );

        $this->load->view('sk/data_sk_pengguna', $data);
    }
}