<?php
  include_once 'hq_activitydetails_crud.php';
  include_once 'database.php';
?>
 
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Validate Activity</title>
  
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

 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
      <div class="page-header">
        <h2 style="color: black">Validate Activity</h2></div>
        <div class="panel-body">
            Below are details of the activity.
        </div>
        <table class="table" colspan="500">
          <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activity WHERE fld_act_id = :actid" );

        $stmt->bindParam(':actid', $actid, PDO::PARAM_STR);
        $actid = $_POST['aid'];

        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }

      foreach($result as $readrow) {      ?>
          <tr>
            <td><strong>Activity ID</strong></td>
            <td><?php echo $readrow['fld_act_id']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Title</strong></td>
            <td ><?php echo $readrow['fld_act_title']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Start Date</strong></td>
            <td><?php echo $readrow['fld_act_start_date']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity End Date</strong></td>
            <td><?php echo $readrow['fld_act_end_date']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Start Time</strong></td>
            <td><?php echo $readrow['fld_act_start_time']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity End Time</strong></td>
            <td><?php echo $readrow['fld_act_end_time']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Venue</strong></td>
            <td><?php echo $readrow['fld_act_venue']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Description</strong></td>
            <td><?php echo $readrow['fld_act_desc']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Category</strong></td>
            <td><?php echo $readrow['fld_act_cat']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Merit</strong></td>
            <td><?php echo $readrow['fld_act_merit']; ?></td>
          </tr>
          <tr>
            <td><strong>Activity Quota</strong></td>
            <td><?php echo $readrow['fld_act_maxquota']; ?></td>
          </tr>
        </table>
      <?php } ?>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button name="submit" type="submit" class="btn btn-success btn-xs">Validate</button>
            <button name="return" type="submit" class="btn btn-danger btn-xs">Return</button>
            </div>
          </div>
          </form>
        
  </div>
      </div>
    </div>
  </div>
 
</script>
 
      <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
 
</body>

</html>