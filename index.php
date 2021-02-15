
<?php
$servername="localhost";
$username="root";
$passwd="";
$database="YRCHAT";
$conn=mysqli_connect($servername,$username,$passwd,$database);
session_start();
if(isset($_POST['message']))
{
$message=$_POST['message'];
$sql="insert into Employee (chat) values ('$message')";
$res=mysqli_query($conn,$sql);
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
<style>
.cen{
text-align:center;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function printmsg()
{
$.getJSON('chatlist.php',function(data){
$('#back').empty();
for(var i=0;i<data.length;i++)
{
entry=data[i];
$('#back').append('<p><span style=font-weight:bold>'+entry[0]+'</span><br>&nbsp;&nbsp;&nbsp<span style=font-weight:lighter>'+entry[1]+'</span></p>');
}
setTimeout('printmsg()',1);
});
}
function myFunction()
{
document.getElementById("typing").innerHTML="typing...";
}
$(document).ready(function(){
$.ajaxSetup({cache:false});
printmsg();
});
</script>
  </head>
  <body>
    <div class=container>
<div class=row>
<div class="col cen">
<h4>YR CHAT</h4>
</div>
</div>
<div class=row>
<div class=col>
<form action="index.php" method="POST">
<input type=text size=30 name=message onchange=myFunction() required>
<input type=submit value=send>
<h6 id="typing"></h6>
</form>
</div>
</div>
</div>
<p id=back></p>
<br><br>
<hr>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>