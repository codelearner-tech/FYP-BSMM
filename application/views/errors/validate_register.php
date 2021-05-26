<?php
  include_once 'register_crud.php';
  include_once 'database.php';
 // include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BSMM UKM System : Validate user</title>
            <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

  <style>
    body {
  font: 14px "Montserrat", sans-serif;
  line-height: 1.8;

    background-image:url("bg1.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }
  </style>

</head>
<body>
  
    <?php include_once 'nav_bar.php'; ?>

    <div class="container-fluid">
      <?php if($_SESSION['role'] == "Committee") {?>
       <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Validate user</h2>
      </div>
    <form action="validate.php" method="post" class="form-horizontal">
        
    </form>
    </div>
  </div>
<?php } ?>
   <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>User List</h2>
      </div>
      <table class="table table-striped table-bordered">
    <tr>
          <th>Matric number</th>
          <th>Name</th>
          <th>Join other association ? </th>
    
          <th></th>
        </tr>

      <?php
      // Read
      $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $conn->prepare("select * from tbl_bsmmukm_users LIMIT $start_from, $per_page");
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
        <td><?php echo $readrow['fld_other_association']; ?></td>
       
        
        <td>
          
          <a href="register.php?edit=<?php echo $readrow['fld_member_matric']; ?>" class="btn btn-success btn-xs" role="button"> Accept </a>
          <a href="register.php?delete=<?php echo $readrow['fld_member_matric']; ?>" onclick="return confirm('Are you sure to reject?');" class="btn btn-danger btn-xs" role="button">Reject</a>
        </td>
        <?php } ?>

      </tr>
      <?php
      }
      $conn = null;
      ?>
 
    </table>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_bsmmukm_users");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="register.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"register.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"register.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="register.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>

  </div>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
