<?php
class Siswa1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Siswa1');
        
	}
	
	
	function home(){
		//$data = $this->Model_Mahasiswa->get_data();
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Siswa1->cari($nama_siswa));
			$this->load->view('App/list_ssw1',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Siswa1->get_data());
		//$this->load->view('App/list_mhs',['data' => $data]);
		$this->load->view('App/list_ssw1',$data);
	}
	}
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siswa1->input(array (
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'id_kelas' => $this->input->post('kelas'),));
			redirect('Siswa1/home');
		}else{
			$x =$this->Model_Siswa1->get_kelas();
			$data = array(
				'kelas'=>$this->Model_Siswa->get_kelas(),
				
				);
			//var_dump($x);
			$this->load->view('App/input_ssw',$data);
		}
	}
	function delete($id){
		$this->Model_Siswa1->delete($id);
		redirect('Siswa1/home');
	}
	function edit(){
		$id = $this->uri->segment(3);
		$data = array(
            'user' => $this->Model_Siswa1->get_data_edit($id),
		);
        //var_dump($data);
     	$data['id_kelas']= $this->Model_Siswa1->get_kelas();
     	$data['kelas']= $this->Model_Siswa1->get_kelas();
		

        $this->load->view("App/edit_ssw", $data);
	
		
	}
	
	function update(){
		$id = $this->input->post('nis');
		$insert = $this->Model_Siswa1->update(array(
                
				'nama_siswa' => $this->input->post('nama_siswa'),
				'id_kelas' => $this->input->post('kelas'),
				
            ), $id);
        redirect('Siswa1/home');
        }
	
}