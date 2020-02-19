
<?php

session_start();

include("include/db.php");


$numbers=$_SESSION['mobile'];

$otp=$_SESSION['otp'];
echo"$otp";
?>


<!DOCTYPE html>


<html>

<head>

<title>E commerce Store </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/design.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>






<div class="container modify">
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6 modify2">

<h1  class="text-center">OTP Confirmation</h1>

</div>
</div>
<br>
<br>
<br>
<div class="row">
<div class="col-md-2"></div>

<div class="col-md-8 modify3">
<br>
<form class="form-horizontal" method="post" enctype="multipart/form-data">




<div class="form-group">
<label>Enter Name:</label>
<br>
<input type="text"  name="jugad1" class="form-control" required >

</div>



<div class="form-group">
<label>Enter OTP:</label>
<br>
<input type="text"  name="jugad" class="form-control" required >

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
<input type="submit" value="confirm"   name="submit" class="form-control btn btn-success">
</div>
</form>








</div>
</div>




</div>







<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>


</body>
</html>

<?php  

if(isset($_POST['submit']))
{
	
	

$pass=$_POST['pass'];



$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];




$allowed = array('jpeg','jpg','gif','png','');

$file_extension = pathinfo($c_image, PATHINFO_EXTENSION);

if(!in_array($file_extension,$allowed)){

echo "<script> alert('Your Image Format,Extension Is Not Supported.'); </script>";	

exit();
	
}else{
	
move_uploaded_file($c_image_tmp,"picture/$c_image");
	
}

$v=$_POST['jugad'];

$v1=$_POST['jugad1'];

if ($v==$otp) {
  
$get="insert into customers(customer_name,mobile,customer_pass,customer_image,otp) values('$v1','$numbers','$pass','$c_image','$v')";

$run=mysqli_query($con,$get);





if($run)
{
	


echo "<script>alert('you are logged in succesfully ')</script>";
                      


echo "<script>window.open('index.php','_self')</script>";






					  
}



$row=mysqli_fetch_array($run);






echo "<script>alert('you are logged in succesfully ')</script>";
                      









					  } else {
     echo "<script>alert('you have enter wrong otp')</script>";
}


}








?>
