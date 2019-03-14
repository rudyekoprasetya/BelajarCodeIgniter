<?php
class model_pengurus extends CI_Model {
	
function __construct(){
	parent:: __construct();
	$this->load->database();
}
	function get(){
		// $data=$this->db->query("SELECT * FROM pengurus ORDER BY NAMA ASC");
		$data=$this->db->order_by('id', 'ASC');
		$data=$this->db->get('pengurus');
		//select * from pengurus
		return $data;
	}

	function simpan($id,$nama,$gender,$alamat,$gaji) {
		//kode 1
		// $query="INSERT INTO pengurus VALUES ('$id','$nama','$gender','$alamat','$gaji')";
		// $this->db->query($query);
		//kode 2
		$data=array(
			'id' => $id,
			'nama' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,			
			'gaji' => $gaji
			);
		$this->db->insert('pengurus',$data);
		
	}


	function edit($id) {
		//kode 1
		// $data=$this->db->query("SELECT * FROM pengurus WHERE id='$id'");
		//kode 2
		$data=$this->db->where('id',$id);
		$data=$this->db->get('pengurus');
		return $data;
	}

	function update($id,$nama,$gender,$alamat,$gaji) {
		//kode 1
		// $query="UPDATE pengurus SET	nama='$nama',gender='$gender',alamat='$alamat',gaji='$gaji' WHERE id='$id'";
		// $this->db->query($query);
		//kode 2
		$data=array(
			'nama' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			'gaji' => $gaji,
			);
		$this->db->where('id',$id);
		$this->db->update('pengurus',$data);
		
	}


	function delete($id) {
		//kode 1
		// $data=$this->db->query("DELETE FROM pengurus WHERE id='$id'");
		//kode 2
		$data=$this->db->where('id',$id);
		$data=$this->db->delete('pengurus');
	}
	
}
?>