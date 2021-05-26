<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hq_activitylist extends CI_Controller {

	public function index() {
		$this->load->view('nav_bar');
		$this->load->view('hq_activitylist');
		$this->load->view('footer');
	}
}
