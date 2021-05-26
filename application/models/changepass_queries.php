<?php

class Queries extends CI_Model 
{
	function fetch_pass($memberid)
	{
	$fetch_pass=$this->db->query("select * from tbl_ukmbsmm_users where fld_member_matric='$memberid'");
	$res=$fetch_pass->result();
	}
	function change_pass($memberid,$newpassword)
	{
	$update_pass=$this->db->query("UPDATE tbl_ukmbsmm_users set pass='$newpassword'  where fld_member_matric='$memberid'");
	}
}
?>