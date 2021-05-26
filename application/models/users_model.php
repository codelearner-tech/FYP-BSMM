<?php
  
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Users_model extends CI_Model {

    function validateMatric($matric) {
        $this->db->where('fld_member_matric', $matric);
        $result = $this->db->get('tbl_ukmbsmm_users', 1);
        return $result;
    }
}
?>