<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent:: __construct();
		// load model pengurus
		$this->load->model("Model_login");
	}

	function index() {
		$data['judul']="Login Admin";
		$this->load->view("laman_login",$data);
	}

	function cek() {
		$username=$this->input->post("username",true);
		$password=$this->input->post("password",true);
		$login=$this->Model_login->cek_login($username,$password);

		if($login) {
			//membuat session data
			$data=array(
				'username' => $username,
				'logged_in' => true
			);
			$this->session->set_userdata($data);
			//jika berhasil ke laman pengurus
			redirect("pengurus");
		} else {
			//jika gagal kembali ke login
			redirect("login","refresh");
		}
	}

	function logout() {
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("logged_in");
		// kembali ke laman login
		redirect("login","refresh");
	}

}