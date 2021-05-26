<?php

class join_activity extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('join_activity');
		$this->load->view('footer');
	}
}