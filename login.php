<?php
include(connection.php);
$username=$_post[user]
$password=$_post[pass]

//prevent mysql injection

$username=stripslashes($username)
$password=stripslashes($password)


$username=mysql_real_escape_string($con,$username)
$password=mysql_real_escape_string(con,$password)


$sql=select*From login where username='$username'and password="$password";

$result=mysqlquery($con,$sql);
$row=mysqli_fetch_array($resul,mysql_Asso);
$count=mysqli_num_rows($results);
if($count==1)