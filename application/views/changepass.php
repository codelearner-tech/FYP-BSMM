<?php
$conn = mysqli_connect("lrgs.ftsm.ukm.my", "bsmmukm", "bsmmukm", "bsmmukm") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from tbl_ukmbsmm_users WHERE fld_member_matric='" . $_POST["memberid"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["fld_member_pw"]) {
        mysqli_query($conn, "UPDATE tbl_ukmbsmm_users set fld_member_pw='" . $_POST["newPassword"] . "' WHERE fld_member_matric='" . $_POST["memberid"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BSMM UKM</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/css/modern-business.css" rel="stylesheet">

  <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
</style>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

memberid = document.frmChange.memberid;
currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">UKM BSMM System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

<body>
    <div class="container-fluid">
      <div class="row top-buffer" >
        <div class="col-xs-12 col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12" align="center">
          <div class="page-header">
                <h2 style="color: black">Change Password</h2>
              </div>

            <div class="form-group" align="left">
              <label for="mid" class="col-sm-3 control-label left" style="color: black">Matric number:</label>
              <div class="col-sm-3">
                <input type="text" name="memberid" class="form-control" id="mid" required autofocus>
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 control-label" style="color: black"> Current Password:</label>
              <div class="col-sm-6">
                <input type="password" name="crnpassword" class="form-control" id="crnpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 control-label" style="color: black"> New Password:</label>
              <div class="col-sm-6">
                <input type="password" name="newpassword" class="form-control" id="newpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 " style="color: black"> Confirm Password:</label>
              <div class="col-sm-6">
                <input type="password" name="cfmpassword" class="form-control" id="cfmpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="right">
              <div class="col-sm-offset-3 col-sm-9">
                <button class="button button4">Clear Password</button>
                <button class="button button3">Reset Password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
 
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BSMM Cabang UKM 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  
</html>





  


  