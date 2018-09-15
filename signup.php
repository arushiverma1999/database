<?php 
include 'dbh.php';

$first =$_POST["first"];
$last =$_POST["last"];
$uid =$_POST["uid"];
$pswd =$_POST["pswd"];

$sql ="INSERT INTO user (first , last, uid, pswd)
VALUES('$first','$last','$uid','$pswd')";
$result = $conn->query($sql); 