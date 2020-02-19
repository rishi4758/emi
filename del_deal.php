







<?php

session_start();
 include("include/db.php");


?>
<?php  
$k=$_GET['k'];
echo"$k";
$del1=" DELETE from orch_d where kisan_id='$k'";
$run=mysqli_query($con,$del1);
if($run)
{
	
	
	
	echo "
	<script>alert('deal has been canceled')
	
	
	window.open('deals.php','_self');
</script>";
}






?>