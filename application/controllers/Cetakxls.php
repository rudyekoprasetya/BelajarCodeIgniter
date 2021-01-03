<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//load library PHPSpreadsheeet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Cetakxls extends CI_Controller {

	function __construct() {
		parent:: __construct();
		// load model pengurus
		$this->load->model('Model_pengurus');
	}

	function index() {

		//instance library 
		$spreadsheet = new Spreadsheet();

		//membuat lembar kerja
		$sheet = $spreadsheet->getActiveSheet();

		//membuat kolom judul tabel pada baris ke-1
		$sheet->setCellValue('A1', 'ID');
		$sheet->setCellValue('B1', 'NAMA');
		$sheet->setCellValue('C1', 'ALAMAT');
		$sheet->setCellValue('D1', 'GENDER');
		$sheet->setCellValue('E1', 'GAJI');

		//menuliskan data mulai baris ke-2
		$baris=2;

		//ambil data
		$dataPengurus=$this->Model_pengurus->getAll();

		//parsing data dari model
		foreach ($dataPengurus->result() as $row) {
			$sheet->setCellValue('A'.$baris, $row->id);
			$sheet->setCellValue('B'.$baris, $row->nama);
			$sheet->setCellValue('C'.$baris, $row->alamat);
			$sheet->setCellValue('D'.$baris, $row->gender);
			$sheet->setCellValue('E'.$baris, $row->gaji);
			$baris++;
		}

		//menuliskan data ke file
		$writer = new Xlsx($spreadsheet);

		//memberikan nama file
		$filename = 'Data-Pengurus-'.date('Y-m-d');

		//generate excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');	
		$writer->save('php://output');

	}

}