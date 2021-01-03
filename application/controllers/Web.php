<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
		parent:: __construct();
	}

	// function index() {
	// 	echo "Hallo Nama saya Code Igniter Salam kenal";
	// }

	// function komentar() {
	// 	echo "Ini adalah fungsi komentar";
	// }

	// function nama() {
	// 	$nama="Rudy";
	// 	echo "Haloo nama saya $nama";
	// }

	// function index() {
	// 	$this->load->view('hello');
	// }

	function index() {
		$data['judul']="Parsing Data ke View";
		$data['isi']="Ini adalah data dari Controller";
		$this->load->view('hello',$data);
	}
}
