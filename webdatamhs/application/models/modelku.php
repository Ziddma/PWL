<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model 
{

	//public function getData($tabel)
    //{
        // $datanih = $this->db->query("SELECT * FROM ".$tabel);
        // return $datanih->result_array();

	//}

    //query builder, pakek
    public function getData($tabel)
    {
        $syai = $this->db->get($tabel);
        return $syai->result_array();
    }

    public function masukkan($tabel, $data)
    {
        $syai = $this->db->insert($tabel, $data);
        return $syai;
    }

    public function hapus($table, $where)
    {
        $syai = $this->db->delete($table, $where);
        return $syai;
    }
    
    public function perbarui($table, $data, $where)
    {
        $syai = $this->db->update($table, $data, $where);
        return $syai;
    }

    public function getData_khusus($tabel, $where)
    {
        $syai = $this->db->get_where($tabel, $where);
        return $syai->result_array();
    }
}