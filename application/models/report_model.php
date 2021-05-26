<?php
  
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Report_Model extends CI_Model {
  
    function __construct() {
        parent::__construct();
    }
  
    function getMemJoin($where, $length, $start) {
        $this->db->where('fld_member_matric', $_SESSION['matric']);
        $query = $this->db->get('tbl_ukmbsmm_activitymember');
        return $query->result();
    }

}
  
?>