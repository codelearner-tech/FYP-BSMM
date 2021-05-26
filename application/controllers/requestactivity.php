<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestActivity extends CI_Controller {

	public function index() {
		$this->load->view('nav_bar');
		$this->load->view('requestactivity');
		$this->load->view('footer');
	}
}
