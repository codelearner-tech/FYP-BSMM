<?php
include_once 'database.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/modern-business.css" rel="stylesheet">

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

.button3 {background-color: #33cc33;} /* Green */ 
</style>

</head>

<body>

<body>
    <div class="container-fluid">
      <div class="row top-buffer" >
        <div class="col-xs-12 col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12" align="center">
          <div class="page-header">
                <h2 style="color: black">Joined Member List</h2>
              </div>
      <table class="table table-striped table-bordered">

      <tr>
        <th>Matric Number</th>
        <th>Member Name</th>
        <th></th>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT DISTINCT fld_act_id, tbl_ukmbsmm_users.fld_member_matric, fld_member_name FROM tbl_ukmbsmm_activitymember, tbl_ukmbsmm_users WHERE fld_act_id = :actid");

          $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
          $actid = $_POST['actid'];

        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_member_matric']; ?></td>
        <td><?php echo $readrow['fld_member_name']; ?></td>
      </tr>
      
     <?php } ?>
 
      </table>
    </div>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
  </div>
</body>

<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BSMM Cabang UKM 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</html>
