<?php
include 'getvalues.php';
session_start();
$gameid=$_POST['gameid'];
$uname=$_SESSION['username'];
//echo$gameid;
//echo"buy";


$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);
$res=mysql_query("update cart set status='bought' where productid='$gameid' and userid='$uname';");

if($res)
{header('location:cart.php');}
else
{echo"error";}


?>