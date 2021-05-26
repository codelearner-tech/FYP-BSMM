<?php
  
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Activity_Model extends CI_Model {
  
    function __construct() {
        parent::__construct();
    }
  
    function getMemJoin() {
        $this->db->where('fld_member_matric', $_SESSION['matric']);
        $query = $this->db->get('tbl_ukmbsmm_activitymember');
        return $query->result();
    }

    function getActList($where, $length, $start) {
        $this->db->limit($length, $start);
        $query = $this->db->get_where('tbl_ukmbsmm_activity', $where);
        if ($query->num_rows() > 0) {
          return $query->result();
        }
    }

    function getAct($actid) {
        $this->db->where('fld_act_id', $actid);
        $query = $this->db->get('tbl_ukmbsmm_activity');
        if ($query->num_rows() > 0) {
          return $query->result();
        }
    }

    function join($data) {
        $this->db->insert('tbl_ukmbsmm_activitymember', $data);
        $this->activity_model->updateQuota("join",$data['fld_act_id']);
        return TRUE;
    }

    function unjoin($id, $actid) {
        $this->db->where('fld_activitymember_id', $id);
        $this->db->delete('tbl_ukmbsmm_activitymember');
        $this->activity_model->updateQuota("unjoin", $actid);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function updateQuota($calc, $actid) {
        $quota = $this->activity_model->getQuota($actid);

        if($calc == "join") {
            $quota = $quota - 1;
        }
        else if($calc == "unjoin") {
            $quota = $quota + 1;
        }

        $data = array(
            'fld_act_aquota' => $quota,
        );

        $this->db->where('fld_act_id', $actid);
        $this->db->update('tbl_ukmbsmm_activity', $data);
        return TRUE;
    }
  
    function getQuota($actid) {
        $this->db->where('fld_act_id', $actid);
        $query = $this->db->get('tbl_ukmbsmm_activity');
        $result = $query->result();;

        foreach ($result as $record):
            $quota = (int)$record->fld_act_aquota;
            break;
        endforeach; 
        
        return $quota;
    }
}
  
?>