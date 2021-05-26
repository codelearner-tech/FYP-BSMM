<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Update
if (isset($_POST['submit'])) {

  try {
 
    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_validate = :status WHERE fld_member_matric = :matric");
   
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
       
    $matric = $_POST['matric'];
    if ($_POST['submit'] == 'accept') {
      $status = "Yes";
    }
    else if ($_POST['submit'] == 'reject') {
      $status = "Rejected";
    }
     
    $stmt->execute();
  }
 
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}