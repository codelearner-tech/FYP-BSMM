<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class JoinActivity extends CI_Controller {
 
    function __construct() {
    	parent::__construct();

    	$this->load->model('activity_model');
    }
 
    function index() {
    	$data['actlist'] = $this->activity_model->getActList(null, null, null);
    	$data['memberjoin'] = $this->activity_model->getMemJoin($_SESSION['matric'], null, null);

    	$this->load->view('nav_bar');
    	$this->load->view('joinactivity', $data);
    	$this->load->view('footer');
    }

    function join() {
        $actid = $this->input->post("actid");
        $matric = $_SESSION['matric'];
        $amid = "AM" . sprintf("%06d", mt_rand(16, 999999));

        $data = array(
            'fld_activitymember_id'   => $amid,
            'fld_act_id'  => $actid,
            'fld_member_matric' => $matric,
        );

        $this->activity_model->join($data);
        redirect('joinactivity');
    }

    function unjoin() {
        $this->activity_model->unjoin($this->input->post("amoid"), $this->input->post("actid"));
        redirect('joinactivity');   
    }

}
 
?>