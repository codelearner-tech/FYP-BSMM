<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass extends CI_Controller{

	public function index() {
		$this->load->view('changepass');
	}

}