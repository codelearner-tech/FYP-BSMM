<?php

class report_details extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('report_details');
		$this->load->view('footer');
	}
}