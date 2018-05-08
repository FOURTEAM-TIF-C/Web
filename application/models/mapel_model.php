<?php
class Mapel_model extends CI_Model{
	public $id_mapel;
	public $nama_mapel;
	public $kkm;
	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}

public function insert (){
	$sql = sprintf("INSERT INTO mapel VALUES ('%s','%s','%f')",
			$this->id_mapel,
			$this->nama_mapel,
			$this->kkm);
	$this->db->query($sql);
}
public function update(){
	$sql=sprintf("UPDATE mapel SET  nama_mapel='%s',kkm='%f',id_mapel='%s'",
		$this->nama_mapel,
		$this->kkm,
		$this->id_mapel);
	
	$this->db->query($sql);
}
public function delete(){
	$sql=sprintf("DELETE FROM mapel WHERE id_mapel='%s'", $this->id_mapel);
	$this->db->query($sql);
}
public function read(){
	$sql= "SELECT * FROM mapel ORDER BY id_mapel";
	$query = $this->db->query($sql);
	return $query->result();
}
private function _attributeLabels(){
	return[
		'id_mapel'=>'id_mapel : ',
		'nama_mapel'=>'nama_mapel : ',
		'kkm'=>'kkm : '
	];
}

}


?>