<?php

class memberjoinactivitylist extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('memberjoinactivitylist');
		$this->load->view('footer');
	}
}