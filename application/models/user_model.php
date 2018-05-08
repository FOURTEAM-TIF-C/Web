<?php
class User_model extends CI_Model{
	public $id_user;
	public $nama_lengkap;
	public $username;
	public $password;
	public $level;
	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}

public function insert (){
	$sql = sprintf("INSERT INTO user VALUES ('%s','%s','%s','%s','%s')",
			$this->id_user,
			$this->nama_lengkap,
			$this->username,
			$this->password,
			$this->level);
	$this->db->query($sql);
}
public function update(){
	$sql=sprintf("UPDATE user SET  nama_lengkap='%s', username='%s', password='%s', level='%s' WHERE id_user='%s'",
		$this->nama_lengkap,
		$this->username,
		$this->password,
		$this->level,
		$this->id_user);
	
	$this->db->query($sql);
}
public function delete(){
	$sql=sprintf("DELETE FROM user WHERE id_user='%s'", $this->id_user);
	$this->db->query($sql);
}
public function read(){
	$sql= "SELECT * FROM user ORDER BY id_user";
	$query = $this->db->query($sql);
	return $query->result();
}
private function _attributeLabels(){
	return[
		'id_user'=>'id_user : ',
		'nama_lengkap'=>'nama_lengkap : ',
		'username'=>'username : ',
		'password'=>'password : ',
		'level'=>'level : ',
	];
}

}


?>