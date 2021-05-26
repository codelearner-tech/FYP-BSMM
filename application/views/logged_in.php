<?php 
  if(empty($_SESSION)) {
  	session_start();
  }

  if(!isset($_SESSION['role'])) {
  	$_SESSION['role'] = "N/A";
  }
?>