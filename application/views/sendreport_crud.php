<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (!isset($_POST['file_cv'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_ukmbsmm_reports(fld_rep_id, fld_act_id, fld_rep_pic) VALUES(:repid, :actid, :image)");
   
    $stmt->bindParam(':repid', $repid, PDO::PARAM_STR);
    $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);


    $repid = "AM" . sprintf("%06d", mt_rand(16, 999999));
    $actid = $_POST['actid'];
    $image = $_POST['actid'] . ".jpg";
       
    $stmt->execute();
    }


 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }

   /* try {
 
    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_activity SET fld_act_status = :actid WHERE fld_act_id = :actid");
   
    $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);

    $actid = $_POST['actid'];
    $image = $_POST['actid'] . ".jpg";
       
    $stmt->execute();
    }


 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }*/
}
 
  $conn = null;
 
?>