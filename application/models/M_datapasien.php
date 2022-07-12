<?php 
 
class M_datapasien extends CI_Model{	
	function tampil_data(){
		return $this->db->get('pasien');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function search_data($keyword = null){
		$this->db->select('*');
		$this->db->from('pasien');
		if(!empty($keyword)){
			$this->db->like('nama_pasien', $keyword);
		}
		return $this->db->get()->result_array();
	}
	
}