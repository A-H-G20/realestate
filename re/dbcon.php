<?php
$conn = mysqli_connect('localhost','root','','jana2024');
if(!$conn){
	echo "Connection Failed: ".mysqli_error($conn);
	exit;
}
?>
