<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
$shippingaddress=$_POST['shippingaddress'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$uname=$_POST['username'];
$pass=$_POST['password'];


$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);
$res=mysql_query("insert into users(firstname,lastname,emailid,phoneno,address,shippingaddress,gender,dob,username,password) values('$firstname','$lastname','$emailid','$phoneno','$address','$shippingaddress','$gender','$dob','$uname','$pass');");

if($res)
{//echo"values inserted";
header('location:login.php');
}
else
{
	
	header('location:register.php');
}

?>