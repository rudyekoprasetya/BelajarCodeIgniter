<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function cek_login($username,$password) {
		//mencari data user dan pass di database
		$data=$this->db->where('username',$username);
		$data=$this->db->where('password',$password);
		$data=$this->db->get("tb_admin");

		// jika ada maka return true
		if($data->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}