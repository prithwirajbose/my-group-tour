<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include_once("includes/head.php"); ?>
  </head>

  <body>

   <?php include_once("includes/nav.php"); ?>

    <!-- Page Content -->

<div class="container centertext">
       <h3 class="appheading">Create New Account</h3>
      <div class="maincontent">
        <form method="post" action="<?php echo $config['site']; ?>/verifyaccount.php">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="fullnameHelp" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter Phone Number">
            <small id="phoneHelp" class="form-text text-muted">Only 10 digits. An OTP will be sent to verify.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <select class="form-control" id="location" name="location" aria-describedby="locationHelp" placeholder="Select Your Location">
              <option value="">Select Your Location</option>
              <option value="Delhi">Delhi</option>
              <option value="Kolkata">Kolkata</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Register</button>
          </div>
        </form>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>

  </body>

</html>
