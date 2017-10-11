<?php include_once('config.php'); 

if(isset($_SESSION) && !empty($_SESSION['user'])) {
  header("Location: members.php");
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
      <h3 class="appheading">Himachal Tour 2017</h3>
      <div class="maincontent">
        <p><button type="button" class="btn btn-success btn-lg btn-block" onclick="javascript:window.location='<?php echo $config['site']; ?>/login.php';">Login</button>
        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="javascript:window.location='<?php echo $config['site']; ?>/register.php';">Create New Account</button></p>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
