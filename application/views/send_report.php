<?php
  include_once 'database.php';
  include_once 'sendreport_crud.php';
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
    <title>Sumbit report form </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="assets/css/cmreport.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/modern-business.css" rel="stylesheet">


</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 style="color: black">Report</h2>
                </div>
                <?php
                  try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activity WHERE fld_act_id = :actid" );

                    $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
                    $actid = $_POST['actid'];

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
                            <div class="name">Activity Id</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="act_id" value="<?php echo $readrow['fld_act_id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="act_title" value="<?php echo $readrow['fld_act_title']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="desc" placeholder="Decription of the activity"  disabled><?php echo $readrow['fld_act_desc']; ?></textarea>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="form-group form-icon">
                                <div class="name">Start Date</div>
                                <input type="text" class="input--style-6" name="start_date" id="start_date" placeholder="MM-DD-YYYY" / value="<?php echo $readrow['fld_act_start_date']; ?>" disabled>
                            </div>

                            <div class="form-group form-icon">
                                <div class="name">End Date</div>
                                <input type="text" class="input--style-6" name="end_date" id="end_date" placeholder="MM-DD-YYYY" value="<?php echo $readrow['fld_act_end_date']; ?>" disabled>
                            </div>

                    </div>

                    <div class="form-row">    
                            <div class="form-group form-icon">
                                <div class="name">Start Time</div>
                                <input type="text" class="input--style-6" name="start_time" id="start_time"  value="<?php echo $readrow['fld_act_start_time']; ?>" disabled>
                            </div>

                            <div class="form-group form-icon">
                                <div class="name">End Time</div>
                                <input type="text" class="input--style-6" name="end_time" id="end_time" value="<?php echo $readrow['fld_act_end_time']; ?>" disabled>
                            </div>
                        </div> 

                        <div class="form-row">
                            <div class="name">Venue</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="venue" value="<?php echo $readrow['fld_act_venue']; ?>" disabled>
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="category" value="<?php echo $readrow['fld_act_cat']; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Merit Mark</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="merit" value="<?php echo $readrow['fld_act_merit']; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-row">    
                            <div class="name">Quota</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="quota" value="<?php echo $readrow['fld_act_quota']; ?>" disabled>
                            </div>
                        </div>

                        <!--<div class="form-row">
                            <div class="name">AJK List</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="ajk" placeholder="List of AJK"></textarea>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Participant List</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="participant" placeholder="List of participant"></textarea>
                                </div>
                            </div> 
                        </div>-->
                       
                        <div class="form-row">
                            <div class="name">Upload Photo</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your event photo or any other relevant file. Max file size 100 MB</div>
                            </div>
                        </div>
                    </form>
                </div> <?php } ?>
                <div class="card-footer">
                    <button class="btn btn-success btn-xs" type="submit" name="submit" value="sendin" onclick="return confirm('Send in your report?');">Submit</button>
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