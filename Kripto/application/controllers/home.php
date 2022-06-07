<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'CryptoDinus';
		$this->load->view('template/header',  $data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
		
	}


}
