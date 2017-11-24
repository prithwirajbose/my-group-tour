<?php include_once('config.php'); ?>
<?php

if(!isset($_SESSION) || empty($_SESSION['user'])) {
  header("Location: login.php?err=Please login to access this page");
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include_once("includes/head.php"); ?>
  </head>

  <body>

   <?php include_once("includes/nav.php"); ?>

    <!-- Page Content -->

    <div class="container centertext">
      <h3 class="appheading">Trains</h3>
      <div class="maincontent">
        <div class="list-group left-text">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sealdah - New Delhi</h5>
              <small class="text-muted">15 Dec 04:50 PM</small>
            </div>
            <p class="mb-1">RAJDHANI EXP (B2 65, 66, 67, 68; B3 1, 2)</p>
            <p class="mb-1">PNR 189237</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Nizamuddin - Amritsar</h5>
              <small class="text-muted">16 Dec 08:20 PM</small>
            </div>
            <p class="mb-1">CHATTISGARH EXP (B2 65, 66, 67, 68; B3 1, 2)</p>
            <p class="mb-1">PNR 189237</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Pathankot - Old Delhi</h5>
              <small class="text-muted">23 Dec 04:00 PM</small>
            </div>
            <p class="mb-1">JAT SBP EXP (B2 65, 66, 67, 68; B3 1, 2)</p>
            <p class="mb-1">PNR 189237</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">New Delhi - Sealdah</h5>
              <small class="text-muted">24 Dec 04:30 PM</small>
            </div>
            <p class="mb-1">RAJDHANI EXP (B2 65, 66, 67, 68; B3 1, 2)</p>
            <p class="mb-1">PNR 189237</p>
          </a>


        </div>
      </div>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
