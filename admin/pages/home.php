<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../library/animate_css/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
	#home{
		background-color: #eee;
		color: #23527c;
	}
	}
</style>
<script>
	new WOW().init();
</script>
</head>
<body>
	<div class="container" style="margin-top: 150px;margin-left: 200px;">
		<img class="wow zoomIn" src="../upload/images/hello.jpg" style="margin-left: 125px;" > </br>
		<div class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" style="color: #7f7f7f;font-size: 20px;margin-top: 50px;margin-left: 250px;">Xin chào Admin <?php echo $name ?>!!!!</div>
	</div>
</body>
</html>