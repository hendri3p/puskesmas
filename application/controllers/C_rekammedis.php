<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rekammedis extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_rekammedis');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data['pasien']= $this->M_rekammedis->joindata()->result();
		$this->load->view('V_rekammedis', $data);
	}
}
