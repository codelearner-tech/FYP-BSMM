<?php  $title = "Activity List";
include ("database.php");
//include_once 'products_crud.php';
//include_once 'logged_in.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BSMM UKM SYSTEM : Activity List</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

  <style>

    body {
    font: 14px "Montserrat", sans-serif;
    line-height: 1.8;
    
    background-image:url("logo bsmm ukm.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }

    
    img{
      height: 200px;
      width: 50%;

    }

    .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

</head>

<body>

 <?php include_once 'nav_bar.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="page-header">
            <h1>Activity List</h1>
        </div>

            

            <div class="col-md-12">
                <div class="row">
                        <?php
      // Read
      $per_page = 3;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from tbl_ukmbsmm_activity LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?> 
       <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                        <div class="dropdown">
                          <button onclick="myFunction()" class="dropbtn"><h4><a href="activitydetaildropdown.php?pid=<?php echo $readrow['fld_act_id']; ?>"><?php echo $readrow['fld_act_title']; ?></a>
                                </h4></button>

                                <div class="caption">
                                 <h4 class="pull-right">Left quota <?php echo $readrow['fld_act_quota']; ?></h4>

                           <div id="myDropdown" class="dropdown-content">
                                <p>Start Date : <?php echo $readrow['fld_act_start_date']; ?></p>
                                <p>End Date : <?php echo $readrow['fld_act_end_date']; ?></p>
                                <p>Start Time : <?php echo $readrow['fld_act_start_time']; ?></p>
                                <p>End Time : <?php echo $readrow['fld_act_end_time']; ?></p>
                                <p>Venue :<?php echo $readrow['fld_act_venue']; ?></p>
                                <p>Description : <?php echo $readrow['fld_act_desc']; ?></p>
                                <p>Category :  <?php echo $readrow['fld_act_cat']; ?></p>
                                <p>Merit mark : <?php echo $readrow['fld_act_merit']; ?></p>

                            </div>
                            
                        </div>
                    </div>
      <?php } ?>

      <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_ukmbsmm_activity");
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
            <li><a href="catalogue.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"catalogue.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"catalogue.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="catalogue.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
  <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

</html>
