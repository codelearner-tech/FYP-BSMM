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
        <th>Available quota</th>
        <th>Merit mark</th>
      </tr>
      <?php
      $i = 0;
      foreach ($actlist as $act): ?>
      <tr>
        <td>
          <?php 
          $actid = $act->fld_act_id;
          echo $act->fld_act_title; ?>
          <p>
            <br>
            <a class="btn btn-info" data-toggle="collapse" href="#collapse<?php echo $i; ?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">Details</a>
          </p>
          <div id="collapse<?php echo $i; ?>" class="panel-collapse <?php echo ($i == 0 ? 'collapse in' : 'collapse'); ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
            <div class="card card-body">
              <p>Time : <?php echo $act->fld_act_start_time; ?> - <?php echo $act->fld_act_end_time; ?></p>
              <p>Venue : <?php echo $act->fld_act_venue; ?></p>
              <p>Category :  <?php echo $act->fld_act_cat; ?></p>
              <p>Max Quota : <?php echo $act->fld_act_maxquota; ?></p>
              <p>Description : <?php echo $act->fld_act_desc; ?></p>
            </div>
          </div>
        </td>
        <?php if($act->fld_act_start_date != $act->fld_act_end_date) { ?>
          <td><?php echo $act->fld_act_start_date; ?> - <?php echo $act->fld_act_end_date; ?></td>
        <?php } else { ?>
          <td><?php echo $act->fld_act_start_date; ?></td>
        <?php } ?>
        <td><?php echo $act->fld_act_aquota ?></td>
        <td><?php echo $act->fld_act_merit ?></td>
        <td>
          <?php
            $check = false;
            foreach ($memberjoin as $member): ?>
              <?php if($actid == $member->fld_act_id) { ?>
                <form action="<?php echo site_url('joinactivity/unjoin');?>" method="post">
                <input type="hidden" name="amoid" value="<?php echo $member->fld_activitymember_id; ?>">
                <input type="hidden" name="actid" value="<?php echo $actid; ?>">
                <button class="btn btn-info btn-xs" type="submit" name="submit" value="joined" onclick="return confirm('Cancel your participation?');">Joined</button>
                </form>
                <?php
                $check = true;
                break;
              }
            endforeach; 
            if(!$check) { ?>
              <form action="<?php echo site_url('joinactivity/join');?>" method="post">
              <input type="hidden" name="actid" value="<?php echo $actid; ?>">
              <button class="btn btn-primary btn-xs" type="submit" name="submit" value="join" onclick="return confirm('Join this activity?');">Join</button>
              </form>
            <?php } ?>
          </form>
        </td>
      </tr>
              <?php $i++;
            endforeach; ?>
      </table>
      </div>
    </div>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>