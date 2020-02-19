




<?php

session_start();


include('include/db.php');




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>apple</title>
	<link rel="stylesheet" href="styles/custom_style.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/navbar.css">
	<link rel="stylesheet" href="styles/tinku.css">
<link rel="stylesheet" href="styles/login.css">
    <title></title>
    
  </head>
  
  

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>

  <body style=" background: url(picture/bg1.jpg) no-repeat;">
  
  
<?php 


include("header.php");



?>


<div class="login-box">
<br><br><br><br>
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
	
<form  action="" method="POST"  enctype="multipart/form-data"><!--form login -->
    <input type="text" class="form-control" name="mobile" placeholder="Username">
 

  <div class="form-group textbox">
    <i class="fas fa-lock"></i>
    <input type="password"   class="form-control" name="pass" placeholder="Password">
  </div>
<br>
  <button href="" class="btn btn btn-block form-control"  style=" font-size:20px; width:300px;"value="" name="sign">Sign in</a>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="?reg" class="btn btn btn-block"  style="text-decoration:none; font-size:20px; width:300px;"value="">Register</button>
  

  </form>
   </div>
</div>


</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>
<?php
include("footer.php");?>
</body>
</html>

<?php
if(isset($_POST['sign']))
{
$email=$_POST['mobile'];	

$_SESSION['mobile']=$email;

$pass=$_POST['pass'];

$get="select * from customers where mobile='$email' AND customer_pass='$pass'";
$run=mysqli_query($con,$get);

	$count=mysqli_num_rows($run);
if($count==1){
	echo "<script>alert('you are logged in')</script>";
	
	echo "<script>window.open('index.php','_self')</script>";
	
}
else
{ echo "<script>alert('wrong pass')</script>";}






if(isset($_GET['reg'])){
	
	
	
	
	
	
	

	


echo "<script>window.open('register.php','_self')</script>";
	
	
}


}
?>