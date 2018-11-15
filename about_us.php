<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<title>About Us</title>
	<style type="text/css">
		img{
			max-width: 100%;
			height:auto;
		}
		h2{
			text-align: center;
		}
		#go_to_top{
			display: inline-block;
			background-color: #FF9800;
			width: 50px;
			height: 50px;
			text-align: center;
			border-radius: 4px;
			position: fixed;
			bottom: 30px;
			right: 30px;
			transition: background-color .3s, 
			opacity .5s, visibility .5s;
			opacity: 0;
			visibility: hidden;
			z-index: 1000;
			text-decoration: none;
		}
		#go_to_top::after {
			content: "\f077";
			font-family: FontAwesome;
			font-weight: normal;
			font-style: normal;
			font-size: 2em;
			line-height: 50px;
			color: #fff;
		}
		#go_to_top:hover {
			cursor: pointer;
			background-color: #333;
		}
		#go_to_top:active {
  			background-color: #555;
		}
		#go_to_top.show {
			opacity: 1;
			visibility: visible;
		}
	</style>
</head>
<body>
	<div class="col-md-12">
		<a id="go_to_top"></a>
		<div class="about_us_navigation">
			<a href="#team">Team</a>
			<a href="#vision">Vision</a>
			<a href="#presence">Presence</a>
			<a href="#sales">Sales</a>
			<a href="#support">Support</a>
		</div>
		<div class="about_us_sec">
			<div class="col-sm-12" id="team">
				<h2><b>The Team</b></h2>
				<img src="./img/team.jpg" alt="commuteck-team" id="team_img">
			</div>
			<div class="col-sm-12" id="vision">
				<h2><b>Vision</b></h2>
				<img src="./img/vision.jpg" alt="commuteck-vision" id="vision_img">
			</div>			
			<div class="col-sm-12" id="presence">
				<h2><b>Presence</b></h2>
				<img src="./img/presence.jpg" alt="commuteck-presence" id="presence_img">
			</div>			
			<div class="col-sm-12" id="sales">
				<h2><b>Sales</b></h2>
				<img src="./img/sales.jpg" alt="commuteck-sales" id="sales_img">
			</div>			
			<div class="col-sm-12" id="support">
				<h2><b>Support</b></h2>
				<img src="./img/support.jpg" alt="commuteck-support" id="support_img">
			</div>						
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script type="text/javascript">
		var btn = $('#go_to_top');
		$(window).scroll(function() {
		  if ($(window).scrollTop() > 300) {
		    btn.addClass('show');
		  } else {
		    btn.removeClass('show');
		  }
		});

		btn.on('click', function(e) {
		  e.preventDefault();
		  $('html, body').animate({scrollTop:0}, '300');
		});
	</script>
</body>
</html>