<?php
include_once 'updateposition_crud.php';
include_once 'database.php';

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
                <h2 style="color: black">Update Position</h2>
          </div>

          <?php
          // Read
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_users WHERE fld_member_matric = :matric");

            $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
            $matric = $_POST['matric'];

            $stmt->execute();
            $result = $stmt->fetchAll();
          }
          catch(PDOException $e){
            echo "Error: " . $e->getMessage();
          }
          foreach($result as $readrow) {
          ?>

            <form action="#" method="post" class="form-horizontal">

            <div class="form-group" align="left">
              <label for="mid" class="col-sm-3 control-label left" style="color: black">Member Name:</label>
              <div class="col-sm-6">
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $readrow['fld_member_name']; ?>" disabled="true">
                
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="currentposition" class="col-sm-3 control-label" style="color: black"> Current Position:</label>
              <div class="col-sm-6">
                <input type="text" name="currentposition" class="form-control" id="currentposition" value="<?php echo $readrow['fld_member_position']; ?>" disabled="true">
              </div>
            </div>

            <div class="form-group" align="left">
              <label for="newposition" class="col-sm-3 control-label" style="color: black"> Assign member with position:</label>
              <div class="col-sm-6">
                <select name="newposition" class="form-control" id="newposition" required>
                    <option value="Please select" disabled selected>Please select</option>
                    <option value="Komandan">Komandan</option>
                    <option value="Penolong Komandan" >Penolong Komandan</option>
                    <option value="Quatermaster"  >Quatermaster</option>
                    <option value="Ketua Seksyen 1"  >Ketua Seksyen 1</option>
                    <option value="Ketua Seksyen 2"  >Ketua Seksyen 2</option>
                    <option value="Penolong Ketua Seksyen 1" >Penolong Ketua Seksyen 1</option>
                    <option value="Penolong Ketua Seksyen 2" >Penolong Ketua Seksyen 2</option>
                    <option value="Penolong Ketua Seksyen 3" >Penolong Ketua Seksyen 3</option>
                    <option value="Penolong Ketua Seksyen 4" >Penolong Ketua Seksyen 4</option>

                </select>
              </div>
            </div>

            <div class="form-group" align="right">
              <div class="col-sm-offset-3 col-sm-9">
                <input type="hidden" name="matric" value="<?php echo $matric; ?>">
                <button class="btn btn-success" type="submit" name="submit" value="update">Update Position</button>
    <?php } ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
 
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BSMM Cabang UKM 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</html>