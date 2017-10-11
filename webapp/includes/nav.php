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
            <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/index.php')!==false) print ' active'; ?>">
              <a class="nav-link" href="<?php echo $config['site']; ?>/">Home</a>
            </li>
            <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/login.php')!==false) print ' active'; ?>">
              <a class="nav-link" href="<?php echo $config['site']; ?>/login.php">Login</a>
            </li>
            <li class="nav-item<?php if(strpos($_SERVER['SCRIPT_NAME'],'/register.php')!==false) print ' active'; ?>">
              <a class="nav-link" href="<?php echo $config['site']; ?>/register.php">Create New Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>