<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>List of Requested Activity</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/modern-business.css" rel="stylesheet">

</head>
<body>

    <?php include_once 'nav_bar.php'; ?>
 
<div class="container-fluid">
  <div class="row">

     <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2><span style="; color: #000000">List of Requested Activity</span></h2><br>
      </div>
      <a class="btn btn-success" href="requestactivity">New Activity</a><br><br>
      <table class="table table-striped table-bordered">
      <tr>
        <th>Activity Title</th>
        <th>Member List</th>
        <th>Activity Status</th>
        <th>Report</th>
      </tr>
      <?php
      $i = 0;
      foreach ($actlist as $act): ?>
      <tr>
        <td><?php echo $act->fld_act_title; ?></td>
        <td>
          <form action="memberjoinactivitylist" method="post">
            <input type="hidden" name="actid" value="<?php echo $act->fld_act_id; ?>">
            <button class="btn btn-info btn-xs" type="submit" name="submit" value="memberjoinactivitylist">Member List</button></td>
          </form>
        </td>
        <td><?php echo $act->fld_act_status; ?></td>
        <td><?php if($act->fld_act_status == "Completed"){?>
          <form action="sendreport" method="post">
            <input type="hidden" name="actid" value="<?php echo $act->fld_act_id; ?>">
            <button class="btn btn-info btn-xs" type="submit" name="submit" value="report">Send in report</button><?php } ?></td>
          </form>
      </tr> 
      <?php endforeach; ?>   
      </table>
    </div>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>