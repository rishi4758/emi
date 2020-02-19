


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

<?php include("footer.php");?>
</body>
</html>

<?php  

if(isset($_POST['submit']))
{
	
	

$pass=$_POST['pass'];



$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

$c_ip = getRealUserIp(); 




$allowed = array('jpeg','jpg','gif','png','');

$file_extension = pathinfo($c_image, PATHINFO_EXTENSION);

if(!in_array($file_extension,$allowed)){

echo "<script> alert('Your Image Format,Extension Is Not Supported.'); </script>";	

exit();
	
}else{
	
move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
	
}

$v=$_POST['jugad'];
$otp=$_GET['otp'];

$v1=$_POST['jugad1'];

if (password_verify($v, $otp)) {
    










echo "<script>alert('you are logged in succesfully ')</script>";
                      


echo "<script>window.open('checkout.php','_self')</script>";






					  } else {
     echo "<script>alert('you have enter wrong otp')</script>";
}


}








?>
