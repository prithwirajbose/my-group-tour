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
      <h3 class="appheading">Expense</h3>
      <div class="maincontent">
        <div class="panel panel-default">
          <div class="list-group">
            <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Summary</h4>
                <p class="list-group-item-text">Net Expense Rs <b id="netExpense">22000</b></p>
                <p class="list-group-item-text">Net Deposit Rs <b id="netDeposit">0</b></p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Rs 20000 DT</h4>
                <p class="list-group-item-text">Dalhousie Hotel Advance</p>
                <p class="list-group-item-text">Spent by Pom on 20/11/2017</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Rs 2000 DT</h4>
                <p class="list-group-item-text">Amritsar Bus Booking</p>
                <p class="list-group-item-text">Spent by Sunny on 10/11/2017</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
