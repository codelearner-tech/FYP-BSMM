<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Update
if (isset($_POST['submit'])) {
 
  try {
 
      $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_activity SET fld_act_status = :status
        WHERE fld_act_id = :aid");
     
      $stmt->bindParam(':status', ':status', PDO::PARAM_STR);
      $stmt->bindParam(':aid', $aid, PDO::PARAM_STR);
       
    $status = $_POST[':status'];
    $aid = $_POST['aid'];
     
    $stmt->execute();
 
    header("Location: activity_details.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

//Edit
if (isset($_GET['edit'])) {
 
  try {
 
      $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activity WHERE fld_act_id = :aid");
     
      $stmt->bindParam(':aid', $aid, PDO::PARAM_STR);
       
      $aid = $_GET['edit'];
     
      $stmt->execute();
 
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
?>