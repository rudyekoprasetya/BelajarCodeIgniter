<?php

class Web extends CI_Controller {
		function __construct(){
		parent:: __construct();
}

function index(){
	$data['judul']="Alah panggah";
	$data['isi']="BOO YA!";
	$this->load->view('hello',$data);
	}
	
}
?>