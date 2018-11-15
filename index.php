<?php

$blog_count = 100;

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<title>Blogs</title>
	<style type="text/css">
		body{
			padding-top:10px;
		}
		.col-sm-12{
			border-radius: 25px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.col-sm-12:hover{
			transform: scale(1.1);
			transition: transform .3s;
		}
		.col-sm-4{
			padding:20px;
		}
		.blog-text{
			left:0;
			bottom: 0;
			height:100%;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.blog-art{
			height: 100%;
			border-radius:25px 25px 0 0;
			margin-left: -15px;
			margin-right: -15px;
		}
		img{
			width: 100%;
			height: 100%;
			border-radius: 25px 25px 0 0 ;
		}
		.glyphicon{
			width: 25%;
			left: 0;
			font-size:25px;
			padding-top: 5px;
			padding-right: 25px;
		}
		.read-more{
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="col-md-12">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<?php
			for($i=0;$i<$blog_count;$i++){
				print 
					'
						<div class="col-sm-4">
							<div class="col-sm-12">
								<div class="blog-art">
									<img src="./img/black.png">
								</div>
								<div class="blog-text" style="padding:10px;text-align:center">
									<div class="blog-heading">
										<h4><b>Some Random Heading</b></h4>
									</div>
									<div class="blog-desc">
										<span>This is some random text describing what the blog is all about. We need to keep this short and sweet.</span>
									</div>
									<div class="row" name="blog-popularity">
										<span class="glyphicon glyphicon-heart"></span>
										<span class="glyphicon glyphicon-comment"></span>
										<span class="read-more">
											<a class="read-more-link" href="___enter_page_name_here___"><b>READ MORE</b></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					';
				} 
			?>
		</div>
		<div class="col-sm-1"></div>
	</div>
</body>
</html>