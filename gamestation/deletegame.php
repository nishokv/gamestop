<?php
$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);

$prodid=$_POST['productid'];
echo $prodid;
$res=mysql_query("delete from product_images where id='$prodid';");

if($res)
{header('location:viewgames.php');
}
else
{header('location:viewgames.php');
}

//mysql_close();
?>