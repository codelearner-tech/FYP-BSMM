<?php

class memberlist extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('memberlist');
		$this->load->view('footer');
	}
}