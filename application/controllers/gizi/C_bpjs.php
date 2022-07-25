<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bpjs extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_berobat');
	}

	public function index()
	{
		$data['berobat'] = $this->M_berobat->tampil_data_bpjs();
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
		if (!empty($this->input->get('tgl_berobat'))) {
			$data['berobat'] = $this->M_berobat->search_data_bpjs($data['tgl_berobat']);
		}
		$this->load->view('Klinik_gizi/V_bpjs', $data);
	}

	public function edit($id_berobat)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$where = array('id_berobat' => $id_berobat);
		$data['berobat'] = $this->M_berobat->edit_data($where, 'berobat')->row_array();
		$this->load->view('V_editbpjs', $data);
	}

	public function update_data($id_berobat)
	{ // check image
		if (!empty($_FILES['hasil_lab']['name'])) {
			$config['upload_path']      = './assets/file_upload';
			$config['allowed_types']    = 'gif|jpg|png|pdf|docx|doc';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('hasil_lab')) {
				$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
				$where = array('id_berobat' => $id_berobat);
				$data['berobat'] = $this->M_berobat->edit_data($where, 'berobat')->row_array();
				$this->load->view('V_editbpjs', $data);
				// input database
			} else {
				$upload_image = array('upload_data' => $this->upload->data());
				// create thumbnail
				$config['image_library']    = 'gd2';
				$config['source_image']      = './assets/file_upload/' . $upload_image['upload_data']['file_name'];
				$config['new_image']        = './assets/file_upload/';
				$config['create_thumb']    = TRUE;
				$config['maintain_ratio']   = TRUE;
				$config['max_size']         = '2048';
				$config['thumb_marker']      = '';
				// end create thumbnail

				$diagnosa = $this->input->post('diagnosa');
				$rujukan = $this->input->post('rujukan');
				$jenis_obat = $this->input->post('jenis_obat');

				$data = array(
					'diagnosa' => $diagnosa,
					'hasil_lab'      => $upload_image['upload_data']['file_name'],
					'rujukan' => $rujukan,
					'jenis_obat' => $jenis_obat,
				);
				$where = array(
					'id_berobat' => $id_berobat
				);

				$this->M_berobat->update_data($where, $data, 'berobat');
				redirect('C_bpjs/index');
			}
		} else {
			$diagnosa = $this->input->post('diagnosa');
			$rujukan = $this->input->post('rujukan');
			$jenis_obat = $this->input->post('jenis_obat');

			$data = array(
				'diagnosa' => $diagnosa,
				'rujukan' => $rujukan,
				'jenis_obat' => $jenis_obat,
			);
			$where = array(
				'id_berobat' => $id_berobat
			);

			$this->M_berobat->update_data($where, $data, 'berobat');
			redirect('C_bpjs/index');
		}
	}


	public function hapus($nik)
	{
		$where = array(
			'nik' => $nik
		);
		$this->M_berobat->hapus_data($where, 'berobat');
		$this->M_berobat->hapus_data($where, 'pasien');
		redirect('C_bpjs/index');
	}
}
