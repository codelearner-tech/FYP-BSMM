<?php 

class kolejchart extends CI_Controller {

	function __construct(){
		parent::__construct();
			$this->load->model('kolej_model');
	}

	function index()
	{
		$data['member_number']= $this->kolej_model->get_number_of_member();

		$this->view('content/charts',$data);
	}
}


 ?>