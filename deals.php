
<?php 
session_start();
include("include/db.php");


if(!isset($_SESSION['mobile'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
	
}

else
{
	$k_mobile=$_SESSION['mobile'];
	
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body style='background-color:#F8F8F8;'>

<?php 


include('header.php');



?>







<div class="container">


<?php $get="select * from orch_d where k_mobile='$k_mobile' " ;

$run=mysqli_query($con,$get);
while($row=mysqli_fetch_array($run)){
	
	$kisan_id=$row['kisan_id'];
	
	$a_id=$row['agent_id'];
	$var_id=$row['var_id'];
	$take1="select * from variety where var_id='$var_id'";
	$run2=mysqli_query($con,$take1);
	$rowy=mysqli_fetch_array($run2);
	$var_name=$rowy['var_name'];
	$take="select * from agent where agent_id='$a_id'";
	$run1=mysqli_query($con,$take);
$rowx=mysqli_fetch_array($run1);
$a_co=$rowx['a_co_name'];
$a_name=$rowx['a_name'];
$a_location=$rowx['a_location'];
$s_a_range=$rowx['s_a_range'];
$e_a_range=$rowx['e_a_range'];
$s_b_range=$rowx['s_b_range'];
$e_b_range=$rowx['e_b_range'];
echo"

<div class='botle col-md-12'>
<div class='col-md-12'>

<div class='row'>
<div class='col-md-4'>
<img src='picture/24.jpg' class='img-responsive'  style='margin-top:1px; border-radius:5px;'>
</div>
<div class='col-md-8'>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'>company name:</span><span style='font-size:15px'> $a_co</span>
<br>

<br>

<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Name:</span><span style='font-size:15px'>$a_name</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Location:</span><span style='font-size:15px'> $a_location</span>
<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Grade-A:</span><span style='font-size:15px'>$s_a_range--$e_a_range kg</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Grade-B:</span><span style='font-size:15px'> 	$s_b_range--	$e_b_range per kg</span>

<br><br>
<span class='' style='font-size:20px; font-family:bold; color:#690309;'> Grade-B:</span><span style='font-size:15px'> $var_name </span>
<br>
<br>
<a  href='del_deal.php?k=$kisan_id ' class='cancel'>
<input type='submit' class='btn btn-primary'  value='cancel' name='canel' style='margin-left:300px; color:red; width:150px;height:70px; font-size:40px;'></a>
</div>
</div>
</div></div>";
	
	
	
}







?>






</div></div>


<br>
<br>
<br>
<br>
<br>
<br>




<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>
<?php
include("footer.php");?>
</body>
</html>

<?php  }?>
