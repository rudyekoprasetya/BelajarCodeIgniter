<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengurus extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function getAll() {
		$data=$this->db->query("SELECT * FROM tb_pengurus");
		// $data=$this->db->get("tb_pengurus");
		return $data;
	}

	function addData($id,$nama,$alamat,$gender,$gaji) {
		$data=array(
			'id'=>$id,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'gender'=>$gender,
			'gaji'=>$gaji
		);
		$this->db->insert("tb_pengurus",$data);
		// $this->db->query("INSERT INTO tb_pengurus VALUES ('$id','$nama','$alamat','$gender','$gaji'));
	}

	function getById($id) {
		// $data=$this->db->query("SELECT * FROM tb_pengurus WHERE id='$id'");
		$data=$this->db->where('id',$id);
		$data=$this->db->get("tb_pengurus");
		return $data;
	}

	function updateData($id,$nama,$alamat,$gender,$gaji) {
		//$this->db->query("UPDATE tb_pengurus SET nama='$nama', alamat='$alamat', gender='$gender', gaji='$gaji' WHERE id='$id'");
		$data=array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'gender'=>$gender,
			'gaji'=>$gaji
		);
		$this->db->where("id",$id);
		$this->db->update("tb_pengurus",$data);
	}

	function DelData($id) {
		// $this->db->query("DELETE FROM tb_pengurus WHERE id='$id'");
		$this->db->where("id",$id);
		$this->db->delete("tb_pengurus");
	}
}