<?php
class login extends CI_controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model("model_user");
		$this->load->library('session');
	}
	function index() {
		$this->load->view('login_baru');
	}
	function cek(){
		//memasukan variable dari form login
		$username=$this->input->post('username',TRUE);
		$password=$this->input->post('password',TRUE);
		$cek=$this->model_user->cek_user($username,md5($password));
		if($cek==TRUE){ //cek ke database apakah ada
			$data=array('username'=>$username,'logged_in'=>TRUE);
			$this->session->set_userdata($data);
			redirect('pengurus'); //jika ada ke pengurus
		} else {
			redirect('login','refresh'); //jika tidak ada kembali login
		}
		
	}
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		redirect('login','refresh');
	}
}
?>