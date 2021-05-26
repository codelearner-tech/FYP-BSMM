<?php

class ReportList extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('reportlist');
		$this->load->view('footer');
	}
}