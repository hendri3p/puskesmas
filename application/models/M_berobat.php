<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_berobat extends CI_Model
{
	public function tampil_data_bpjs()
	{

		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('berobat', 'berobat.nik = pasien.nik');
		$this->db->where('jenis_pembayaran', 'BPJS');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function search_data_bpjs($tgl_berobat)
	{

		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('berobat', 'berobat.nik = pasien.nik');
		$this->db->where('jenis_pembayaran', 'BPJS');
		$this->db->where('tgl_berobat', $tgl_berobat);
		$query = $this->db->get();
		return $query->result_array();
	}


	public function tampil_data_bpjs_umum()
	{

		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('berobat', 'berobat.nik = pasien.nik');
		$this->db->where('jenis_pembayaran', 'Umum');
		$query = $this->db->get();
		return $query;
	}

	public function tampil_data_umum()
	{
		return $this->db->get('berobat');
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
