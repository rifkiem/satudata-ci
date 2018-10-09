<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_notel extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tbl_notel')
                 ->order_by('id_notel', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $insert_data['direktorat']    = $data['direktorat'];
        $insert_data['nama']          = $data['nama'];
        $insert_data['no_telepon']    = $data['no_telepon'];
        $insert_data['no_handphone']  = $data['no_handphone'];
        
        $query = $this->db->insert('tbl_notel', $insert_data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_notel)
    {

        $query = $this->db->where("id_notel", $id_notel)
                ->get("tbl_notel");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tbl_notel", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tbl_notel", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}