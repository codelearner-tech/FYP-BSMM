<?php

class Login extends CI_Controller{

	public function __construct() {
		parent::__construct();

		$this->load->model('users_model');
	}


	public function index() {
		$this->load->view('login');
	}

	public function login() {
		$matric = $this->input->post('matric',TRUE);
		$pw = $this->input->post('pw',TRUE);
		$validMatric = $this->users_model->validateMatric($matric);

		echo '<script>alert("log")</script>';

		if($validMatric->num_rows() == 0) {
			echo $this->session->set_flashdata('msg','Username is Wrong');
			redirect('login');
		} 

		else {
			$data = $validMatric->row_array();
			if ($pw != $data['fld_member_pw']) {
				echo $this->session->set_flashdata('msg','Password is Wrong');
				redirect('login');
			}

			else {
				$_SESSION['name'] = $data['fld_member_name'];
				$_SESSION['matric'] = $data['fld_member_matric'];
				$_SESSION['role'] = $data['fld_member_role'];
				echo $this->session->set_flashdata('msg','Suck');
				redirect('Welcome');
			}
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}