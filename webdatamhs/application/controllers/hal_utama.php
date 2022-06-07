<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelku');
    }

	public function index()
	{
		//$this->load->view('welcome_message');
        // $datanih = $this->db->query("SELECT * FROM mhs");
        // foreach($datanih->result_array() as $mhs){
        //     echo "Nama: ".$mhs['nama']."<br>";
        //     echo "Alamat: ".$mhs['alamat']."<br>";
        //     echo "NIM: ".$mhs['nim']."<br>";
        // }
        // $this->load->model('modelku');
        // $dataMhs = $this->modelku->getData("mhs");
        // $data = array(
		// 	'nama' => $nama
		// );

        // $data = array(
        //     'data' => $dataMhs
        // );
        // $this->load->view('Home', $data);

        $this->load->view('form_login');
	}

    public function aksi_login()
	{
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $dataPenunjuk = array(
            'user' => $user,
            'pass' => $pass,
        );

        $cek = count($this->modelku->getData_khusus("duser", $dataPenunjuk));

        if($cek > 0){
            $data_session = array
            (
                'nama' => $user,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect(base_url()."index.php/hal_admin");
        }
        else{
            redirect(base_url());
        }
    }
    // public function mhs()
	// {
    //     if($this->session->userdata('status') == "login")
    //     {
    //         $dataMhs = $this->modelku->getData("mhs");
            
    //         $data = array("dataMu" => $dataMhs);

    //         $this->load->view('Home', $data);
    //     }
    //     else
    //     {
    //         redirect(base_url());
    //     }
	// }

    public function daftar()
    {
        $this->load->view('form_daftar');
    }

    public function aksi_daftar()
    {
        $dataInputan = array(
            'user' => $this->input->post('username'),
            'pass' => $this->input->post('password')
        );
        $this->modelku->masukkan('duser', $dataInputan);
        redirect(base_url(), 'refresh');
    }

    public function logout ()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    // public function baca_form()
    // {
    //     $this->load->view('form_tambah');
    // }

    // public function tambah_Data()
    // {
    //     $dataInputan = array(
    //         'nama' => $this->input->post('nama'),
    //         'alamat' => $this->input->post('alamat'),
    //         'nim' => $this->input->post('nim')
    //     );
    //     $this->modelku->masukkan('mhs', $dataInputan);
    //     redirect(base_url(), 'refresh');
    // }

    // public function hapus_data($penunjuk)
    // {
    //     $dataPenunjuk = array(
    //         'id' => $penunjuk
    //     );

    //     $this->modelku->hapus('mhs', $dataPenunjuk);
    //     redirect(base_url(), 'refresh');
    // }

    // public function ambil_DataWhere($penunjuk)
    // {
    //     $dataPenunjuk = array(
    //         'id' => $penunjuk
    //     );

    //     $dataMhs = $this->modelku->getData_khusus("mhs", $dataPenunjuk);
    //     $data = array(
    //         "dataMu" => $dataMhs
    //     );

    //     $this->load->view("form_edit", $data);
    // }


    // public function update_data(){
    //     $dataInputan = array(
    //         'nama' => $this->input->post('nama'),
    //         'alamat' => $this->input->post('alamat'),
    //         'nim' => $this->input->post('nim')
    //     );

    //     $dataPenunjuk = array(
    //         'id' => $this->input->post('id')
    //     );
    //     $dataMhs = $this->modelku->perbarui("mhs", $dataInputan, $dataPenunjuk);
    //     redirect(base_url(), 'refresh');
    // }

	// public function fungsi()
	// {
	// 	$this->load->view
	// 	('Home');
	// }

	// public function param($nama)
	// {
	// 	$data = array(
	// 		'nama' => $nama
	// 	);
	// 	$this->load->view('Home', $data);
	// }
}