<?php include_once('config.php'); ?>
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
      <h3 class="appheading">Login</h3>
      <div class="maincontent">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
