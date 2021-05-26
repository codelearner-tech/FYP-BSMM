<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['submit'])) {
  if ($_POST['submit'] == 'join') {

    try {
 
      $stmt = $conn->prepare("INSERT INTO tbl_ukmbsmm_activitymember(fld_activitymember_id, fld_act_id, fld_member_matric) VALUES(:amid, :aid, :matric)");
     
      $stmt->bindParam(':amid', $amid, PDO::PARAM_STR);
      $stmt->bindParam(':aid', $aid, PDO::PARAM_STR);
      $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
         
      $amid = "AM" . sprintf("%06d", mt_rand(16, 999999));
      $aid = $_POST['aid'];
      $matric = $_POST['matric'];
       
      $stmt->execute();
    }
   
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }

  if ($_POST['submit'] == 'joined') {

    try {
   
      $stmt = $conn->prepare("DELETE FROM tbl_ukmbsmm_activitymember WHERE fld_activitymember_id = :amod");
     
      $stmt->bindParam(':amod', $amod, PDO::PARAM_STR);
         
      $amod = $_POST['amod'];
       
      $stmt->execute();
    }
   
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }
}
