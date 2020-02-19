
<?php 
session_start();
include("include/db.php");

$var=$_GET['var_id'];

?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>apple</title>
	<link rel='stylesheet' href='styles/custom_style.css'>
	<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet'>
	<link rel='stylesheet' href='styles/navbar.css'>
	<link rel='stylesheet' href='styles/tinku.css'>
		

</head>
<body style='background-color:#F8F8F8;'>

<?php 


include('header.php');



?>

<div class='container hidden-xs' ><!-- container Starts -->
			<div class='row'>
				<div class='col-md-12' ><!--- col-md-12 Starts -->
					<ul class='breadcrumb' ><!-- breadcrumb Starts -->
						<li>
							<a href='index.php' style='font-size:15px; text-decoration:none;'>Home</a>
						</li>
						<li><a href='#' style='font-size:15px; text-decoration:none;'>Select</a></li>
						
					</ul><!-- breadcrumb Ends -->
				</div><!--- col-md-12 Ends -->
			</div>

</div>


<?php

$i=0;
$get_agent="select * from agent_order where var_id='$var'";
$run_a=mysqli_query($con,$get_agent);
while($row=mysqli_fetch_array($run_a)){
	
	
	$a_id=$row['agent_id'];

$a_co_name=$row['a_co_name'];
$a_name=$row['a_name'];
$a_location=$row['a_location'];

	$s_range=$row['s_grade_a'];
		$e_range=$row['e_grade_a'];
		$s_b_range=$row['s_grade_b'];
		$e_b_range=$row['e_grade_b'];
	
	

	
	
	$_SESSION['var_id']=$var;
	
echo "

<div class='container hidden-xs'>
<div class='row'>
<div class='card-1  cary' style='margin-bottom:20px; width:500px; margin-right:30px; margin-left:30px;'>


<div class='animat' style='background-color:black;'><p><a href='#' style='text-decoration:none;'>
   sell upto: 40000kg/400boxes;
  </a></p></div>

<a href ='select.php?a_id=$a_id'>
<div class='col-md-4'>
<img src='picture/24.jpg' class='img-responsive'  style='margin-top:1px; border-radius:5px;'>


<span class='' style='font-size:20px; font-family:bold; color:#690309;'>company name:</span><span style='font-size:15px'> $a_co_name</span>
</div>
<div class='col-md-8'>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Name:</span><span style='font-size:15px'>$a_name</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Location:</span><span style='font-size:15px'> $a_location</span>
<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Grade-A:</span><span style='font-size:15px'>$s_range--$e_range kg</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Grade-B:</span><span style='font-size:15px'> 	$s_b_range--	$e_b_range per kg</span>
</div>
</a>
</div>
</div>


</div>


<!-- mobile view------------------------------------------------>

<div class='container visible-xs' ><!-- container Starts -->
			<div class='row'>
				<div class='col-md-12' ><!--- col-md-12 Starts -->
					<ul class='breadcrumb' ><!-- breadcrumb Starts -->
						<li>
							<a href='index.php' style='font-size:15px; text-decoration:none;'>Home</a>
						</li>
						<li><a href='#' style='font-size:15px; text-decoration:none;'>Select</a></li>
						
					</ul><!-- breadcrumb Ends -->
				</div><!--- col-md-12 Ends -->
			</div>

</div>
<!-- mobile view------------------------------------------------>


<div class='visible-xs'>
<div class='row'>

<div class='cary ' style='margin-left:0px; margin-right:0px; width:200px'>


<p class='animat ' style='background-color:black; height:30px; border-radius:45px; '><a href='#' style='text-decoration:none; font-size:20px; color:#fff;'>
   DEMAND:4000/5000
  </a></p>

<div class='container visible-xs' style='margin-bottom:20px;' >






  
<a href='select.php?a_id=$a_id'>

<div class='col-12'>
<img src='picture/24.jpg' class='img-responsive' style='margin-top:1px; border-radius:3px;'>





<span class='' style='font-size:20px; font-family:bold; color:#690309;'></span><span style='font-size:15px'>$a_name</span>

<span class='' style='font-size:20px; font-family:bold; color:#690309;'>A:</span><span style='font-size:15px'>$s_range--$e_range   per kg</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'>B:</span><span style='font-size:15px'>$s_b_range--	$e_b_range kg</span>

</div>
</a>
</div>

</div>
</div>


</div>
</div>

</div>

<!-- mobile view------------------------------------------------>










";
	
	$i++;
}
?>


<script src='js/jquery.min.js'> </script>
<script src='js/bootstrap.min.js'></script>
<script src='js/custom_script.js'></script>
<?php  include('footer.php')?>

</body>
</html>