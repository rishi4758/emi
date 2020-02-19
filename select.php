<?php session_start();


$var=$_SESSION['var_id'];


include("include/db.php");

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
<body  style='background-color:#F8F8F8;'>

<?php 
	$a_id=$_GET['a_id'];
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
<!-- desktop view starts-->

<div class=' total box container hidden-xs'>



<a style='text-align:center;font-family:algerian; font-size:90px; color:black; '>Gra</a><a style='text-align:center;font-family:algerian; font-size:90px; color:blue; '>de - A</a>
</div>







<br class='hidden-xs'><br class='hidden-xs'>



<?php  
$_SESSION['a_id']=$a_id;

$get="select * from grade_a where agent_id='$a_id' AND var_id='$var'";

$run_a=mysqli_query($con,$get);
$row=mysqli_fetch_array($run_a);

$s_l=$row['s_large'];
$e_l=$row['e_large'];
$s_m=$row['s_med'];
$e_m=$row['e_med'];
$s_sm=$row['s_sm'];
$e_sm=$row['e_sm'];
$s_ex=$row['s_ex'];
$e_ex=$row['e_ex'];
$s_pitu=$row['s_pitu'];
$e_pitu=$row['e_pitu'];
$s_range=$row['s_range'];
$e_range=$row['e_range'];

$a_desc=$row['a_desc'];



?>






<div class=' botle container hidden-xs'>
<div class='col-md-6 col-sm-6'>
<img src='picture/gala.jpg' class='img-responsive' style=''>
<h3>Description:</h3>

<div class='text-center' style='font-size:20px;'><i><?php echo"$a_desc";?></i></div>


</div>
<div class='golmaal col-md-6'>
<div class='table-responsive' style='border-radius:20px; ' ><!-- table-responsive Starts -->

<table class='table table-bordered table-hover table-striped' ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th style='font-size:20px;'>Size</th>
<th style='font-size:20px;'>Rate</th>





</tr>

</thead>

<tbody>


<tr>



<td style='font-size:20px;'>Large</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><i/><?php echo"$s_l";?>---<i class='fa fa-inr'><?php echo"$e_l";?><i/></td>


</tbody>

</tr>


<tr>

<td style='font-size:20px;'>Medium</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_m";?><i/>---<i class='fa fa-inr'><?php echo"$e_m";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Small</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_sm";?><i/>---<i class='fa fa-inr'><?php echo"$e_sm";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Ex-small</td>



<td style='font-size:20px;'><i class='fa fa-inr'><?php echo"$s_ex";?><i/>---<i class='fa fa-inr'><?php echo"$e_ex";?><i/></td>


</tbody>

</tr>


<tr>



<td style='font-size:20px;'>Pittu</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_pitu";?><i/>---<i class='fa fa-inr'><?php echo"$e_pitu";?><i/></td>


</tbody>

</tr>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->




 <a href='add.php' class='btn btn-success btn btn-block'><i>Grab Deal</i></a>

</div>

</div>



<br class='hidden-xs'>
<hr class='hidden-xs'>


 <!-- grade b starts---------------------------------------------------------------->
<br><br>
 
 <div class='total container hidden-xs'><span style='text-align:center;font-family:algerian; font-size:90px; color:black; '>Gra</span><span style='text-align:center;font-family:algerian; font-size:90px; color:blue; '>de -B </span>
</div>









<br class='hidden-xs'><br class='hidden-xs'>



<?php  

$get="select * from grade_b where agent_id='$a_id' AND var_id='$var'";

$run_a=mysqli_query($con,$get);
$row=mysqli_fetch_array($run_a);

$s_l1=$row['s_large'];
$e_l1=$row['e_large'];
$s_m1=$row['s_med'];
$e_m1=$row['e_med'];
$s_sm1=$row['s_sm'];
$e_sm1=$row['e_sm'];
$s_ex1=$row['s_ex'];
$e_ex1=$row['e_ex'];
$s_pitu1=$row['s_pitu'];
$e_pitu1=$row['e_pitu'];
$s_range1=$row['s_range'];
$e_range1=$row['e_range'];

$a_desc1=$row['b_desc'];



?>





<div class=' botle container hidden-xs'>
<div class=' col-md-6 col-sm-6'>
<img src='picture/gala.jpg' class='img-responsive' style=''>

<h3>Description:</h3>

<div class='text-center' style='font-size:20px;'><i><?php echo"$a_desc1";?></i></div>


</div>
<div class='golmaal col-md-6'>
<div class='table-responsive' style='border-radius:20px; ' ><!-- table-responsive Starts -->

<table class='table table-bordered table-hover table-striped' ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th style='font-size:20px;'>Size</th>
<th style='font-size:20px;'>Rate</th>





</tr>

</thead>

<tbody>


<tr>



<td style='font-size:20px;'>Large</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><i/><?php echo"$s_l1";?>---<i class='fa fa-inr'><?php echo"$e_l1";?><i/></td>


</tbody>

</tr>


<tr>

<td style='font-size:20px;'>Medium</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_m1";?><i/>---<i class='fa fa-inr'><?php echo"$e_m1";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Small</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_sm1";?><i/>---<i class='fa fa-inr'><?php echo"$e_sm1";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Ex-small</td>



<td style='font-size:20px;'><i class='fa fa-inr'><?php echo"$s_ex1";?><i/>---<i class='fa fa-inr'><?php echo"$e_ex1";?><i/></td>


</tbody>

</tr>


<tr>



<td style='font-size:20px;'>Pittu</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_pitu1";?><i/>---<i class='fa fa-inr'><?php echo"$e_pitu1";?><i/></td>


</tbody>

</tr>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->





 <a href=' add.php' class='btn btn-success btn btn-block'><i>Grab Deal</i></a>


</div>







</div>

<!-- desktop view endss-->



<!-- mobile  view starts#############################################################################-->


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
<div class=' totaly visible-xs container'>

<span style='text-align:center;font-family:algerian; font-size:40px; color:black; '>Gra</span><span style='text-align:center;font-family:algerian; font-size:40px; color:blue; '>de -A </span>

</div>



<div class='botle container visible-xs  'style=' border: 5px solid black;'>


<div class='row'>
<div class='golmaal col-6'>
<img src='picture/gala.jpg' class='img-responsive' style=''>
</div>

<div class='col-6' style='font-size:12px;'><i><?php echo"$a_desc";?></i></div>


</div>
<div class='golmaal col-12'>
<div class='table-responsive' style='border-radius:20px; ' ><!-- table-responsive Starts -->

<table class='table table-bordered table-hover table-striped' ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th style='font-size:20px;'>Size</th>
<th style='font-size:20px;'>Rate</th>





</tr>

</thead>


<tbody>


<tr>



<td style='font-size:20px;'>Large</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><i/><?php echo"$s_l";?>---<i class='fa fa-inr'><?php echo"$e_l";?><i/></td>


</tbody>

</tr>


<tr>

<td style='font-size:20px;'>Medium</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_m";?><i/>---<i class='fa fa-inr'><?php echo"$e_m";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Small</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_sm";?><i/>---<i class='fa fa-inr'><?php echo"$e_sm";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Ex-small</td>



<td style='font-size:20px;'><i class='fa fa-inr'><?php echo"$s_ex";?><i/>---<i class='fa fa-inr'><?php echo"$e_ex";?><i/></td>


</tbody>

</tr>


<tr>



<td style='font-size:20px;'>Pittu</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_pitu";?><i/>---<i class='fa fa-inr'><?php echo"$e_pitu";?><i/></td>


</tbody>

</tr>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->





 <a href=' add.php' class='btn btn-success btn btn-block'><i>Grab Deal</i></a>


</div>




</div>
<br><br>
<hr class='visible-xs'>

<!-- grade b starts ---------------------------------------------------------------------------->



<div class=' totaly visible-xs container'>

<span style='text-align:center;font-family:algerian; font-size:40px; color:black; '>Gra</span><span style='text-align:center;font-family:algerian; font-size:40px; color:blue; '>de -B</span>

</div>














<div class=' botle container visible-xs' style=' border: 5px solid black;'>


<div class='row'>
<div class='col-6'>
<img src='picture/gala.jpg' class='img-responsive' style=''>
</div>

<div class='col-6' style='font-size:12px;'><i><?php echo"$a_desc1";?></i></div>


</div>
<div class='col-12 golmaal'>
<div class='table-responsive' style='border-radius:20px; ' ><!-- table-responsive Starts -->

<table class='table table-bordered table-hover table-striped' ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th style='font-size:20px;'>Size</th>
<th style='font-size:20px;'>Rate</th>





</tr>

</thead>
<tbody>


<tr>



<td style='font-size:20px;'>Large</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><i/><?php echo"$s_l1";?>---<i class='fa fa-inr'><?php echo"$e_l1";?><i/></td>


</tbody>

</tr>


<tr>

<td style='font-size:20px;'>Medium</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_m1";?><i/>---<i class='fa fa-inr'><?php echo"$e_m1";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Small</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_sm1";?><i/>---<i class='fa fa-inr'><?php echo"$e_sm1";?><i/></td>


</tbody>

</tr>

<tr>



<td style='font-size:20px;'>Ex-small</td>



<td style='font-size:20px;'><i class='fa fa-inr'><?php echo"$s_ex1";?><i/>---<i class='fa fa-inr'><?php echo"$e_ex1";?><i/></td>


</tbody>

</tr>


<tr>



<td style='font-size:20px;'>Pittu</td>



<td  style='font-size:20px; row-span:5'><i class='fa fa-inr'><?php echo"$s_pitu1";?><i/>---<i class='fa fa-inr'><?php echo"$e_pitu1";?><i/></td>


</tbody>

</tr>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->




 <a href='add.php' class='btn btn-success btn btn-block'><i>Grab Deal</i></a>

</div>




</div>

<!-- mobile view ends-->









<script src='js/jquery.min.js'> </script>
<script src='js/bootstrap.min.js'></script>
<script src='js/custom_script.js'></script>
<?php
include('footer.php');?>
</body>
</html>