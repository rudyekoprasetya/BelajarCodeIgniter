<?php
class admin extends CI_controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model("model_admin");
		$this->load->library('session');
	if(!$this->session->userdata('logged_in')) {redirect 
	('login','refresh');}}
	function index(){
		$data['judul']="Database dalam CI";
		$data['isi']="CRUD Data Pengurus";
		$data['data']=$this->model_admin->get();
		$this->load->view("view_admin",$data);
	}
	
	
	function simpan(){
	$id=$this->input->post('id',true);
	$username=$this->input->post('username',true);
	$password=$this->input->post('password',true);
	$this->model_admin->simpan($id,$username,md5($password));
	redirect ('admin');
	}
	
	function edit_admin(){
	$data['judul']="Database dalam CI";
	$data['isi']="Edit Data admin";
	$id=$this->uri->segment(3);
	$data['data']=$this->model_admin->edit_admin($id);
	$this->load->view("edit_admin",$data);
	}
	
	function delete(){
	$data['judul']="Database dalam CI";
	$data['isi']="admin";
	$id=$this->uri->segment(3);
	$data['data']=$this->model_admin->delete($id);
	redirect('admin');
	}
	
	function admin_submit() {
	$id=$this->input->post('id',true);
	$username=$this->input->post('username',true);
	$password=$this->input->post('password',true);
	$this->model_admin->update($id,$username,md5($password));
	redirect ('admin');
	}
	
	
	
}
?>