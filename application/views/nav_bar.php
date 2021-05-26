<?php if(!isset($_SESSION['role'])) {
  $_SESSION['role'] = "N/A";
  redirect('Welcome');
} ?>

<!DOCTYPE html>
<html lang="en">

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Welcome">UKM BSMM System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="Welcome#aboutus">About Us</a>
              <a class="dropdown-item" href="Welcome#orgchart">Organisation Chart</a>
            </div>
          </li>
          <?php if($_SESSION['role'] != "N/A" AND $_SESSION['role'] != "HQ"){?><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Members
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="listjoinedactivity">List of joined acitvities</a>
              <?php if($_SESSION['role'] == "Committee"){?><a class="dropdown-item" href="update_memberlist">Update position</a>
            </div><?php } ?>
          </li><?php } ?>
          <?php if($_SESSION['role'] != "N/A"){?><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Activity
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <?php if($_SESSION['role'] != "HQ"){?><a class="dropdown-item" href="joinactivity">Join activity</a><?php } ?>
              <?php if($_SESSION['role'] == "Committee") {?><a class="dropdown-item" href="cm_activitylist">Activity List</a><?php } ?>
              <?php if($_SESSION['role'] == "HQ") {?><a class="dropdown-item" href="hq_activitylist">Activity Requests</a><?php } ?>
              <?php if($_SESSION['role'] == "HQ") {?><a class="dropdown-item" href="reportlist">Activity Reports</a><?php } ?>
            </div>
          </li><?php } ?>
        </ul>
      </div>
    </div>
    <?php if($_SESSION['role'] == "N/A"){?><a class="btn btn-info" href="login"><span class="glyphicon glyphicon-envelope"> Log in </a><?php } ?>
        <?php if($_SESSION['role'] != "N/A"){?><a class="btn btn-danger" href="<?php echo site_url('login/logout');?>"><span class="glyphicon glyphicon-envelope"> Log out </a><?php } ?>
  </nav>
</body>
     