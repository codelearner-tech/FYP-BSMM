<?php

class cm_activitylist extends CI_Controller{

	public function __construct() {
		parent::__construct();

		$this->load->model('activity_model');
	}

	public function index() {
		$data['actlist'] = $this->activity_model->getActList(null, null, null);

		$this->load->view('nav_bar');
		$this->load->view('cm_activitylist', $data);
		$this->load->view('footer');
	}
}