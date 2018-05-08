<?php
class Guru extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('guru_model');
		$this->model = $this->guru_model;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->nip = $_POST['nip'];
			$this->model->nama_guru= $_POST['nama_guru'];
			$this->model->insert();
			redirect('guru');
		}else{
			$this->load->view('GURU/crud_create_view', ['model'=>$this->model] );
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('GURU/crud_read_view', ['rows'=>$rows]);
	}
	public function update($nip_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->nip = $_POST['nip'];
			$this->model->nama_guru = $_POST['nama_guru'];
			$this->model->update();
			redirect('guru');
		}else{
			$query=$this->db->query("SELECT * FROM guru WHERE nip='$nip_up'");
			$row=$query->row();
			$this->model->nip = $row->nip;
			$this->model->nama_guru = $row->nama_guru;
			$this->load->view('GURU/crud_update_view', ['model'=>$this->model]);
		}

	}
	public function delete ($nip_del){
		$this->model->nip=$nip_del;
		$this->model->delete();
		redirect('guru');
	}
}



?>