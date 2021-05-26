<?php
  include_once 'database.php';
  include_once 'joinactivity_crud.php';
  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List of Activity</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/modern-business.css" rel="stylesheet">
</head>
<body>
 
<div class="container-fluid">
  <div class="row">

     <div class="col-xs-12 col-sm-12 col-sm-offset-2 col-md-12 col-md-offset-3">
      <div class="page-header">
        <h2><span style="; color: #000000">List of Activity</span></h2>
      </div>

      <table class="table table-striped table-bordered">

      <tr>
        <th>Activity Title</th>
        <th>Activity Date</th>
        <th>Activity Time</th>
        <th>Quota</th>
        <th></th>
      </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activity");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      $i = 0;
      foreach($result as $readrow) {
      ?>
      <tr>
        <td>
          <?php $actid = $readrow['fld_act_id']; ?>
          <?php echo $readrow['fld_act_title']; ?>
          <p>
            <br>
            <a class="btn btn-info" data-toggle="collapse" href="#collapse<?php echo $i; ?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">Details</a>
          </p>
          <div id="collapse<?php echo $i; ?>" class="panel-collapse <?php echo ($i == 0 ? 'collapse in' : 'collapse'); ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
            <div class="card card-body">
              <p>Venue : <?php echo $readrow['fld_act_venue']; ?></p>
              <p>Description : <?php echo $readrow['fld_act_desc']; ?></p>
              <p>Category :  <?php echo $readrow['fld_act_cat']; ?></p>
              <p>Merit mark : <?php echo $readrow['fld_act_merit']; ?></p>
            </div>
          </div>
        </td>
        <?php if($readrow['fld_act_start_date'] != $readrow['fld_act_end_date']) {?>
          <td><?php echo $readrow['fld_act_start_date']; ?> - <?php echo $readrow['fld_act_end_date']; ?></td>
        <?php } else {?>
          <td><?php echo $readrow['fld_act_start_date']; ?></td>
        <?php } ?>
        <td><?php echo $readrow['fld_act_start_time']; ?> - <?php echo $readrow['fld_act_end_time']; ?></td>
        <td><?php echo $readrow['fld_act_quota']; ?></td>
        <td>
          <form action="#" method="post">
            <input type="hidden" name="matric" value="<?php echo $_SESSION['matric']; ?>">
            <input type="hidden" name="aid" value="<?php echo $actid; ?>">

            <?php
              try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activitymember WHERE fld_member_matric = :matric");

                $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
                $matric = $_SESSION['matric'];

                $stmt->execute();
                $result = $stmt->fetchAll();
              }
              catch(PDOException $e){
                echo "Error: " . $e->getMessage();
              }

              $check = false;

              foreach($result as $readrow) { ?>

                <?php if($actid == $readrow['fld_act_id']) { ?>
                  <input type="hidden" name="amod" value="<?php echo $readrow['fld_activitymember_id']; ?>">
                  <button class="btn btn-info btn-xs" type="submit" name="submit" value="joined" onclick="return confirm('Unjoin?');">Joined</button>
                  <?php
                  $check = true;
                  break;
                } 
              } 

              if(!$check) { ?>
                <button class="btn btn-primary btn-xs" type="submit" name="submit" value="join" onclick="return confirm('Join this activity?');">Join</button>
              <?php } ?>
          </form>
        </td>
      </tr>
     <?php $i++; } ?>
      </table>
    </div>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>