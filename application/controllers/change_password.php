<?php

class Change_Password extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('change_password');
		$this->load->view('footer');
	}
}