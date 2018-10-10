<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	.thumbnail{
		-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);
		-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); 
		box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);
	}
	.like:hover{
		background-color:#f1f1f1;
	}
	.mystyle{
		color:#2e6da4;
	}
	.nav-kill-fix{
		position: fixed;
		z-index: 1000;
		max-width: 100%;
		right: 25px;
		bottom: 10px;
		width: 100px;
		height: 100px;
	}
	.phonering-alo-phone.phonering-alo-static {
		opacity:.6
	}

	.phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {
		opacity:1
	}

	.phonering-alo-ph-circle {
		width:160px;
		height:160px;
		top:-30px;
		left:-30px;
		position:absolute;
		background-color:transparent;
		border-radius:100% !important;
		border:2px solid rgba(30,30,30,0.4);
		border:2px solid #bfebfc 9;
		opacity:.1;
		-webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
		animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
		transition:all .5s;
		-webkit-transform-origin:50% 50%;
		-ms-transform-origin:50% 50%;
		transform-origin:50% 50%
	}

	.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
		-webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
		animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important
	}

	.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
		-webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
		animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
	}

	.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
		border-color:#00aff2;
		opacity:.5
	}

	.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
		border-color:#75eb50 ;
		border-color:#baf5a7;
		opacity:.5
	}

	.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
		border-color:#00aff2 ;
		border-color:#bfebfc;
		opacity:.5
	}

	.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
		border-color:#ccc;
		opacity:.5
	}

	.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
		border-color:#75eb50 ;
		opacity:.5
	}

	.phonering-alo-ph-circle-fill {
		width:100px;
		height:100px;
		position:absolute;
		background-color: #000;
		border-radius:100% !important;
		border:2px solid transparent;
		-webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		transition:all .5s;
		-webkit-transform-origin:50% 50%;
		-ms-transform-origin:50% 50%;
		transform-origin:50% 50%
	}

	.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
		-webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
		animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important
	}

	.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
		-webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
		animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
		opacity:0!important
	}

	.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
		background-color:rgba(0,175,242,0.5);
		background-color:#00aff2 9;
		opacity:.75!important
	}

	.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
		background-color:rgba(117,235,80,0.5);
		background-color:#baf5a7 9;
		opacity:.75!important
	}

	.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
		background-color:rgba(0,175,242,0.5);
		background-color:#a6e3fa 9
	}

	.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
		background-color:rgba(204,204,204,0.5);
		background-color:#ccc 9;
		opacity:.75!important
	}

	.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
		background-color:rgba(117,235,80,0.5);
		opacity:.75!important
	}

	.phonering-alo-ph-img-circle {
		width:60px;
		height:60px;
		top:20px;
		left:20px;
		position:absolute;
		border-radius:100% !important;
		border:2px solid transparent;
		-webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
		animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
		-webkit-transform-origin:50% 50%;
		-ms-transform-origin:50% 50%;
		transform-origin:50% 50%
	}

	.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
		-webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
		animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
	}

	.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
		-webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
		animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
	}

	.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
		background-color:#00aff2
	}

	.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
		background-color:#75eb50;
		background-color:#75eb50 9
	}

	.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
		background-color:#00aff2;
		background-color:#00aff2 9
	}

	.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
		background-color:#ccc
	}

	.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
		background-color:#75eb50
	}

	@-webkit-keyframes phonering-alo-circle-anim {
		0% {
			-webkit-transform:rotate(0) scale(.5) skew(1deg);
			-webkit-opacity:.1
		}

		30% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			-webkit-opacity:.5
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			-webkit-opacity:.1
		}
	}

	@-webkit-keyframes phonering-alo-circle-fill-anim {
		0% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			opacity:.2
		}

		100% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}
	}

	@-webkit-keyframes phonering-alo-circle-img-anim {
		0% {
			-webkit-transform:rotate(0) scale(1) skew(1deg)
		}

		10% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg)
		}

		20% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg)
		}

		30% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg)
		}

		40% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg)
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg)
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg)
		}
	}

	@-webkit-keyframes fadeInRight {
		0% {
			opacity:0;
			-webkit-transform:translate3d(100%,0,0);
			-ms-transform:translate3d(100%,0,0);
			transform:translate3d(100%,0,0)
		}

		100% {
			opacity:1;
			-webkit-transform:none;
			-ms-transform:none;
			transform:none
		}
	}

	@keyframes fadeInRight {
		0% {
			opacity:0;
			-webkit-transform:translate3d(100%,0,0);
			-ms-transform:translate3d(100%,0,0);
			transform:translate3d(100%,0,0)
		}

		100% {
			opacity:1;
			-webkit-transform:none;
			-ms-transform:none;
			transform:none
		}
	}

	@-webkit-keyframes fadeOutRight {
		0% {
			opacity:1
		}

		100% {
			opacity:0;
			-webkit-transform:translate3d(100%,0,0);
			-ms-transform:translate3d(100%,0,0);
			transform:translate3d(100%,0,0)
		}
	}

	@keyframes fadeOutRight {
		0% {
			opacity:1
		}

		100% {
			opacity:0;
			-webkit-transform:translate3d(100%,0,0);
			-ms-transform:translate3d(100%,0,0);
			transform:translate3d(100%,0,0)
		}
	}

	@-webkit-keyframes phonering-alo-circle-anim {
		0% {
			-webkit-transform:rotate(0) scale(.5) skew(1deg);
			transform:rotate(0) scale(.5) skew(1deg);
			opacity:.1
		}

		30% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.5
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg);
			opacity:.1
		}
	}

	@keyframes phonering-alo-circle-anim {
		0% {
			-webkit-transform:rotate(0) scale(.5) skew(1deg);
			transform:rotate(0) scale(.5) skew(1deg);
			opacity:.1
		}

		30% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.5
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg);
			opacity:.1
		}
	}

	@-webkit-keyframes phonering-alo-circle-fill-anim {
		0% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg);
			opacity:.2
		}

		100% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}
	}

	@keyframes phonering-alo-circle-fill-anim {
		0% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg);
			opacity:.2
		}

		100% {
			-webkit-transform:rotate(0) scale(.7) skew(1deg);
			transform:rotate(0) scale(.7) skew(1deg);
			opacity:.2
		}
	}

	@-webkit-keyframes phonering-alo-circle-img-anim {
		0% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}

		10% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg);
			transform:rotate(-25deg) scale(1) skew(1deg)
		}

		20% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg);
			transform:rotate(25deg) scale(1) skew(1deg)
		}

		30% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg);
			transform:rotate(-25deg) scale(1) skew(1deg)
		}

		40% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg);
			transform:rotate(25deg) scale(1) skew(1deg)
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}
	}

	@keyframes phonering-alo-circle-img-anim {
		0% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}

		10% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg);
			transform:rotate(-25deg) scale(1) skew(1deg)
		}

		20% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg);
			transform:rotate(25deg) scale(1) skew(1deg)
		}

		30% {
			-webkit-transform:rotate(-25deg) scale(1) skew(1deg);
			transform:rotate(-25deg) scale(1) skew(1deg)
		}

		40% {
			-webkit-transform:rotate(25deg) scale(1) skew(1deg);
			transform:rotate(25deg) scale(1) skew(1deg)
		}

		50% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}

		100% {
			-webkit-transform:rotate(0) scale(1) skew(1deg);
			transform:rotate(0) scale(1) skew(1deg)
		}
	}
	.nav-kill-fix .blog {
		visibility: hidden;
		width: 120px;
		background-color: black;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 5px 0;
		position: absolute;
		z-index: 1;
		bottom: 150%;
		left: 50%;
		margin-left: -60px;
		top: -35px;
		padding-bottom: 30px;
	}

	.nav-kill-fix .blog::after {
		content: "";
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: black transparent transparent transparent;
	}

	.nav-kill-fix:hover .blog {
		visibility: visible;
	}
	.arrow-up {
		position: absolute;
		width:0px;
		height:0px;
		top: 30px;
		left: 40px;
		border-left:10px solid transparent;
		border-right:10px solid transparent;
		border-bottom:10px solid #FFF; /* Tam giác phía dưới được đổ màu */
	}
	.inputfile {
		width: 0.1px;
		height: 0.1px;
		opacity: 0;
		overflow: hidden;
		position: absolute;
		z-index: -1;
	}
	.inputfile + label {
		font-size: 12px;
		background-color: #e9ebee;
		display: inline-block;
		cursor: pointer;
		padding: 5px;
		color: #3d3d3d;
		border-radius: 100px;
		font-weight: 100;
	}
</style>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("mylike").classList.toggle("mystyle");
		document.getElementById("btn-like").classList.toggle("mystyle");
	}
</script>
<script type="text/javascript">
	<input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />

	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});
</script>
</style>
</head>
<?php 
include("connection.php");
$sql = "select * from users";

$kt = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($kt)) {
	if(isset($_SESSION['username'])){
		if($_SESSION['username'] == $row['username']){
			$id = $row['id_users'];
			$name = $row['fullname'];
			$email = $row['email'];
			$phone= $row['phone_number'];
		}
	}
}
?>
<?php 
	if(isset($_SESSION['username']) && $_SESSION['username']){
 ?>
<body style=" font-family: arial;">
	<div class="container-fluid" style="background-color: #f1f1f1;">
		<div class="container">
			<div style="margin-top: 50px">
				<?php
				$sql = "select * from blog,users,blog_comment where blog.id_users = users.id_users";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$content = $row["content"];
					$id_blog = $row["id_blog"];
					$url_image = $row["url_image"];
					$time =  $row["time"];
					$name_blog = $row['fullname'];
					date_default_timezone_set("Asia/Ho_Chi_Minh");
					$times = date("Y-m-d H:i:s");
					$timesss =strtotime($times)- strtotime($time);
					echo'
					<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
					<div style="margin-top: 10px;margin-left: 10px">
					<div style="float: left;"><a href="#"><img src="'.$url_image.'" class="img-responsiv img-circle" alt="Responsive image " style="width: 40px;height: 40px;"></a></div>
					<div style="padding-left: 10px;padding-top: 5px;margin-left: 40px;">
					<p style="color: #365899;cursor: pointer;font-weight: bold;"><a href="#" >'.$name_blog.'</a></p>
					<p style="color:#000;font-size: 10px;margin-top: -10px;opacity: 0.9">
					'.date("i", $timesss).' phút
					</p>
					</div>
					</div>
					<div style="margin-top: 10px;margin-left: 10px">
					<p style="word-wrap: break-word;">'.$content.'</p>
					</div>
					';
					if($url_image == '0'){
						echo '
						<div style="display: none"><a href="#"><img src="'.$url_image.'" class="img-responsiv" alt="Responsive image " style="width: 90%"></a></div>';
					}else{
						echo '
						<div style=""><a href="#"><img src="upload/blog/1.jpg" class="img-responsiv" alt="Responsive image " style="width: 90%"></a></div>';
					}
					echo '
					<div class="caption">
					<div style="margin-top:10px;margin-bottom: 10px;border-bottom: 1px solid #f1f1f1;border-top: 1px solid #f1f1f1;height: 40px">
					<div onclick="myFunction()" class="col-xs-6 like" style="text-align: center;margin-top:5px;height:30px;padding-top: 5px">
					<span class="glyphicon glyphicon-thumbs-up" id="mylike"></span>
					<span id="btn-like">Thích</span>
					</div>
					<div class="col-xs-6 like" style="text-align: center;margin-top:5px;height:30px;padding-top: 5px"><span class="glyphicon glyphicon-comment"></span>  Bình luận</div>
					</div>
					</div>
					<div class="caption" style="margin-top: -15px">
					<div style="float: left;"><a href="#"><img src="upload/blog/1.jpg" class="img-responsiv img-circle" alt="Responsive image " style="width: 30px;height: 30px;"></a></div>
					<div style="padding-left: 10px;margin-left: 25px;">
					<form method="post">
					<textarea cols="25" name = "cmt" rows="1" style="border-radius: 20px;font-size:13px;padding-left: 10px;margin-top: 5px" placeholder="Nhập bình luận của bạn"></textarea>
					<input class="btn btn-primary" style="margin-top: -15px;font-size:10px;" type="submit" name="comment" value="Bình luận">
					</form>
					</div>
					</div>
					<div class="caption" style="margin-top: -10px">
					<div style="float: left;"><a href="#"><img src="upload/blog/1.jpg" class="img-responsiv img-circle" alt="Responsive image " style="width: 30px;height: 30px;"></a></div>
					<div style="padding-left: 10px;margin-left: 25px;">
					<div style="margin-top: 5px;">
					<span style="background-color:#f1f1f1;padding: 7px;font-size:14px;border-radius: 20px;padding-left: 14px;padding-right: 14px;"><a href="#" style="color: #365899;cursor: pointer;font-weight: bold;">Phạm Công Danh</a><span style="padding-left: 5px;">Like</span></span>
					<p style="color:#000;font-size: 10px;opacity: 0.9;padding: 10px;margin-left: 5px;">20 phút.</p>
					</div>
					</div>
					</div>
					</div>
					</div>'
					;
				} ?>
			</div>
		</div>
	</div>
	<div class="nav-kill-fix">
		<span class="blog">Viết bài</span>
		<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
			<div class="phonering-alo-ph-circle"></div>
			<div class="phonering-alo-ph-circle-fill"></div>
			<a href="tel:+84123456789" class="pps-btn-img" title="Liên hệ">
				<div class="phonering-alo-ph-img-circle">
					<button  onclick="document.getElementById('id03').style.display='block'" style="font-size: 25px;padding-left: 15px;padding-top: 15px;color:#FFF;background-color:hsla(0, 100%, 100%, 0.0);border:none"><span class="glyphicon glyphicon-pencil"></span>
					</button>
				</div>
			</a>
		</div>
	</div>
	<div id="id03" class="w3-modal" >
		<div class="w3-modal-content" style="width: 450px">
			<span class="arrow-up"></span>
			<header class="w3-container" style="background-color:#f6f7f9;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom: 1px solid #dddfe2;">
				<span onclick="document.getElementById('id03').style.display='none'" 
				class="w3-button w3-display-topright">&times;</span>
				<h2 style="font-size: 14px;width:50%;float: left">Tạo bài viết <span class="glyphicon glyphicon-pencil"></span></h2>
			</header>
			<form role="form" method="post" enctype="multipart/form-data">
				<div class="w3-container" style="border-bottom: 1px solid #dddfe2;">
					<div style="float: left;"><img src="upload/blog/1.jpg" class="img-responsiv img-circle" alt="Responsive image " style="width: 40px;height: 40px;margin-top: 10px;margin-bottom: 20px;"></div>
					<div>
						<textarea rows="3" name="content" style="border: none;box-sizing: border-box;word-wrap: break-word;width: 90%;overflow:hidden;padding-left: 10px;padding-top: 20px;" placeholder="Bạn đang nghĩ gì?"></textarea>
					</div>
				</div>
				<div class="w3-container" style="border-bottom: 1px solid #dddfe2;padding-top: 10px;padding-bottom: 10px;">
					<input type="file" name="img-blog" id="file" class="inputfile" style="float: left;" />
					<label for="file"><img src="upload/blog/icon-upload.png" style="width: 15px;height: 10px;"> Ảnh/Video</label>
					<button type="submit" class="btn btn-primary" name="btn_submit">Đăng bài</button>
				</div>
			</form>
		</div>
	</div>
	<?php

	if (isset($_POST["btn_submit"])) {
				$content=$_POST["content"];
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$time = date("Y-m-d H:i:s");
				$img=$_FILES['img-blog']['name'];
				if($_FILES['img-blog']['size'] ==""){
					$link_img='0';
				}
				else{
					$link_img='upload/blog/'.$img;
				}
				$sql = "INSERT INTO `blog`(`content`, `url_image`, `time`, `id_users`) VALUES ('$content','$link_img','$time','$id')";
				$result=mysqli_query($conn,$sql);
				move_uploaded_file($_FILES['img-blog']['tmp_name'],'upload/blog/'.$img);
			}
		}else{
			?>
			<script type="text/javascript">
				var r = confirm("Bạn cần phải đăng nhập trước");
				if (r == true) {
					document.getElementById('id01').style.display='block';
				}
				else{
					window.location.href = 'index.php';
				}
			</script>
		<?php }
		?>
	</body>
	</html>