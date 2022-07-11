<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tambahdatapasien extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('M_datapasien');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$this->load->view('V_tambahdatapasien');
	}

    public function tambah(){
        $no_kk = $this->input->post('no_kk');
        $nik = $this->input->post('nik');
        $nama_pasien = $this->input->post('nama_pasien');
        $umur_pasien = $this->input->post('umur_pasien');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir_pasien = $this->input->post('tgl_lahir_pasien');
        $gender = $this->input->post('gender');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $no_bpjs = $this->input->post('no_bpjs');

        $data = array(
            'no_kk' => $no_kk,
            'nik' => $nik,
            'nama_pasien' => $nama_pasien,
            'umur_pasien' => $umur_pasien,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir_pasien' => $tgl_lahir_pasien,
            'gender' => $gender,
            'tinggi_badan' => $tinggi_badan,
            'berat_badan' => $berat_badan,
            'no_bpjs' => $no_bpjs
        );
        $this->M_datapasien->input_data($data, 'pasien');
        redirect('C_datapasien');
    }
}
