<?php
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');
 if($con){
 	echo "connection";

 }
 else{
 	echo "not";
 }
?>