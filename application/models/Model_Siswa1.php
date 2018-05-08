<?php
class Model_Siswa1 extends CI_Model {
	
	function get_table(){
        return $this->db->get("siswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_kelas='1' ");
		return $query->result();
	}
	
	function get_kelas(){
		$query = $this->db->query("SELECT * FROM kelas");
		return $query->result();
	}
	

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM siswa WHERE nis = '$id'");
		return $query->result_array();
	}

	function cari($nama_siswa){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND siswa.nama_siswa='$nama_siswa'");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('siswa',$data);
		
	}
	
	function delete($id){
		$this->db->where('nis', $id);
        return $this->db->delete('siswa');
	}
	
	function update($data = array(),$id){
		$this->db->where('nis',$id);
		return $this->db->update('siswa',$data);
	}
	
}