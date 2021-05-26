<?php

class SendReport extends CI_Controller{

	function __construct() {
    	parent::__construct();

    	$this->load->model('activity_model');
    }
 
	public function index() {
		$data['actlist'] = $this->activity_model->getAct($this->input->post("actid"), null, null);

		$this->load->view('nav_bar');
		$this->load->view('sendreport', $data);
		$this->load->view('footer');
	}
}