<?php 
 
class M_berobat extends CI_Model{	
	function tampil_data_bpjs(){
		return $this->db->get('berobat');
	}
	
	function tampil_data_umum(){
		return $this->db->get('berobat');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}