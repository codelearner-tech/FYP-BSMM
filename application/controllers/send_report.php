<?php

class send_report extends CI_Controller{

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('nav_bar');
		$this->load->view('send_report');
		$this->load->view('footer');
	}
}