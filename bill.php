

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

<style>



.congrats {
	position: absolute;
	top: 140px;
	width: 550px;
	height: 100px;
	padding: 20px 10px;
	text-align: center;
	margin: 0 auto;
	left: 0;
	right: 0;
}

h1 {
	transform-origin: 50% 50%;
	font-size: 50px;
	font-family: 'Sigmar One', cursive;
	cursor: pointer;
	z-index: 2;
	position: absolute;
	top: 0;
	text-align: center;
	width: 100%;
}

.blob {
	height: 50px;
	width: 50px;
	color: #ffcc00;
	position: absolute;
	top: 45%;
	left: 45%;
	z-index: 1;
	font-size: 30px;
	display: none;	
}





</style>





<div class="container">


<div class="congrats">
	<h1>Congratulations!</h1>
</div>

</div>

<script>



// Click "Congratulations!" to play animation

$(function() {
	var numberOfStars = 20;
	
	for (var i = 0; i < numberOfStars; i++) {
	  $('.congrats').append('<div class="blob fa fa-star ' + i + '"></div>');
	}	

	animateText();
	
	animateBlobs();
});

$('.congrats').click(function() {
	reset();
	
	animateText();
	
	animateBlobs();
});

function reset() {
	$.each($('.blob'), function(i) {
		TweenMax.set($(this), { x: 0, y: 0, opacity: 1 });
	});
	
	TweenMax.set($('h1'), { scale: 1, opacity: 1, rotation: 0 });
}

function animateText() {
		TweenMax.from($('h1'), 0.8, {
		scale: 0.4,
		opacity: 0,
		rotation: 15,
		ease: Back.easeOut.config(4),
	});
}
	
function animateBlobs() {
	
	var xSeed = _.random(350, 380);
	var ySeed = _.random(120, 170);
	
	$.each($('.blob'), function(i) {
		var $blob = $(this);
		var speed = _.random(1, 5);
		var rotation = _.random(5, 100);
		var scale = _.random(0.8, 1.5);
		var x = _.random(-xSeed, xSeed);
		var y = _.random(-ySeed, ySeed);

		TweenMax.to($blob, speed, {
			x: x,
			y: y,
			ease: Power1.easeOut,
			opacity: 0,
			rotation: rotation,
			scale: scale,
			onStartParams: [$blob],
			onStart: function($element) {
				$element.css('display', 'block');
			},
			onCompleteParams: [$blob],
			onComplete: function($element) {
				$element.css('display', 'none');
			}
		});
	});
}







</script>




<br><BR>





</div>


<div>

<!--footer-start-->
	<?php
		include("footer.php");
	?>
	<!-- footer-Ends -->

</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom_script.js"></script>

</body>
</html>