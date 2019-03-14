<?php
class model_user extends CI_Model {
	
function __construct(){
	parent:: __construct();
	$this->load->database();
}
function cek_user($user,$pass){
	$query="SELECT * FROM admin WHERE username='$user' AND password='$pass'";
	$data=$this->db->query($query);
	if ($data->num_rows()>0) {
		return TRUE;
	}
	else {
		return FALSE;
	}
}
}
?>