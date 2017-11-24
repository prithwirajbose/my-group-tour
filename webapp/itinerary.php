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
      <h3 class="appheading">Itinerary</h3>
      <div class="maincontent">
      
      <div class="list-group">
         <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 1, 15th Dec</h4>
            <p class="list-group-item-text">Boarding Sealdah New Delhi Rajdhani Express at 04:50 PM</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Day 2, 16th Dec</h4>
            <p class="list-group-item-text">New Delhi Arrival at 10:30 AM</p>
            <p class="list-group-item-text">Transit to Mejo Jethu's Place</p>
            <p class="list-group-item-text">Board Nizamuddin Amritsar Chattisgarh Express at 08:20 PM</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 3, 17th Dec</h4>
            <p class="list-group-item-text">Amritsar Arrival at 04:30 AM</p>
            <p class="list-group-item-text">Transit to Amritsar Hotel</p>
            <p class="list-group-item-text">Sightseeing starts at 01:00 PM - , Wagha Border, Golden Temple</p>
            <p class="list-group-item-text">Jalianwalabagh at 01:10 PM, Wagha Border at 02:45 PM, Golden Temple at 06:00 PM</p>
            <p class="list-group-item-text">Night Stay at Amritsar</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Day 4, 18th Dec</h4>
            <p class="list-group-item-text">Transit from Amritsar to McLeod Gunj</p>
            <p class="list-group-item-text">En route Sightseeing</p>
            <p class="list-group-item-text">Night Stay at McLeod Gunj</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 5, 19th Dec</h4>
            <p class="list-group-item-text">McLeod Gunj Sightseeing starts at 10:00 AM</p>
            <p class="list-group-item-text">Dalai Lama Monestry, Dharamsala Cricket Stadium, Others</p>
            <p class="list-group-item-text">Night Stay at McLeod Gunj</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Day 6, 20th Dec</h4>
            <p class="list-group-item-text">Transit from McLeod Gunj to Dalhousie</p>
            <p class="list-group-item-text">En route Sightseeing</p>
            <p class="list-group-item-text">Night Stay at Dalhousie</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 7, 21st Dec</h4>
            <p class="list-group-item-text">Sightseeing starts at 09:00 AM.</p>
            <p class="list-group-item-text">Khajjiar, Chamba, Dalhousie Sightseeing</p>
            <p class="list-group-item-text">Night Stay at Dalhousie</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Day 8, 22nd Dec</h4>
            <p class="list-group-item-text">Sightseeing starts at 09:00 AM.</p>
            <p class="list-group-item-text">Kalatop Santuary</p>
            <p class="list-group-item-text">Night Stay at Dalhousie</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 9, 23rd Dec</h4>
            <p class="list-group-item-text">Transit from Dalhousie to Pathankot Cantt. Rail Station</p>
            <p class="list-group-item-text">Board Jat Sambalpur Exp at 04:00 PM for Old Delhi</p>
        </a>
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">Day 10, 24th Dec</h4>
            <p class="list-group-item-text">Offboard DLI at 08:00 AM, Transit to Mejo Pisi's Place</p>
            <p class="list-group-item-text">Board New Delhi Sealdah Rajdhani Exp at 04:30 PM</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Day 11, 25th Dec</h4>
            <p class="list-group-item-text">Arrive Kolkata at 10:30 PM</p>
        </a>
      </div>
      <p>&nbsp;</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d865322.6493795869!2d75.03908660068242!3d32.091782756960654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x391964aa569e7355%3A0xeea2605bee84ef7d!2sAmritsar%2C+Punjab!3m2!1d31.6339793!2d74.8722642!4m5!1s0x391b56d4e3d36d19%3A0xa3e8725f0584be76!2sMcLeod+Ganj%2C+Dharamshala%2C+Himachal+Pradesh!3m2!1d32.2425758!2d76.3212781!4m5!1s0x391c9138637f1ae1%3A0xbac8f1954c198c20!2sDalhousie%2C+Himachal+Pradesh!3m2!1d32.5387385!2d75.97099779999999!4m5!1s0x391c7f5d473c84b3%3A0x5335739bee705d89!2sPathankot%2C+Punjab!3m2!1d32.264337499999996!2d75.64211209999999!5e0!3m2!1sen!2sin!4v1507837214237" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmzc49k_EbD_0DTVBnqxtxaPvsuy3FTlI&callback=initialize">
    </script>
        
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
