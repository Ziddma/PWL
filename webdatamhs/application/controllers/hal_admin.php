<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
        
        if($this->session->userdata('status') != "login")
        {
            redirect(base_url());
        }

    }

    public function index()
	{
        if($this->session->userdata('status') == "login")
        {
            $dataMhs = $this->modelku->getData("mhs");
            
            $data = array("dataMu" => $dataMhs);

            $this->load->view('Home', $data);
        }
        else
        {
            redirect(base_url());
        }
	}

    public function baca_form()
    {
        $this->load->view('form_tambah');
    }

    public function tambah_Data()
    {
        $dataInputan = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nim' => $this->input->post('nim')
        );
        $this->modelku->masukkan('mhs', $dataInputan);
        redirect(base_url()."index.php/hal_admin/");
    }

    public function hapus_data($penunjuk)
    {
        $dataPenunjuk = array(
            'id' => $penunjuk
        );

        $this->modelku->hapus('mhs', $dataPenunjuk);
        redirect(base_url()."index.php/hal_admin/");
    }

    public function ambil_DataWhere($penunjuk)
    {
        $dataPenunjuk = array(
            'id' => $penunjuk
        );

        $dataMhs = $this->modelku->getData_khusus("mhs", $dataPenunjuk);
        $data = array(
            "dataMu" => $dataMhs
        );

        $this->load->view("form_edit", $data);
    }


    public function update_data(){
        $dataInputan = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nim' => $this->input->post('nim')
        );

        $dataPenunjuk = array(
            'id' => $this->input->post('id')
        );
        $dataMhs = $this->modelku->perbarui("mhs", $dataInputan, $dataPenunjuk);
        redirect(base_url()."index.php/hal_admin/");
    }
}