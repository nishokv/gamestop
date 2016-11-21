<?php
include 'getvalues.php';
session_start();
if(!isset($_SESSION['username'])){

header("location:login.php");
}
?>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>GameStation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
</style>
</head>
<body>
    <div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="pull-left" href="#"><img src="images/ealogo.jpg" width='60' height='50'></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="userhome.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Cart</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Email</a></li>
            <li><a href="#">Phone</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Set Appointment</a></li>
          </ul>
        </li>
		<li><a href="#">Account</a></li>
		<li><a href="#">About us</a></li>
		<li><a href="logoutmodule.php">Logout</a></li>
		-->
      </ul>
      <!-- navbar-left will move the search to the left -->
      <form class="navbar-form navbar-right" role="search" action="userhome.php" method="post">
	  
        <div class="form-group">
          </div>
		  <input type="text" class="form-control" placeholder="Search" name="search">
		  
        
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->  </div><!-- /.container-fluid -->
</nav>
        <div class="well well-sm" id ="mydiv"><h3 class="text-primary"> <?php echo $_SESSION['username'];?> Here is your cart</h3></well></div>
<?php 
if(isset($_SESSION['username']))
{
$bigcart=getcart($_SESSION['username']);
echo "<table class ='table table-hover'>
<thead>
<tr>
<td><h3 class='text-info'>Gamename</h3></td>
<td><h3 class='text-info'>GameType</h3></td>
<td><h3 class='text-info'>Genre</h3></td>
<td><h3 class='text-info'>price</h3></td>
<td><h3 class='text-info'>Count</h3></td>
<td></td>
<td></td>
</tr>
</thead>"
;


for($i=0;$i<count($bigcart);$i++)
{
	$cart=$bigcart[$i];
	echo "<tr><td><h4 class='text-info'>".
$cart['gamename'].
"</h4></td><td><h4 class='text-info'>"
.$cart['type'].
"</h4></td><td><h4 class='text-info'>".
$cart['genre'].
"</h4></td><td><h4 class='text-info'>"
.$cart['price']."$
</h4></td><td><h4 class='text-info'>"
.$cart['count'].
"</h4></td>
<td>

<form method='post' action='buy.php'>
<input type='hidden' value=".$cart['id']." name='gameid'/>
<input type='submit' class = 'btn btn-success btn-lg' value='buy'/></form>
</td><td>
<form method='post' action='remove.php'>
<input type='hidden' value=".$cart['id']. " name='gameid'/>
<input type='submit' class = 'btn btn-warning btn-lg' value='remove'/></form>
</td></tr>";
}
echo"</h3></table></form>";
}
?>


    
</div>	    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php

?>