


<?php

session_start();
 include("include/db.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>apple</title>
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/navbar.css">
	<link rel="stylesheet" href="styles/tinku.css">
</head>
<body style="background-color:#F8F8F8;">

<?php 


include("header.php");



?>
<br>

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="#" >

<i class="fa fa-fw fa-user" ></i> Profile


</a>

</li><!-- li Ends -->
</ul>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<br>
<div id="caro" style="border-style: groove; width:1250px; margin-left: 50px;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" ></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner ">
      	
<?php

	$get_s="select * from slider LIMIT 0,1";
	


$run_s=mysqli_query($con,$get_s);

 while ($row=mysqli_fetch_array($run_s)) {

$imag=$row['slide_image'];

    echo"  <div class='item active'>
        <img src='picture/$imag' >
</div>
";
}

?>



<?php
$get_slides= "select *from slider LIMIT 1,4 ";

          $run_slides= mysqli_query($con,$get_s);

          while ($row_slides=mysqli_fetch_array($run_slides)) {
            # code...

            $slide_name= $row_slides['slide_name'];


            $slide_image= $row_slides['slide_image'];

          echo "

          <div class='item'>

          <img src='picture/$slide_image' >

          </div>";}

?>
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




			<div class="text-center">
			<br>
		<i class="fas fa-handshake fa-4x" style="color:  #FF8904;"></i>	
<h2 class="main_hed">
<span style="color:red; font-family: serif;">BEST DEALS</span></h2>
				<p style="font-size:15px; font-style:bold; color:#7AEB21;">we have brought the best deals for you! </p>
			</div>
		


<!--  emi table            ##########-->

<div class="container">
  
<div class="col-md-4">

<h2 style="font-family: Arial; text-align:center; ">12 month</h2>
  <div style="background-color: #304DE1; height:50px; border-style: solid;"></div>
<h1 style="  font-family: Roboto;text-align:center; font-size:30px;"> EMI</h1>


</div>

<div class="col-md-4">

<h2 style="font-family: Arial; text-align:center; ">6 month</h2>
  <div style="background-color: #00EB24; height:50px; border-style: solid;"></div>
<h1 style="  font-family: Roboto;text-align:center; font-size:30px;"> EMI</h1>


</div>

<div class="col-md-4">

<h2 style="font-family: Arial; text-align:center; ">3 month</h2>
  <div style="background-color: #EB0047; height:50px; border-style: solid;"></div>
<h1 style="  font-family: Roboto;text-align:center; font-size:30px;"> EMI</h1>


</div>

</div>



<!-- emi table ends############-->
	
<div class='main'>
<div class='row'>	
		<?php    $get_var= "select * from variety";



$run_var=mysqli_query($con,$get_var);

while($row_var=mysqli_fetch_array($run_var))
{
	$var_id=$row_var['var_id'];
	
$s_rate=$row_var['s_rate'];
$var_img=$row_var['var_img'];
		
		
echo "		


  <div class='column cars col-6 col-md-3'>
    <div class='content'>
      <a href='buy.php?var_id=$var_id' style='text-decoration:none;'><img src='picture/$var_img'  style='width:100%'>
      
	  ";

    if($s_rate=='12')
    {
    echo"
      <input type='button' name='col' style='background-color:#304DE1; width:100% '>
   ";}

   if($s_rate=='6')
    {
    echo"
      <input type='button' name='col' style='background-color: #00EB24; width:100% '>
   ";}
   if($s_rate=='3')
    {
    echo"
      <input type='button' name='col' style='background-color:#EB0047; width:100% '>
   ";
 }

 echo " </div>
  </div>
  ";  
  

}
 ?>

 
 </div>

 
  
  </div>

<!-- END MAIN -->



<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>
<?php
include("footer.php");?>
</body>
</html>

