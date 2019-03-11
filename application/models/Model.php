<?php

class Model extends CI_Model {
	function tampil_data(){
		$this->db->order_by('tanggal','DESC');
		$dataSirclo['sirclo'] = $this->db->get('sirclo')->result();

		return $dataSirclo['sirclo'];
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function view_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

}