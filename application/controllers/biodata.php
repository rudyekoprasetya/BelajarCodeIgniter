<?php

class Biodata extends CI_Controller {
		function __construct(){
		parent:: __construct();
}

function index(){
	$data['nama']='Eureka';
	$data['alamat']='Jl.Sriwijaya';
	$data['jenis']='Laki laki';
	$data['asal']='SMP Negeri 5';
	$this->load->view('profil',$data);
	}
	
}
?>