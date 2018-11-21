<!DOCTYPE html>
<html>
<head>
	<title>Navigation Animation Test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">
		body{
			max-height:100%;
			max-width:100%;
		}
		#navbar{
			padding:15% 1% 15% 1%;
			background-color: white;
			top:0;
			left:0;
			z-index: 99;
			width:100%;
			position:fixed;

		}
		#logo{
			height:100%;
			width:80%;
			transition: all 0.5s;
			display:block;
			margin-left: auto;
			margin-right: auto;
		}
		.dummy{
			display:block;
			margin-left: auto;
			margin-right: auto;
			height:100%;
			width:100%;
			max-width: 100%
		}
		#images{
			position: relative;
		}
		#pic{
			margin: 10px;
		}
	</style>
</head>
<body>
	<!-- Navbar Start -->
	<div class="col-sm-4" id="navbar">
		<img src="../img/logo.png" class="logo" id="logo">
	</div>
	<!-- Navbar End -->
	<div class="row">
		<div class="col-xs-12" id="images">
			<?php
				for($i=0;$i<160;$i++)
				{
					echo('<div class="col-xs-3"><img class="dummy" id="pic" src="../img/black.png"></div>');
				}
			?>
		</div>
	</div>

<script type="text/javascript">
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
	  if (document.documentElement.scrollTop > 200) {
	  	document.getElementById("logo").style.transform = "scale(0.25) translate(-190%,-150%)";
	  	document.getElementById("navbar").style.maxHeight = "20%";
	    document.getElementById("navbar").style.padding = "10px";
	    document.getElementById("navbar").style.backgroundColor = "white";
	    document.getElementById("logo").style.transition = "transform 0.25s";
	    document.getElementById("navbar").style.transition = "padding 1s linear";
	  } else {
	    document.getElementById("logo").style.width = "80%";
	    document.getElementById("navbar").style.padding = "15% 1% 15% 1%";
	    document.getElementById("logo").style.transform = "translate(0px,0px)";
	    document.getElementById("navbar").style.maxHeight = "100%";
	    document.getElementById("navbar").style.backgroundColor = "white";

	  }
	}
</script>

</body>
</html>