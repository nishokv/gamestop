<?php
session_start();
$productid=$_POST['productid'];

$customerid=$_SESSION['username'];

echo $productid.$customerid;
echo "cart";
$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);
$res=mysql_query("insert into cart(productid,userid,status)values('$productid','$customerid','new');");

if($res)
{header('location:cart.php');}
else
{header('location:userhome.php');}



?>