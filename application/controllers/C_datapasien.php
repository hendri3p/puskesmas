<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_datapasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_datapasien');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data['pasien'] = $this->M_datapasien->tampil_data()->result();
		$this->load->view('V_datapasien', $data);
	}

	public function search(){
		$keyword = $this->input->get('keyword');
		$data2 = $this->M_datapasien->search_data($keyword);
		$data2 = array(
			'keyword' => $keyword,
			'data2' => $data2
		);
		$this->load->view('V_datapasien', $data2);
	}
}
