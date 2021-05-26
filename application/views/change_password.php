<?php
$conn = mysqli_connect("lrgs.ftsm.ukm.my", "bsmmukm", "bsmmukm", "bsmmukm") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from tbl_ukmbsmm_users WHERE fld_member_matric='" . $_POST["memberid"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["crnpwd"] == $row["fld_member_pw"]) {
        mysqli_query($conn, "UPDATE tbl_ukmbsmm_users set fld_member_pw='" . $_POST["newpwd"] . "' WHERE fld_member_matric='" . $_POST["memberid"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>BSMM UKM</title>

<link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/modern-business.css" rel="stylesheet">

<script>
function validatePassword() {
var crnpwd,newpwd,cfmpwd,output = true;

memberid = document.frmChange.memberid;
crnpwd = document.frmChange.crnpwd;
newpwd = document.frmChange.newpwd;
cfmpwd = document.frmChange.cfmpwd;

if(!crnpwd.value) {
    crnpwd.focus();
    document.getElementById("crnpwd").innerHTML = "required";
    output = false;
}
else if(!newpwd.value) {
    newpwd.focus();
    document.getElementById("newpwd").innerHTML = "required";
    output = false;
}
else if(!cfmpwd.value) {
    cfmpwd.focus();
    document.getElementById("cfmpwd").innerHTML = "required";
    output = false;
}
if(newpwd.value != cfmpwd.value) {
    newpwd.value="";
    cfmpwd.value="";
    newpwd.focus();
    document.getElementById("cfmpwd").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>

</head>
<body>

<body>
    <div class="container-fluid">
        <div class="row top-buffer" >
            <div class="col-xs-12 col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12" align="center">
                <div class="page-header">
                    <h2 style="color: black">Change Password</h2>
                </div>
                <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                    <br><?php if(isset($message)) {?><div class="message"><input class="form-control" type="text" name="message" value="<?php echo $message; ?>" disabled></div><br><?php } ?>
                    <div class="form-group" align="left">
                        <label for="mid" class="col-sm-3 control-label left" style="color: black">Matric number:</label>
              <div class="col-sm-3">
                <input type="text" name="memberid" class="form-control" id="memberid" required autofocus>
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 control-label" style="color: black"> Current Password:</label>
              <div class="col-sm-6">
                <input type="password" name="crnpwd" class="form-control" id="crnpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 control-label" style="color: black"> New Password:</label>
              <div class="col-sm-6">
                <input type="password" name="newpwd" class="form-control" id="newpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="crtpwd" class="col-sm-3 " style="color: black"> Confirm Password:</label>
              <div class="col-sm-6">
                <input type="password" name="cfmpwd" class="form-control" id="cfmpwd" autofocus required >
              </div>
            </div>

            <div class="form-group" align="right">
              <div class="col-sm-offset-3 col-sm-9">
                <button class="btn btn-danger btn-xs" type="submit" name="submit" value="Submit" >Reset Password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
 
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>