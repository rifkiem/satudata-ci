<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sk extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tbl_sk')
                 ->order_by('id_sk', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $insert_data['nomor_sk']       = $data['nomor_sk'];
        $insert_data['jenis_sk']       = $data['jenis_sk'];
        $insert_data['nama_sk']        = $data['nama_sk'];
        $insert_data['tgl_terbit_sk']  = $data['tgl_terbit_sk'];
        $insert_data['tgl_input']      = $data['tgl_input'];
        $insert_data['status']         = $data['status'];
        $insert_data['file_url']       = $data['file_url'];
        
        $query = $this->db->insert('tbl_sk', $insert_data);


     //   $query = $this->db->insert("tbl_sk", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_sk)
    {

        $query = $this->db->where("id_sk", $id_sk)
                ->get("tbl_sk");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tbl_sk", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tbl_sk", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}