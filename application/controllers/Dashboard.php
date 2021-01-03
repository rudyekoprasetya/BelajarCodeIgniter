<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->library('template');
	}

	function index() {
		$this->template->display('welcome_message');
	}

}