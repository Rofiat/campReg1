<?php
	//To check database  connection
$conn=mysqli_connect('localhost','root','abcde','camp');

if(mysqli_connect_errno())
{echo "Connection failed: ".mysqli_connect_errno();}
?>