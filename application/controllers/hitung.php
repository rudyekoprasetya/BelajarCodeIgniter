<?php
class Hitung extends CI_Controller {

	function __construct(){
	parent::__construct();
	//load heper URL dan FORM
	$this->load->helper(array('url','form'));
	}

function index(){
	$this->load->view('menu_hitung');
}

function Perkalian(){
	$data['angka1']=(int)$this->input->post('angka1',true);
	$data['angka2']=(int)$this->input->post('angka2',true);
	$data['hasil']=$data['angka1']*$data['angka2'];
	$this->load->view('perkalian',$data);
}

function Pembagian(){
	$data['angka1']=(int)$this->input->post('angka1',true);
	$data['angka2']=(int)$this->input->post('angka2',true);
	if ($data['angka2']>0) {
		$data['hasil']=$data['angka1']/$data['angka2'];
	} else {
		$data ['hasil']=' ';
	}
	$this->load->view('pembagian',$data);
}

function Penambahan(){
	$data['angka1']=(int)$this->input->post('angka1',true);
	$data['angka2']=(int)$this->input->post('angka2',true);
	$data['hasil']=$data['angka1']+$data['angka2'];
	$this->load->view('penambahan',$data);
}

function Pengurangan(){
	$data['angka1']=(int)$this->input->post('angka1',true);
	$data['angka2']=(int)$this->input->post('angka2',true);
	$data['hasil']=$data['angka1']-$data['angka2'];
	$this->load->view('pengurangan',$data);
}

function Perpangkatan(){
	$data['angka1']=(int)$this->input->post('angka1',true);
	$data['angka2']=(int)$this->input->post('angka2',true);
	$data['hasil']=pow($data['angka1'],$data['angka2']);
	$this->load->view('perpangkatan',$data);
}

function tema() {
	$this->load->view('tema');

}
}
?>