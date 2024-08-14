<?php
$conn = mysqli_connect('localhost','root','','jana');
if(!$conn){
	echo "Connection Failed: ".mysqli_error($conn);
	exit;
}
?>
