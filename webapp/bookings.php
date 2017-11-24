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
      <h3 class="appheading">Bookings</h3>
      <div class="maincontent">
        <div class="list-group left-text">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Om Sai Travels Amritsar</h5>
              <small class="text-muted">7307233265</small>
            </div>
            <p class="mb-1">Contact Person: Ripon Chaudhary</p>
            <p class="mb-1">Booked: 13 Seater Tempo Traveller</p>
            <p class="mb-1">Dates: 17th - 24th Dec</p>
            <p class="mb-1">Advanced Paid: Rs 2,000/-</p>
            <p class="mb-1">Net Payable: Rs 24,000/-</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Mongas Hotel &amp; Resort</h5>
              <small class="text-muted">9418577777</small>
            </div>
            <p class="mb-1">Contact Person: Karanvir Singh</p>
            <p class="mb-1">Booked: 4 Double Bed Rooms, 1 Family Room 4 Beds</p>
            <p class="mb-1">Advanced Paid: Rs 20,000/-</p>
            <p class="mb-1">Net Payable: Rs 69,000/-</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Silvermoon House</h5>
              <small class="text-muted">9816081585</small>
            </div>
            <p class="mb-1">Booked: 6 Double Bed Rooms</p>
            <p class="mb-1">Advanced Paid: Rs 0/-</p>
            <p class="mb-1">Net Payable: Rs 24,000/-</p>
          </a>

          

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Kolkata Delhi Train Tickets</h5>
              <small class="text-muted"></small>
            </div>
            <p class="mb-1">Booked: Return tickets for 7 adults, 1 Child + Oneway Ticket for 1 Adult</p>
            <p class="mb-1">Net Paid: Rs 24,000/-</p>
          </a>

          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Delhi - Amritsar/Pathankot Train Tickets</h5>
              <small class="text-muted"></small>
            </div>
            <p class="mb-1">Booked: Return tickets for 12 adults, 1 Child</p>
            <p class="mb-1">Net Paid: Rs 24,000/-</p>
          </a>
        </div>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
