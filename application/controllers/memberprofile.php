<?php

class memberprofile extends CI_Controller{

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('nav_bar');
		$this->load->view('memberprofile');
		$this->load->view('footer');
	}
}