<?php 
$host="localhost";
$user="root";
$pass="Asdf@1234";
$db="game";
$con= mysql_connect($host,$user,$pass)or die ("could not connect ");
$dbc=@mysqli_connect($host,$user,$pass,$db)or die ("could not connect dbc");
if($dbc==true)
    printf("success");
else
    printf("failure");
	
//$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);

$gamename = $_POST['gamename'];
$description = $_POST['description'];
$type = $_POST['type'];
$price = $_POST['price'];
$genre = $_POST['genre'];

$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
//$sql = "INSERT INTO `product_images` (`gamename`,`description`,`price`,`genre`,`type`, `image`, `image_name`)
 //VALUES ('{$gamename}','{$description}','{$price}','{$genre}','{$type'}, '{$image}', '{$image_name}');";
$sql = "INSERT INTO `product_images` (`price`,`gamename`,`description`,`genre`,`type`, `image`, `image_name`)
 VALUES ('{$price}','{$gamename}','{$description}','{$genre}','{$type}', '{$image}', '{$image_name}')";

 if (!mysql_query($sql))
{ // Error handling
    echo "Something went wrong! :("; 
}
else{
	
	header('location:adminhome.php');
	
}
mysql_close();
?>