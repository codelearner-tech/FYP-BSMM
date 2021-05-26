<?php
  include_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Activity Joined</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="assets/css/cmreport.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/modern-business.css" rel="stylesheet">

</head>


<body>
    <div class="page-wrapper bg-light p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 style="color: black">List of Joined Activity</h2>
                </div>
                <?php
                  try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT tbl_ukmbsmm_activitymember.fld_act_id, tbl_ukmbsmm_activity.fld_act_title, tbl_ukmbsmm_activity.fld_act_start_time,tbl_ukmbsmm_activity.fld_act_end_time, tbl_ukmbsmm_activity.fld_act_merit FROM tbl_ukmbsmm_activitymember INNER JOIN tbl_ukmbsmm_activity ON tbl_ukmbsmm_activitymember.fld_act_id = tbl_ukmbsmm_activity.fld_act_id WHERE tbl_ukmbsmm_activitymember.fld_member_matric = :matric" );

                    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
                    $matric = $_SESSION['matric'];

                    $stmt->execute();
                    $result = $stmt->fetchAll();
                  }
                  catch(PDOException $e){
                        echo "Error: " . $e->getMessage();
                  }
                foreach($result as $readrow) { ?>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="name">Activity Name:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" value="<?php echo $readrow['fld_act_title']; ?>" disabled>
                            </div>
                            <div class="name">Merit :</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" value="<?php echo $readrow['fld_act_merit']; ?>" disabled>
                            </div>
                        </div>
                        
                    </form>
                </div> 
            <?php } ?>
                
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/cmreport.min.js"></script>


    <!-- Main JS-->
    <script src="assets/js/cmreport.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->