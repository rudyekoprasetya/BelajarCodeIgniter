<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetakpdf extends CI_Controller {

	function __construct() {
		parent:: __construct();
		// load model pengurus
		$this->load->model("Model_pengurus");
		// load library PDF
		$this->load->library('pdf');
		//agar pengguna dipaksa login
		if(!$this->session->userdata('logged_in')) {redirect ('login','refresh');}
	}

	function index() {
		//instance library pdf
		$pdf = new FPDF();
	    // membuat halaman baru tipe potrait
	    $pdf->AddPage('P');
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);

        //kop atau judul
	    $pdf->Cell(0,7,'Rekapitulasi',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0,7,'Data Pengurus Komunitas',0,1,'C');
        $pdf->SetFont('Arial','B',10);

        //membuat garis
		$pdf->SetLineWidth(1);
		$pdf->Line(10,30,200,30);//garis
		$pdf->SetLineWidth(0.5);

		$pdf->Ln(10);

		//membuat tabel header
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(20,8,'ID',1,0,'C');
		$pdf->Cell(50,8,'NAMA ',1,0,'C');
		$pdf->Cell(20,8,'GENDER',1,0,'C');
		$pdf->Cell(75,8,'ALAMAT',1,0,'C');
		$pdf->Cell(25,8,'GAJI',1,1,'C');

		//membuat isi tabel
		$pdf->SetFont('Arial','',10);
		//ambil data dari database
		$data=$this->Model_pengurus->getAll();
		foreach ($data->result_array() as $row) {
			$pdf->Cell(20,8,$row['id'],1,0,'C');
			$pdf->Cell(50,8,$row['nama'],1,0,);
			$pdf->Cell(20,8,$row['gender'],1,0,'C');
			$pdf->Cell(75,8,$row['alamat'],1,0);
			$pdf->Cell(25,8,$row['gaji'],1,1,'R');
		}

        //generate pdf
        $pdf->Output();
	}

}