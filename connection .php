<?php
$host="localhost";
$username="root";
$password="";
$db_name="black rose house";

$con=mysqli_connect($host,$username,$password,$db_name);
if(mysqli_connect_errno()){
    die("failed to connect with MYSQL:".mysqli_connect_error());
}
?>