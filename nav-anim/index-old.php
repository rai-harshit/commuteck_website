<!DOCTYPE html>
<html>
<head>
	<title>Navigation Animation Test</title>

<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">
		body{
			height:100%;
			width:100%;
			transition:all 100s;
		}
		#navbar{
			padding:12% 1% 12% 1%;
			background-color: lightblue;
			top:0;
			left:0;
			z-index: 99;
			width:100%;
			position:fixed;
		}
		img{
			display:block;
			margin-left: auto;
			margin-right: auto;
			height:100%;
			width:100%;
			max-width: 100%
		}
		#pic{
			margin:10px;
		}
		#images{

			position: relative;
		}
	</style>
	<script type="text/javascript">
		window.onload = function(){
			console.log("JS is Cool");
		}
	</script>
</head>
<body>
	<!-- Navbar Start -->
	<div class="navbar" id="navbar">
		<div class="" id="logo">
			<img src="../img/logo.png">
		</div>
	</div>
	<!-- Navbar End -->
	<div class="row">
		<div class="col-xs-12" id="images">
			<?php
				for($i=0;$i<160;$i++)
				{
					echo('<div class="col-xs-3"><img id="pic" src="../img/black.png"></div>');
				}
			?>
		</div>
	</div>

<script type="text/javascript">
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
	  if (document.documentElement.scrollTop > 200) {
	    // document.getElementById("logo").style.transform = "scale(0.25)";
	    document.getElementById("logo").style.width = "15%";
	    document.getElementById("navbar").style.padding = "5px";
	    document.getElementById("navbar").style.transition = "padding 0.3s";
	    document.getElementById("logo").style.height = "100%";

	  } else {
	    document.getElementById("logo").style.width = "100%";
	    document.getElementById("navbar").style.padding = "12% 1% 12% 1%";
	    // document.getElementById("logo").style.transform = "scale(1)";
	  }
	}
</script>

</body>
</html>