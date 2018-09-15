<?php

return $conn = mysqli_connect('localhost','root','','arushi');

if (!$conn) {

	die("connection failed:".mysqli_connect_error()); 
}