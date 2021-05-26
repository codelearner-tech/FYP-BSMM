<?php

class UpdatePosition extends CI_Controller{

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('nav_bar');
		$this->load->view('updateposition');
		$this->load->view('footer');
	}
}