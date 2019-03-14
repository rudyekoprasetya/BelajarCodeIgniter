<?php
class pengurus extends CI_controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model("model_pengurus");
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')) {redirect 
		('login','refresh');}
	}
	
	function index(){
		$data['judul']="Database dalam CI";
		$data['isi']="CRUD Data Pengurus";
		$data['data']=$this->model_pengurus->get();
		$this->load->view("view_pengurus",$data);
	}
	
	
	function simpan(){
	$id=$this->input->post('id',true);
	$nama=$this->input->post('nama',true);
	$gender=$this->input->post('gender',true);	
	$alamat=$this->input->post('alamat',true);	
	$gaji=$this->input->post('gaji',true);	
	$this->model_pengurus->simpan($id,$nama,$gender,$alamat,$gaji);
	redirect ('pengurus');
	}
	
	function edit(){
	$data['judul']="Database dalam CI";
	$data['isi']="Edit Data pengurus";
	$id=$this->uri->segment(3);
	$data['data']=$this->model_pengurus->edit($id);
	$this->load->view("edit",$data);
	}
	
	function delete(){
	$data['judul']="Database dalam CI";
	$data['isi']="Edit Data pengurus";
	$id=$this->uri->segment(3);
	$data['data']=$this->model_pengurus->delete($id);
	redirect('pengurus');
	}
	
	function edito() {
	$id=$this->input->post('id',true);
	$nama=$this->input->post('nama',true);
	$gender=$this->input->post('gender',true);	
	$alamat=$this->input->post('alamat',true);	
	$gaji=$this->input->post('gaji',true);	
	$this->model_pengurus->update($id,$nama,$gender,$alamat,$gaji);
	redirect ('pengurus');
	}
	
	
	
}
?>