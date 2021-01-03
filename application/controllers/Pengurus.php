<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	function __construct() {
		parent:: __construct();
		// load model pengurus
		$this->load->model("Model_pengurus");
		$this->load->library("template");
		//agar pengguna dipaksa login
		if(!$this->session->userdata('logged_in')) {redirect ('login','refresh');}
	}

	function index() {
		$data['isi']=$this->Model_pengurus->getAll();
		$data['judul']="Tampil Data";
		$this->load->view("tampil_data",$data);
	}

	function simpan() {
		//ambil data dari form
		$id=$this->input->post("id",true);
		$nama=$this->input->post("nama",true);
		$alamat=$this->input->post("alamat",true);
		$gender=$this->input->post("gender",true);
		$gaji=$this->input->post("gaji",true);
		//memanggil fungsi addData
		$this->Model_pengurus->addData($id,$nama,$alamat,$gender,$gaji);
		//jika sudha disimpan kembali ke tampil data
		redirect('pengurus');
	}

	function edit() {
		//ambil id dari paremeter uri
		$id=$this->uri->segment(3);
		//memanggil fungsi getById
		$data['isi']=$this->Model_pengurus->getById($id);
		$data['judul']="Edit Data";
		//parsing data ke view
		$this->load->view("edit_data",$data);		
	}

	function ubah() {
		//ambil data dari form
		$id=$this->input->post("id",true);
		$nama=$this->input->post("nama",true);
		$alamat=$this->input->post("alamat",true);
		$gender=$this->input->post("gender",true);
		$gaji=$this->input->post("gaji",true);
		//memanggil fungsi updateData
		$this->Model_pengurus->updateData($id,$nama,$alamat,$gender,$gaji);
		//jika sudha diubah kembali ke tampil data
		redirect('pengurus');
	}

	function hapus() {
		//ambil id dari paremeter uri
		$id=$this->uri->segment(3);
		//memanggil fungsi delData
		$this->Model_pengurus->delData($id);
		//jika sudha dihapus kembali ke tampil data
		redirect('pengurus');	
	}
}