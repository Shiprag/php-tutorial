<?php
#Starting session
session_start();
unset($_SESSION['username']);//destroy username key
//session_destroy(); <!--This would delete all the session keys-->
header('Location:login.php');//Redirect to login.php


?>