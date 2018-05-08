<?php
class Mapel extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('mapel_model');
		$this->model = $this->mapel_model;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_mapel = $_POST['id_mapel'];
			$this->model->nama_mapel= $_POST['nama_mapel'];
			$this->model->kkm= $_POST['kkm'];
			$this->model->insert();
			redirect('mapel');
		}else{
			$this->load->view('MAPEL/crud_create_view', ['model'=>$this->model] );
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('MAPEL/crud_read_view', ['rows'=>$rows]);
	}
	public function update($id_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_mapel = $_POST['id_mapel'];
			$this->model->nama_mapel = $_POST['nama_mapel'];
			$this->model->kkm = $_POST['kkm'];
			$this->model->update();
			redirect('mapel');
		}else{
			$query=$this->db->query("SELECT * FROM mapel WHERE id_mapel='$id_up'");
			$row=$query->row();
			$this->model->id_mapel = $row->id_mapel;
			$this->model->nama_mapel = $row->nama_mapel;
			$this->model->kkm = $row->kkm;
			$this->load->view('MAPEL/crud_update_view', ['model'=>$this->model]);
		}

	}
	public function delete ($id_del){
		$this->model->id_mapel=$id_del;
		$this->model->delete();
		redirect('mapel');
	}
}



?>