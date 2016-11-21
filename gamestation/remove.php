<?php
include 'getvalues.php';
session_start();
$gameid=$_POST['gameid'];
$uname=$_SESSION['username'];
//echo$gameid;
//echo"buy";


$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);
$res=mysql_query("delete from cart  where productid='$gameid' and userid='$uname';");

if($res)
//echo 'success';
	

{header('location:cart.php');}
else
{echo"error";}

mysql_close();
?>