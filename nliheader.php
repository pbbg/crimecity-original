<?php
//error_reporting ('E_ALL & ~E_NOTICE');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'dbcon.php';

include 'classes.php';


?>


