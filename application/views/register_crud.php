<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['matric_no'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_ukmbsmm_users(fld_member_matric, fld_member_name, fld_member_pw, fld_member_email, fld_member_ic, fld_member_birthday, fld_member_gender, fld_member_race, fld_member_religion, fld_member_address, fld_member_phone, fld_member_blood, fld_member_year, fld_member_faculty,fld_member_college, fld_member_role, fld_member_position) VALUES(:matric, :name, :password, :email, :ic, :birthday, :gender, :race, :religion, :address, :phone, :blood, :year, :faculty, :college,  :role, :position)");
   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':ic', $ic, PDO::PARAM_STR);
    $stmt->bindParam(':birthday', $birthday, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':race', $race, PDO::PARAM_STR);
    $stmt->bindParam(':religion', $religion, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':blood', $blood, PDO::PARAM_STR);

    $stmt->bindParam(':year', $year, PDO::PARAM_STR);
    $stmt->bindParam(':faculty', $faculty, PDO::PARAM_STR);
    $stmt->bindParam(':college', $college, PDO::PARAM_STR);

    $stmt->bindParam(':role', $role, PDO::PARAM_STR);
    $stmt->bindParam(':position', $position, PDO::PARAM_STR);
    
    $matric = $_POST['matric_no'];   
    $name = $_POST['name'];
    $password = $_POST['ic_no'];
    $email = $_POST['email'];
    $ic = $_POST['ic_no'];
    $birthday = strtr($_REQUEST['birthday'], '/', '-');
    $birthday = date('Y-m-d',strtotime($_POST['birthday']));
    $gender = $_POST['gender'];
    $race = $_POST['race'];
    $religion = $_POST['religion'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $blood = $_POST['blood'];
    $year = $_POST['year'];
    $faculty = $_POST['faculty'];
    $college = $_POST['college'];
    $role = "Member";
    $position = "N/A";

    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
    redirect('login');
}
 
  $conn = null;
 
?>