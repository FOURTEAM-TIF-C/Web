<?php
class Guru_model extends CI_Model{
	public $nip;
	public $nama_guru;
	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}

public function insert (){
	$sql = sprintf("INSERT INTO guru VALUES ('%s','%s')",
			$this->nip,
			$this->nama_guru);
	$this->db->query($sql);
}
public function update(){
	$sql=sprintf("UPDATE guru SET  nama_guru='%s',nip='%s'",
		$this->nama_guru,
		$this->nip);
	
	$this->db->query($sql);
}
public function delete(){
	$sql=sprintf("DELETE FROM guru WHERE nip='%s'", $this->nip);
	$this->db->query($sql);
}
public function read(){
	$sql= "SELECT * FROM guru ORDER BY nip";
	$query = $this->db->query($sql);
	return $query->result();
}
private function _attributeLabels(){
	return[
		'nip'=>'nip : ',
		'nama_guru'=>'nama_guru : ',
	];
}

}


?>