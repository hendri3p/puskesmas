<?php 
 
class M_rekammedis extends CI_Model{	
	function tampil_data_medis(){
		return $this->db->get('pasien');
	}
	

    function joindata(){
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien','pasien.nik = berobat.nik');      
        $query = $this->db->get();
        return $query;
    }
}
