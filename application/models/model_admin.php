<?php
class Model_admin extends CI_Model {
	
function __construct(){
	parent:: __construct();
	$this->load->database();
}
	function get(){
		$data=$this->db->query("SELECT * FROM admin");
		return $data;
	}
	function simpan($id_admin,$username,$password) {
		$query="INSERT INTO admin VALUES ('$id_admin','$username','$password')";
		$this->db->query($query);
	}
	function edit_admin($id_admin) {
		$data=$this->db->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		return $data;
	}
	function update($id_admin,$username,$password) {
		$query="UPDATE admin SET
		username='$username',password='$password' WHERE id_admin='$id_admin'";
		$this->db->query($query);
	}
	function delete($id_admin) {
		$data=$this->db->query("DELETE FROM admin WHERE id_admin='$id_admin'");
		return $data;
	}
	
}
?>