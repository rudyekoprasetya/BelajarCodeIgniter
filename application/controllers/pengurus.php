<?php
class Pengurus extends CI_controller{

	function __construct(){
	parent:: __construct();
	$this->load->helper(array('url','form'));
	$this->load->model("model_pengurus");
	$this->load->library('session');
	if(!$this->session->userdata('logged_in')) {redirect ('login','refresh');}
}
function index(){
	$data['judul']="Database dalam CI";
	$data['isi']="CRUD data pengurus";
	$data['data']=$this->model_pengurus->get();
	$this->load->view("view_pengurus",$data);
}
 
function simpan() {
	$id=$this->input->post('id',true);
	$nama=$this->input->post('nama',true);
	$jenis_kelamin=$this->input->post('gender',true);
	$alamat=$this->input->post('alamat',true);
	$gaji=$this->input->post('gaji',true);
	$this->model_pengurus->simpan($id,$nama,$jenis_kelamin,$alamat,$gaji);
	//aksi setelah data tersimpan kembali ke index
	redirect('pengurus');
 }

 function edit(){
 	$data['judul']="Database dalam CI";
 	$data['isi']="Edit Data Pengurus";
	//mengambil data id yang mau di edit
 	$id=$this->uri->segment(3);

 	$data['data']=$this->model_pengurus->edit($id);
 	$this->load->view("edit",$data);
 }

 function hapus(){
	$data['judul']="Database dalam CI";
	$data['isi']="Edit Data pengurus";
	$id=$this->uri->segment(3);
	$data['data']=$this->model_pengurus->delete($id);
	redirect('pengurus');
	}
	
	function edit_submit() {
	$Id=$this->input->post('id',true);
	$Nama=$this->input->post('nama',true);
	$Jenis_Kelamin=$this->input->post('gender',true);	
	$Alamat=$this->input->post('alamat',true);	
	$Gaji=$this->input->post('gaji',true);	
	$this->model_pengurus->update($Id,$Nama,$Jenis_Kelamin,$Alamat,$Gaji);
	redirect ('pengurus');
	}
	
	
}
?>