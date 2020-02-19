<?php

session_start();
include("include/db.php")
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>apple</title>
	<link rel="stylesheet" href="styles/custom_style.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/navbar.css">
	<link rel="stylesheet" href="styles/tinku.css">
	
</head>


<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>

<body>
<?php include("header.php"); ?>


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->
  <div class="row">
    <div class="col-md-12" ><!--- col-md-12 Starts -->
      <ul class="breadcrumb" ><!-- breadcrumb Starts -->
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>Register</li>
      </ul><!-- breadcrumb Ends -->
    </div><!--- col-md-12 Ends -->
  </div>

<div class="row">
<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center><!-- center Starts -->

<h2> Register A New Account </h2>



</center><!-- center Ends -->



</div><!-- box-header Ends -->

<form class="form-horizontal " action="" method="post" enctype="multipart/form-data"  ><!-- form-horizontal Starts -->


<div class="form-group">
<label id="log2" >Mobile:</label>
<br>
<input type="text"   id="log1" name="mobile" class="form-control" required >

</div>



<div class="form-group">
<input type="submit"    id="log" name="mob" class="form-control btn btn-success">
</div>
</form>

	
<form class="form-horizontal collapse"  id="otp" method="post" enctype="multipart/form-data">




<div class="form-group">
<label>Enter Name:</label>
<br>
<input type="text"  name="name" class="form-control" required >

</div>



<div class="form-group">
<label>Enter OTP:</label>
<br>
<input type="text"  name="otp" class="form-control" required >

</div>



<div class="form-group">
<label>Password:</label>
<br>
<input type="text"  name="pass" class="form-control" required >

</div>

<div class="form-group"><!-- form-group Starts -->

<label> Customer Image </label>

<input type="file" class="form-control" name="c_image">

</div><!-- form-group Ends -->




<div class="form-group">
<input type="submit" value="confirm"   name="sub" class="form-control btn btn-success">
</div>
</form>







</div>
</div>




</div>



</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->
</div>


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("footer.php");

?>

<div class="menu_backdrop"></div>

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>


</body>

</html>


<?php

if(isset($_POST['mob'])){
	
	
	// Authorisation details.
	$username = "fazilkhan0399@gmail.com";
	$hash = "85321eeb4353a82b40f512910fe6efbeac11bef5de8041db6ca8181165334512";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	$otp=mt_rand(1000,10000);
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['mobile']; // A single number or a comma-seperated list of numbers
	$message = "Otp kya hai rishav bta"      ."$otp";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

if($result){

echo "<script>alert('otp has been sent to your phone ')</script>";
	
	
		$_SESSION['mobile']=$numbers;
		
		$_SESSION['otp']=$otp;
		
echo "<script>window.open('otp1.php','_self')</script>";
}


}

?>



