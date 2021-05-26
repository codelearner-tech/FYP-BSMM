<?php
  include_once 'requestactivity_crud.php';
  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Insert Activity Details</title>

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/modern-business.css" rel="stylesheet">


</head>
<body>

  <?php include_once 'nav_bar.php'; ?>
 
  <div class="container-fluid">

    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2><span style="background-color: #ffffff; color: #000000">Request New Activity</span></h2>
      </div>

    <form action="#" method="post" class="form-horizontal">
      <div class="form-group">
        <input type="hidden" name="matric" value="<?php echo $_SESSION['matric']; ?>">
        <input type="hidden" name="status" value="Pending">
        <label for="activityid" class="col-sm-3 control-label">Activity ID</label>
        <div class="col-sm-9">

       <input name="activityid" type="text" class="form-control" id="activityid" placeholder="Activity ID" required>

      </div>
        </div>
      <div class="form-group">
          <label for="title" class="col-sm-3 control-label">Activity Title</label>
          <div class="col-sm-9">

       <input name="title" type="text" class="form-control" id="title" placeholder="Activity Title" required>

      </div>
        </div>
        <div class="form-group">
          <label for="date" class="col-sm-3 control-label">Start Date</label>
          <div class="col-sm-4">

      <input name="sdate" type="date"  class="form-control" id="sdate" placeholder="Activity Date" required>
       </div>
        </div>
        <div class="form-group">
          <label for="date" class="col-sm-3 control-label">End Date</label>
          <div class="col-sm-4">

      <input name="edate" type="date"  class="form-control" id="edate" placeholder="Activity Date" required>
       </div>
        </div>

        <div class="form-group">
          <label for="time" class="col-sm-3 control-label">Start Time</label>
          <div class="col-sm-4">

      <input name="stime" type="text"  class="form-control" id="stime" placeholder="Duration of Activity" required>
      
       </div>
        </div>

        <div class="form-group">
          <label for="time" class="col-sm-3 control-label">End Time</label>
          <div class="col-sm-4">

      <input name="etime" type="text"  class="form-control" id="etime" placeholder="Duration of Activity" required>
      
       </div>
        </div>

      <div class="form-group">
          <label for="venue" class="col-sm-3 control-label">Venue</label>
          <div class="col-sm-9">

     <select name="venue" class="form-control" id="venue" required>
            <option value="Pusanika">Pusanika</option>
            <option value="Foyer">Foyer Kolej Ungku Omar</option>
            <option value="UKM">Universiti Kebangsaan Malaysia</option>
            <option value="Stadium">Stadium UKM</option>
          </select>
      </div>
        </div>  
        
        <div class="form-group">
          <label for="description" class="col-sm-3 control-label">Description</label>
          <div class="col-sm-9">

      <input name="description" type="text"  class="form-control" id="description" placeholder="Activity Description" required>
      
       </div>
        </div>

        <div class="form-group">
          <label for="category" class="col-sm-3 control-label">Activity Category</label>
          <div class="col-sm-9">

     <select name="category" class="form-control" id="category" required>
            <option value="Kolej">Kolej</option>
            <option value="Universiti">Universiti</option>
            <option value="Negeri">Negeri</option>
          </select>

      </div>
        </div>

        <div class="form-group">
          <label for="merit" class="col-sm-3 control-label">Merit Mark</label>
          <div class="col-sm-9">

      <input name="merit" type="text"  class="form-control" id="merit" placeholder="Merit Mark" required>
      
       </div>
        </div>

        <div class="form-group">
          <label for="quota" class="col-sm-3 control-label">Available Quota</label>
          <div class="col-sm-9">

      <input name="quota" type="text"  class="form-control" id="quota" placeholder="Activity Quota" required>
      
       </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9"> 
      <button class="btn btn-default" type="submit" name="create" style="background-color:red; color: white;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Submit Request</button>
      <a class="btn btn-default" href="cm_activitylist">Cancel</a>
    </div>
  </div>
    </form>
  </div>
</div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>