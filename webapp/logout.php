<?php
if(!isset($_SESSION))
    session_start();
$_SESSION['user'] = NULL;
$_SESSION['user_profile'] = NULL;
unset($_SESSION);
session_destroy();
header("Location: index.php");
?>