<?php
  include_once 'database.php';
  include_once 'validateregister_crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Validate user</title>

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Validate user</h1>
        
        <table class="table table-striped table-bordered">
          <tr>
            <th>Matric number</th>
            <th>Name</th>
            <th>Join other association ? </th>
            <th></th>
          </tr>

          <?php try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_users WHERE fld_member_validate = :novalid");
              $stmt->bindParam(':novalid', $novalid, PDO::PARAM_STR);
              $novalid = "No";
            $stmt->execute();
            $result = $stmt->fetchAll();
          }
          catch(PDOException $e){
            echo "Error: " . $e->getMessage();
          }
          foreach($result as $readrow) { ?>

            <tr>
              <td><?php echo $readrow['fld_member_matric']; ?></td>
              <td><?php echo $readrow['fld_member_name']; ?></td>
              <td><?php echo $readrow['fld_other_association']; ?></td>
              <td>
                <form action="#" method="post">
                  <input type="hidden" name="matric" value="<?php echo $readrow['fld_member_matric']; ?>">
                  <button class="btn btn-success btn-xs" type="submit" name="submit" value="accept" onclick="return confirm('This member will be accepted. Are you sure?');">Accept</button>
                  <button class="btn btn-danger btn-xs"  type="submit" name="submit" value="reject" onclick="return confirm('This member will be rejected. Are you sure?');">Reject</button>
                </form>
              </td>
            </tr>
          <?php } ?>
          </table>
      </div>
    </div>
  </div>

  <script src="assets/vendor/jquery/jquery.slim.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>