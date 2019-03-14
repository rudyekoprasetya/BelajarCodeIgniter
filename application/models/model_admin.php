<?php
class model_admin extends CI_Model {
	
function __construct(){
	parent:: __construct();
	$this->load->database();
}
	function get(){
		$data=$this->db->query("SELECT * FROM admin");
		return $data;
	}
	function simpan($id,$username,$password) {
		$query="INSERT INTO admin VALUES ('$id','$username','$password')";
		$this->db->query($query);
	}
	function edit_admin($id) {
		$data=$this->db->query("SELECT * FROM admin WHERE id='$id'");
		return $data;
	}
	function update($id,$username,$password) {
		$query="UPDATE admin SET
		username='$username',password='$password' WHERE id='$id'";
		$this->db->query($query);
	}
	function delete($id) {
		$data=$this->db->query("DELETE FROM admin WHERE id='$id'");
		return $data;
	}
	
}
?>