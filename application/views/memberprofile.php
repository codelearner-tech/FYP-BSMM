<?php
  include_once 'database.php';
  include_once 'memberprofile_crud.php';
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
    <title>Your Profile</title>
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
                    <h2 style="color: black">Your Profile</h2>
                </div>
                <?php
                  try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_users WHERE fld_member_matric = :matric" );

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
                            <div class="name">Full Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" value="<?php echo $readrow['fld_member_name']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Matric Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="matric" value="<?php echo $readrow['fld_member_matric']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">IC Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ic_no" value="<?php echo $readrow['fld_member_ic']; ?>" disabled>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Birthday</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="birthday" value="<?php echo $readrow['fld_member_birthday']; ?>" disabled>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="gender" value="<?php echo $readrow['fld_member_gender']; ?>" disabled>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="address" value="<?php echo $readrow['fld_member_address']; ?>" >
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="email" value="<?php echo $readrow['fld_member_email']; ?>" >
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="phone" value="<?php echo $readrow['fld_member_phone']; ?>" >
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Blood Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="blood" value="<?php echo $readrow['fld_member_blood']; ?>" disabled>
                                </div>
                            </div> 
                        </div>


                        <div class="form-row">
                            <div class="name">Year</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="year" value="<?php echo $readrow['fld_member_year']; ?>" >
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="name">Faculty</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="faculty" value="<?php echo $readrow['fld_member_faculty']; ?>" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="college" value="<?php echo $readrow['fld_member_college']; ?>" disabled>
                            </div>
                        </div>

                        
                        
                    </form>
                </div> <?php } ?>
                <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
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