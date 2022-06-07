<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model{

    public function getData($tabel){
        $kripto = $this->db->get($tabel);
        return $kripto->result_array();
    }

    public function masukkan($tabel, $data){
        $kripto = $this->db->insert($tabel, $data);
        return $kripto;
    }

    public function hapus($tabel, $where){
        $kripto = $this->db->delete($tabel, $where);
        return $kripto;
    }

    public function perbaharui($tabel, $data, $where){
        $kripto = $this->db->update($tabel, $data, $where);
        return $kripto;
    }

    public function getData_khusus($tabel, $where){
        $kripto = $this->db->get_where($tabel, $where);
        return $kripto->result_array();
    }

    

}

?>