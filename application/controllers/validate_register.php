<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class validate_register extends CI_Controller {

	public function index() {
		$this->load->view('nav_bar');
		$this->load->view('validate_register');
		$this->load->view('footer');
	}
}
