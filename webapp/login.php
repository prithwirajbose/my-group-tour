<?php include_once('config.php'); ?>
<?php
if(isset($_POST['submit']) && !empty($_POST['phone']) && !empty($_POST['password'])) {
  if(($_POST['phone']=='8820068365' || $_POST['phone']=='9899040761' || $_POST['phone']=='9831304884'
     || $_POST['phone']=='9874556699' || $_POST['phone']=='9711155744') && $_POST['password']=='tour') {
       $_SESSION['user']='8820068365';
       $_SESSION['user_profile'] = array(
          'phone'=>'8820068365',
          'fullname'=>'Demo User',
          'password'=>'tour',
          'location'=>'Kolkata'
       );
       header("Location: members.php");
     }
     else 
      $err = 'Incorrect phone number or password!';
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
      <h3 class="appheading">Login</h3>
      <div class="maincontent">
      
        
        <div class="alert alert-danger" role="alert" style="display:none;">
         
        </div>
        
        <form method="post" action="<?php echo $config['site']; ?>/login.php">
          <div class="form-group">
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
    
    <?php include_once("includes/footer.php"); ?>
    
  </body>

</html>
