<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>

<div class="topnav  hidden-xs" id="myTopnav" style="background:#9513CA;  position:sticky; top:0px; z-index: 9999;">

<div class=" col-md-5">
  <a href="index.php" class="active"style=";">Home</a>
 
  <a href="deals.php">Deals</a>
  <?php  
if(!isset($_SESSION['email'])){
	
	
	
	echo" <a href='login.php'>Login</a>";
}

else
{  echo" <a href='logout.php'>Logout</a>";}?>
  
    <a href="register.php">Register</a>



  
  </div>

<div>
  <i class="fa fa-search-plus " style=" margin-left:490px ;color:solid black; font-size: 25px;position: relative; "aria-hidden="true";>
  <input  placeholder="write here" type="text" name="search"   style="border-style: solid; width:190px; border-radius: 20px; height: 42px;">
  
</i>
</div>

   <!--<div style="margin-left: 130px;">
  <form  method="get" action="search.php">
<div class=" row  hidden-xs" >
  <div class="col-md-2">
    <input type="text" name="key" placeholder="What are you looking for?"></div>
    <div class="col-md-1"><input type="button" name="search" value="search">
  </div>
 </div>
  </form>
</div>
-->
</div>









<!--mobile view header-->






<div class="visible-xs" id="mobile" style="background-color: #250137; position:sticky; top:0px; z-index: 9999;">
<div class=" row">
<div class="col-4">
<i class="fa fa-align-justify fa-3x"  style="color:#FFBD00" style="background-color:#250137; border:solid #250137" id="r" data-toggle="collapse" data-target="#go" style="background-color:#250137; border:solid #250137; "></i> <i class="fa fa-window-close fa-3x  collapse"  id="5" style="color:#FFBD00" ></i>
</div>
<script>
	

$(document).ready(function(){
$("#r").click(function(){
   
  $("#r").hide();
  $("#go").show();
    $("#5").show();
  });
});

  

$(document).ready(function(){
$("#5").click(function(){
   
  $("#go").hide();
  $("#5").hide();
    $("#r").show();
	 
  });
});




</script>
<div class=" col-4">


</div>
  
    <div class="col-2 pendu">
	 
 <a href="deals.php" style="text-decoration:none;" ><i class=" fa fa-handshake fa-2x" style="margin-left:5px;   color:#FFBD00;"></i>

    <br><p style=" color:white; font-size:11px; ">Deals</p>

  </a>
    </div>
	
    <div class="col-2 pendu">
	 
 <a href="login.php" style="text-decoration:none;" ><i class=" fas fa-sign-in-alt fa-2x" style="margin-left:3px;   color:#FFBD00;"></i>

    <br><p style=" color:white; font-size:11px; ">Login</p>

  </a>
    </div>
	
 </div>
   <form  method="get" action="search.php">
<div class="row">
    <div class="col-7"><input type="text" name="key" style="width:400px;" class="input1" placeholder="What are you looking for?">
   </div><div class="col-5"><input type="button"  name="search" value="search" class="close-btn1">
  </div></div></form>
<ul class="menu collapse" id="go">
<li> <a href="index.php"  class="btn-block deco" style="color:white text-decoration:none;">Home</a></li>

<li><a href="#about" class="btn-block deco" style="color:white"> Deals</a></li>

<li><a href="#about" class="btn-block deco"style="color:white"> Login</a></li>
<li><a href="register.php" class="btn-block deco"style="color:white"> </a></li>
</ul>
</div>









<!--mobile view header Ends-->














<br>



