


<?php
session_start();

include("include/db.php");

if(!isset($_SESSION['mobile'])){
	echo"<script>window.open('login.php','_self')</script>";
	
	
	
}

else
{
	
	$var=$_SESSION['var_id'];
	$k_mobile=$_SESSION['mobile'];
	
	$a_id=$_SESSION['a_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>apple</title>
	<link rel="stylesheet" href="styles/custom_style.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/navbar.css">
	<link rel="stylesheet" href="styles/tinku.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<?php 


include("header.php");



?>

<div class="container hidden-xs" ><!-- container Starts -->
			<div class="row">
				<div class="col-md-12" ><!--- col-md-12 Starts -->
					<ul class="breadcrumb" ><!-- breadcrumb Starts -->
						<li>
							<a href="index.php" style="font-size:15px; text-decoration:none;">Home</a>
						</li>
						<li><a href="#" style="font-size:15px; text-decoration:none;">Select</a></li>
						
					</ul><!-- breadcrumb Ends -->
				</div><!--- col-md-12 Ends -->
			</div>

</div>

<!-- mobile  view starts-->


<div class="container visible-xs" ><!-- container Starts -->
			<div class="row">
				<div class="col-md-12" ><!--- col-md-12 Starts -->
					<ul class="breadcrumb" ><!-- breadcrumb Starts -->
						<li>
							<a href="index.php" style="font-size:15px; text-decoration:none;">Home</a>
						</li>
						<li><a href="#" style="font-size:15px; text-decoration:none;">Select</a></li>
						
					</ul><!-- breadcrumb Ends -->
				</div><!--- col-md-12 Ends -->
			</div>

</div>






<!-- mobile  view ends-->































<div class=""></div>

<div class="row ">


<div class="container   col-12 col-md-5" >


<div>
<div class="panel-heading">


<h1 class="text-muted text-center">Personal Details</h1>

</div>

<form class="form-horizontal " action="" method="post" enctype="multipart/form-data"  ><!-- form-horizontal Starts -->

<div class="container">
<div class="form-group">
<!--form-group starts-->

<label style="font-size:20px; color:green;"> Name</label>
<input type="text" class="form-control" name="c_name" requied>








</div><!--form-group endss-->









<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">village</label>
<input type="text" class="form-control" name="c_vill" .>

</div><!--form-group endss-->

<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">District</label>
<input type="text" class="form-control" name="c_dis" .>

</div><!--form-group endss-->



<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Customer Contact</label>
<input type="text" class="form-control" name="c_con" .>

</div><!--form-group endss-->




</div>





</div>



</div><!--col md 9 ends-->



<div class="container  offset-md-1 col-12 col-md-5" >



<div class="panel-heading">


<h1 class="text-muted text-center">Orchard Details</h1>

</div>




<div class="form-group">
<!--form-group starts-->

<label style="font-size:20px; color:green;">Total</label>
<input type="text" class="form-control" name="total" .>


</div><!--form-group endss-->

<!-- radio buttons start-->

<label> Select the type of packing</label>
    <label class="radio-inline" style="font-size:15px;">
      <input type="radio"  data-target="#so" data-toggle="collapse" id="fir" value="kg"  name="opt" required >Kg
    </label>
   
    <label class="radio-inline" style="font-size:15px;">
      <input type="radio"   data-target="#so" data-toggle="collapse" id="fir" value="box"  name="opt" required>box
    </label>



<!-- radio buttons ends-->
<div class=" collapse" id="so">
<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Large</label>
<input type="text" class="form-control" name="c_l" .>

</div><!--form-group endss-->

<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Medium</label>
<input type="text" class="form-control" name="c_m" .>

</div><!--form-group endss-->

<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Small</label>
<input type="text" class="form-control" name="c_sm" .>

</div><!--form-group endss-->


<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Extra Small</label>
<input type="text" class="form-control" name="c_ex" .>


</div><!--form-group endss-->



<div class="form-group"><!--form-group starts-->

<label style="font-size:20px; color:green;">Pittu</label>
<input type="text" class="form-control" name="c_pittu" .>


</div><!--form-group endss-->
</div>

<input  type="submit" name="sub" style="font-size:25px; font-family:bold; text-decoration:none;" class="offset-md-1 text-center example_c btn btn-block"  >

  </form>


</div>




</div>




<br>




<!--footer-start-->
	<?php
		include("footer.php");
	?>
	<!-- footer-Ends -->


<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>

</body>
</html>

<?php
if(isset($_POST['sub'])){

$name=$_POST['c_name'];
$vill=$_POST['c_vill'];
$dis=$_POST['c_dis'];
$contact=$_POST['c_con'];
$total=$_POST['total'];
$type=$_POST['opt'];
$large=$_POST['c_l'];
$medium=$_POST['c_m'];
$small=$_POST['c_sm'];
$ex_sm=$_POST['c_ex'];
$pittu=$_POST['c_pittu'];
$get_d="insert into orch_d ( `agent_id`,`var_id`,`k_mobile`,`k_name`, `k_village`, `k_distt`, `k_contact`, `k_total`, `type`, `k_l`, `k_m`, `k_sm`, `k_ex`, `k_pittu`) values('$a_id','$var','$k_mobile','$name','$vill','$dis','$contact','$total','$type','$large','$medium','$small','$ex_sm','$pittu')";

$run=mysqli_query($con,$get_d);
if($run){
	
	
	echo "<script>alert('Your Order Has Been Updated')</script>";


}
}

}
?>