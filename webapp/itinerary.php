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
        <iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d865322.6493795869!2d75.03908660068242!3d32.091782756960654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x391964aa569e7355%3A0xeea2605bee84ef7d!2sAmritsar%2C+Punjab!3m2!1d31.6339793!2d74.8722642!4m5!1s0x391b56d4e3d36d19%3A0xa3e8725f0584be76!2sMcLeod+Ganj%2C+Dharamshala%2C+Himachal+Pradesh!3m2!1d32.2425758!2d76.3212781!4m5!1s0x391c9138637f1ae1%3A0xbac8f1954c198c20!2sDalhousie%2C+Himachal+Pradesh!3m2!1d32.5387385!2d75.97099779999999!4m5!1s0x391c7f5d473c84b3%3A0x5335739bee705d89!2sPathankot%2C+Punjab!3m2!1d32.264337499999996!2d75.64211209999999!5e0!3m2!1sen!2sin!4v1507837214237" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmzc49k_EbD_0DTVBnqxtxaPvsuy3FTlI&callback=initialize">
    </script>
        
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
