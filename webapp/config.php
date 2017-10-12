<?php
if(!isset($_SESSION))
    session_start();
$err = isset($_REQUEST['err']) && !empty($_REQUEST['err']) ? $_REQUEST['err'] : NULL;
$config = array(
    'site'=>'http://localhost:8088/my-group-tour/webapp',
    'dbhost'=>'localhost',
    'dbuser'=>'root',
    'dbpass'=>'9883246001',
    'dbname'=>'tourappdb'
);
?>