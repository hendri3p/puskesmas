<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bpjs extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_bpjs');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data['berobat'] = $this->M_bpjs->tampil_data()->result();
		$this->load->view('V_bpjs', $data);
	}
}
