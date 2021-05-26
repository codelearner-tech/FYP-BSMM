<?php

class listjoinedactivity extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('listjoinedactivity');
		$this->load->view('footer');
	}
}