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
      <h3 class="appheading">Hi <?php echo $_SESSION['user_profile']['fullname']; ?></h3>
      <div class="maincontent">
        <div class="row">
          <div class="col-md-12 membernav">
            <a href="#" class="thumbnail btn btn-primary btn-lg">
              <i class="material-icons valign">event</i><br />Itinerary
            </a>
            <a href="#" class="thumbnail btn btn-primary btn-lg">
              <i class="material-icons">hotel</i><br />Hotels
            </a>
            <a href="spots.php" class="thumbnail btn btn-success btn-lg">
              <i class="material-icons valign">place</i><br />Spots
            </a>
            <a href="#" class="thumbnail btn btn-success btn-lg">
              <i class="material-icons valign">train</i><br />Trains
            </a>
            <a href="#" class="thumbnail btn btn-warning btn-lg">
              <i class="material-icons valign">attach_money</i><br />Expense
            </a>
            <a href="#" class="thumbnail btn btn-warning btn-lg">
              <i class="material-icons">airline_seat_recline_normal</i><br />Bookings
            </a>
          </div>
          
        </div>
        
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
