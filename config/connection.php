<?php

//database connection here....
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"],1);

//$dbc=mysqli_connect('localhost','root','shipramohit','mogify') OR die('Error: '.mysqli_connect_error);
  $dbc = mysqli_connect($server, $username, $password) OR die('Error: '.mysqli_connect_error);
?>