<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Update
if (isset($_POST['submit'])) {

  try {
 
    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_email = :email WHERE fld_member_matric = :matric");

    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_address = :address WHERE fld_member_matric = :matric");

    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_phone = :phone WHERE fld_member_matric = :matric");

    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_year = :year WHERE fld_member_matric = :matric");
   
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':year', $year, PDO::PARAM_STR);
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);

       
  
    $stmt->execute();
  }
 
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}