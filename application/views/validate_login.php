<?php 

include_once 'database.php';

if(empty($_SESSION)) {
    session_start();
  }

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['matric'])) {

    try {
 
    $stmt = $conn->prepare("SELECT * from tbl_ukmbsmm_users WHERE fld_member_matric = :matric");

   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
       
    $matric = $_POST['matric'];
    $pw = $_POST['pw'];
         
    $stmt->execute();

    $count = $stmt->rowCount();

    $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['sname'] = $readrow["fld_member_name"];
 
    
    if ($count < 1) {
      echo "<script>alert('User does not exist');</script>";
    }
    else if($pw != $readrow["fld_member_pw"]) {
      echo "<script>alert('Incorrect password. Note: Passwords are case-sensitive');</script>";
    }
    else if($count == 1) {
      echo "<script>alert('You have logged in as {$_SESSION['sname']}');document.location='Welcome'</script>";
      if(!session_id()) 
        session_start();
      $_SESSION['role'] = $readrow["fld_member_role"];
      $_SESSION['matric'] = $readrow["fld_member_matric"];
    }
    
  }
  catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }

 ?>