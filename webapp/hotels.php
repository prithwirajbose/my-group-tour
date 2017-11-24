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
      <h3 class="appheading">Hotels</h3>
      <div class="maincontent">
        <div class="list-group left-text">
          
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Amritsar</h5>
              <small class="text-muted">1 Day, 1 Night</small>
            </div>
            <p class="mb-1">Not Booked Yet (Options are: )</p>
          </a>
          
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">McLeod Gunj</h5>
              <small class="text-muted">3 Days, 2 Nights</small>
            </div>
            <p class="mb-1">Silvermoon House [6 x Double Bed Rooms]<br />
            (More options will be searched on spot)             
           </p>
           <p class="mb-1"><button type="button" class="btn btn-success" aria-label="Gallery" onclick="window.location='http://silvermoonhouse.com/encore/gallery.php';">
  <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Gallery</button></p>
          </a>
          
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Dalhousie</h5>
              <small class="text-muted">3 Days, 3 Nights</small>
            </div>
            <p class="mb-1">Mongas Hotel &amp; Resort - [1 x Family Room 4 Beds, 4 x Double Bed Rooms]</p>
             <p class="mb-1"><button type="button" class="btn btn-success" aria-label="Gallery" onclick="window.location='http://www.hotelmongas.com/picturegallery.html';">
  <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Gallery</button></p>
          </a>
          
        </div>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
