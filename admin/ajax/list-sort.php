<?php
include('../../config/connection.php');
$list= $_GET['list'];
foreach($list as $position => $id){
	$q= "UPDATE navigation SET postion= $position WHERE id= $id";
	$r= mysqli_query($dbc,$q);
	echo mysqli_error($dbc);
}

?>