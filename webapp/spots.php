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
      <h3 class="appheading">Spots</h3>
      <div class="maincontent">
        <div class="list-group left-text">
          
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Amritsar</h5>
              <small class="text-muted">1 day</small>
            </div>
            <p class="mb-1">Golden Temple, Wagha Border, Jalianwala Bagh</p>
          </a>
          
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">McLeod Gunj</h5>
              <small class="text-muted">2 days</small>
            </div>
            <p class="mb-1">Dalai Lama Monestry, Naddi</p>
          </a>
         
        </div>
        
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
