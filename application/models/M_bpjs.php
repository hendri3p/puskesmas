<?php 
 
class M_bpjs extends CI_Model{	
	function tampil_data(){
		return $this->db->get('berobat');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
}