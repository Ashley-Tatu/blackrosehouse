<?php
include(connection.php);
$delivery=$_post[deli];
$size=$_post[size];
$type=$_post[type];

//prevent mysql injection

$delivery=stripslashes($delivery);
$size=stripslashes($size);
$type=stripslashes($type);

$delivery=mysql_real_escape_string($con,$delivery);
$size=mysql_real_escape_string(con,$size);
$type=mysql_real_escape_string(con,$type);

$sql= "INSERT INTO login (delivery,size,type)
values('$delivery','$size','$type')";

$result=mysqlquery($con,$sql);
$row=mysqli_fetch_array($resul,mysql_Asso);
$count=mysqli_num_rows($results);
if($count==1)
?>
