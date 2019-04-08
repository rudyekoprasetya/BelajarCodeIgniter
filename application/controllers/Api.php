<?php
class Api extends CI_controller{

	function __construct(){
		parent:: __construct();
		$this->load->model("Model_pengurus");
		//membuat header menjadi JSON
		header('Content-Type: application/json');
	}

	function tampil(){
		//ambil data dari model
		$data=$this->Model_pengurus->get()->result();
		//jadikan data menjadi JSON
		echo json_encode($data);
	}

	function tampilByID() {
		$id=$_GET['id'];
		//ambil data dari model
		$data=$this->Model_pengurus->edit($id)->result();
		//jadikan data menjadi JSON
		echo json_encode($data);
	}

}