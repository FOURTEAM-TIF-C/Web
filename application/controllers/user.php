<?php
class User extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->model = $this->user_model;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $_POST['id_user'];
			$this->model->nama_lengkap = $_POST['nama_lengkap'];
			$this->model->username = $_POST['username'];
			$this->model->password = $_POST['password'];
			$this->model->level = $_POST['level'];
			$this->model->insert();
			redirect('user');
		}else{
			$this->load->view('USER/crud_create_view', ['model'=>$this->model] );
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('USER/crud_read_view', ['rows'=>$rows]);
	}
	public function update($id_user_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $_POST['id_user'];
			$this->model->nama_lengkap = $_POST['nama_lengkap'];
			$this->model->username = $_POST['username'];
			$this->model->password = $_POST['password'];
			$this->model->level = $_POST['level'];
			$this->model->update();
			redirect('user');
		}else{
			$query=$this->db->query("SELECT * FROM user WHERE id_user='$id_user_up'");
			$row=$query->row();
			$this->model->id_user=$row->id_user;
			$this->model->nama_lengkap=$row->nama_lengkap;
			$this->model->username=$row->username;
			$this->model->password=$row->password;
			$this->model->level = $row->level;
			$this->load->view('USER/crud_update_view', ['model'=>$this->model]);
		}

	}
	public function delete ($id_user_del){
		$this->model->id_user=$id_user_del;
		$this->model->delete();
		redirect('user');
	}
}



?>