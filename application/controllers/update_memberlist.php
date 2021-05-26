<?php

class update_memberlist extends CI_Controller{

	public function index()
	{
		$this->load->view('nav_bar');
		$this->load->view('update_memberlist');
		$this->load->view('footer');
	}
}