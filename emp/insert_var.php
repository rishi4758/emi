
<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12 col-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Insert varities

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"  style="margin-left:0px; font-size:20px;">variety name</label>

<div class="col-md-6">

<input type="text" name="var_name" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->
<div class="row">
<label class="col-md-3 col-3  control-label" style=" font-size:20px;">emi month</label>



<div class="col-md-1 col-2">

<!--<input type="text" name="s_rate" class="    form-control" required>-->

<select name="s_rate" class="    form-control" required>
  

  <option>12</option>
  <option>6</option>
  <option>3</option>
</select>

</div>

<label class="col-md-2 col-2 control-label"  style=" margin-left:4px; font-size:20px;">end rate</label>

<div class="col-md-1 col-2">

<input type="text" name="e_rate" class=" form-control" required>

</div>


</div>
</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"  style="margin-left:0px; font-size:20px;">variety image</label>

<div class="col-md-6">

<input type="file" name="var_img" class="form-control" required>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit"   style="margin-left:0px; font-size:20px; font-family:bold;"name="submit" value="Insert Category" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php

if((isset($_POST['submit']))){
	
	$var_name=$_POST['var_name'];
	$s_rate=$_POST['s_rate'];
	$e_rate=$_POST['e_rate'];
	$var_img=$_FILES['var_img']['name'];
	$img=$_FILES['var_img']['tmp_name'];
	
	move_uploaded_file($img,"../picture/$var_img");

$get_var="insert into variety(var_name,s_rate,e_rate,var_img) values('$var_name','$s_rate','$e_rate','$var_img')";

$run_var=mysqli_query($con,$get_var);



if($run_var){

echo "<script> alert('New Variety has been inserted')</script>";

echo "<script> window.open('index.php','_self') </script>";
}
}
?>