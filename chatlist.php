<?php
$servername="localhost";
$username="root";
$passwd="";
$database="YRCHAT";
$conn=mysqli_connect($servername,$username,$passwd,$database);
$sql="select * from Employee";
$res=mysqli_query($conn,$sql);
$stuff=[];
while($row=mysqli_fetch_assoc($res))
{
$chat=$row['chat'];
$time=$row['time'];
$stuff []=array($chat,$time);
}
echo (json_encode($stuff));
?>