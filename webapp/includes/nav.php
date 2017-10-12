 <!-- Navigation -->
    <?php include_once('config.php'); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Nanda's Rotten Eggs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
            <?php if(isset($_SESSION) && !empty($_SESSION['user'])) { ?>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/members.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/members.php">Home</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/itinerary.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/itinerary.php">Itinerary</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/hotels.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/hotels.php">Hotels</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/spots.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/spots.php">Spots</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/trains.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/trains.php">Trains</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/expense.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/expense.php">Expense</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/bookings.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/bookings.php">Bookings</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/logout.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/logout.php">Logout</a>
              </li>
            <?php } else { ?>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/index.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/">Home</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/login.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/login.php">Login</a>
              </li>
              <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/register.php')!==false) print ' active'; ?>">
                <a class="nav-link" href="<?php echo $config['site']; ?>/register.php">Create New Account</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>