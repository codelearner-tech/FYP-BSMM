<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Update
if (isset($_POST['newposition'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_ukmbsmm_users SET fld_member_position = :newposition WHERE fld_member_matric = :matric");
   
    
    $stmt->bindParam(':newposition', $newposition, PDO::PARAM_STR);
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);

    $newposition = $_POST['newposition'];
    $matric = $_POST['matric'];
       
    $stmt->execute();

    redirect('memberlist');
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
 
?>