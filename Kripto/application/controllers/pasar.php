<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        
    }

	public function index()
	{
		$data['judul'] = 'PasarCrypto';

		$this->load->view('template/header',  $data);
		// Fungsi READ
		$dataKripto = $this->model->getData('daftar_kripto');          
		$data = array("dataKripto" => $dataKripto);
		
		$this->load->view('pasar/formBeli.php', $data);

		$this->load->view('pasar/formTampil.php');
		$this->load->view('template/footer');	
	}

	public function beliKripto()
	{
		$dataBeli = array(
			'nama_kripto' => $this->input->post('nama_kripto'),
			'harga' => $this->input->post('harga'),
			'total' => $this->input->post('total')
		);
		$this->model->masukkan('daftar_kripto', $dataBeli);
		redirect(base_url('index.php/pasar'));

	}

	public function jualKripto($pointer)
	{
		$dataPointer = array(
			'nama_kripto' => $pointer
		);
		$this->model->hapus('daftar_kripto', $dataPointer);
		redirect(base_url('index.php/pasar'));

	}

	public function ambil_DataWhere($pointer){
		$dataWhere = array(
			'nama_kripto' => $pointer
		);
		$dataKripto = $this->model->getData_khusus('daftar_kripto', $dataWhere);
		$data = array("dataKripto" => $dataKripto);


		$this->load->view('template/header',  $data);
		$this->load->view('pasar/formUpdate.php', $data);
		$this->load->view('template/footer');	
	}

	public function perbaharui(){
		$dataInput = array(
			'nama_kripto' => $this->input->post('nama_kripto'),
			'harga' => $this->input->post('harga'),
			'total' => $this->input->post('total')
		);

		$dataPointer = array(
			'no' =>$this->input->post('no')
		);
		$dataKripto = $this->model->perbaharui('daftar_kripto', $dataInput, $dataPointer);
		redirect(base_url('index.php/pasar'));
	}

	
}
