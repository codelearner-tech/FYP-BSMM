<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['activityid'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_ukmbsmm_activity(fld_act_id,
        fld_member_matric
        fld_act_title, 
        fld_act_start_date, 
        fld_act_end_date, 
        fld_act_start_time, 
        fld_act_end_time, 
        fld_act_venue, 
        fld_act_desc, 
        fld_act_cat, 
        fld_act_merit, 
        fld_act_quota, 
        fld_act_status) VALUES(:actid, :matric, :title, :sdate, :edate, :stime, :etime, :venue, :description, :cat, :merit, :quota, :status)");
   
    $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':sdate', $sdate, PDO::PARAM_STR);
    $stmt->bindParam(':stime', $stime, PDO::PARAM_STR);
    $stmt->bindParam(':edate', $edate, PDO::PARAM_STR);
    $stmt->bindParam(':etime', $etime, PDO::PARAM_STR);
    $stmt->bindParam(':venue', $venue, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':cat', $cat, PDO::PARAM_STR);
    $stmt->bindParam(':merit', $merit, PDO::PARAM_STR);
    $stmt->bindParam(':quota', $quota, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
       
    $actid = $_POST['activityid'];
    $matric = $_POST['matric'];
    $title = $_POST['title'];
    $sdate = $_POST['sdate'];
    $stime = $_POST['stime'];
    $edate = $_POST['edate'];
    $etime = $_POST['etime'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $cat = $_POST['category'];
    $merit = $_POST['merit'];
    $quota = $_POST['quota'];
    $status = "Validating";
       
    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
 
?>