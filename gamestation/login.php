<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>My GameStation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="csslogin.css">

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
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="loginmodule.php" role="login">
         <!-- <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />-->
		 <img src="loginlogo.png" class="img-responsive" alt="" />	
          <input type="email" name="email" placeholder="email" required class="form-control input-lg"  />
          <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required="" >
		  <!--
          <input type="password" name="pass" class="form-control input-lg"  placeholder="Password" required="" />-->
          
          
         <!-- <div class="pwstrength_viewport_progress"></div>-->
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="register.php">Create account</a> or <a href="#">reset password</a>
  <div>        </div>
<?php
session_start();
if(isset($_SESSION['username']))
{
	//echo "invalid user";
	
}


?>   
</div>   
        </form>
        
        <div class="form-links">
          <a href="#">www.gamestation.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  </div>
  <p>
  <?php
//session_start();
//if(isset($_SESSION['loginerror']))
//{
	//echo $_SESSION['loginerror'];
	
//}
?>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jslogin.js"></script>
</body>
</html>
