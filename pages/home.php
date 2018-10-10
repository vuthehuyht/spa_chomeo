j<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="library/animate_css/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
	.thumbnail{
		text-align: center;
	}
	.text{
		font-size: 30px;
		margin-top: 10px;
		color: #FFFFFF;
	}
	.slider {
		margin: 0 auto;
	}
	.title {
		text-align: center;
		margin-top: 50px;
	}
	.slick-dots li button:before {
		font-size: 20px;
	}
	.slider img {
		background: #fff;
		color: #3498db;
		font-size: 36px;
		line-height: 100px;
		margin: auto;
		padding: 2%;
		position: relative;
		text-align: center;
		height: 100%;
	}
	.slider p {
		background: #fff;
		color: #000;
		font-size: 20px;
		position: relative;
		text-align: center;
		height: 100%;
		opacity: 0.6;
	}
	.center .slick-center img {
		-moz-transform: scale(1.2);
		-ms-transform: scale(1.2);
		-o-transform: scale(1.2);
		-webkit-transform: scale(1.2);
		color: #e67e22;
		opacity: 1;
		transform: scale(1.2);
		transition: all 300ms ease;
	}

	.center img {
		opacity: 0.7;
		-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);transition: all ease 300ms;
	}
	.center .slick-center p {
		-moz-transform: scale(1.2);
		-ms-transform: scale(1.2);
		-o-transform: scale(1.2);
		-webkit-transform: scale(1.2);
		color: #ff7e00;
		opacity: 1;
		transform: scale(1.2);
	}

	.center p {
		transition: all 300ms ease;
	}
	.slider span {
		background: #fff;
		color: #000;
		font-size: 14px;
		position: relative;
		text-align: center;
		height: 100%;
		opacity: 0.6;
	}
	.center .slick-center span {
		color: #000;
		opacity: 0.9;
		transform: scale(1.5);
	}

	.center span {
		transition: all 300ms ease;
	}
	.center img:hover{
		-webkit-box-shadow: -1px 14px 51px 1px rgba(0,0,0,.75);
		-moz-box-shadow: -1px 14px 51px 1px rgba(0,0,0,.75);
		box-shadow: -1px 14px 51px 1px rgba(0,0,0,.75);
	}
	.dobong{
		-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);
		-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); 
		box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);
		transition: all ease 1s;
		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-o-transition: all 1s ease;
	}
	.dobong:hover{
		transform: scale(1.1,1.1);
		-webkit-transform: scale(1.1,1.1);
		-moz-transform: scale(1.1,1.1);
		-o-transform: scale(1.1,1.1);
		-ms-transform: scale(1.1,1.1);
		transition: all 300ms ease;
	}
</style>
<script>
	new WOW().init();
</script>
<script type="text/javascript">
	$('.carousel').carousel({
		interval: 2000
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.center').slick({
			dots:true,
			centerMode: true,
			centerPadding: '60px',
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
			]
		});
		 //--------------------------------------------
		 $('.autoplay').slick({
		 	dots: true,
		 	slidesToShow: 3,
		 	slidesToScroll: 1,
		 	autoplay: true,
		 	autoplaySpeed: 2000,
		 });
		});
	</script>
</head>
<?php 
include 'pages/lienhe.php';
?>
<body>
	<div class="main" style="background-color: #ffffff;width:100%">
		<div class="container-fuild">
			<div class="container wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="1" style="padding-top: 50px;">
				<center><p><span style="padding: 34px;font-size: 42px;color: #4267b2;font-family:  Courier"> DỊCH VỤ CHĂM SÓC THÚ NUÔI</span></p></center>
				<center><p style="font-size: 14px;color: #3d3d3d">UY TÍN QUÝ HƠN VÀNG</p></center>
				<center><div style="height: 1px;background-color: #000;width: 7%"></div></center>
			</div>
			<div class="slideshow" style="margin-top: 50px;margin-bottom: 50px;width: 100%;height: 50%">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color: #e1e1e1">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row container" style="margin: 0 auto;">
								<div class="col-xs-6 col-sm-3 listbox">
									<center><img class="dobong" src="upload/dichvu/1.png" alt=""  style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/2.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/3.png" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/4.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>						
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row container" style="margin: 0 auto;">
								<div class="col-xs-6 col-sm-3 listbox">
									<center><img class="dobong" src="upload/dichvu/1.png" alt=""  style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/2.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/3.png" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/4.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>						
								</div>
							</div>
						</div>
						<!-- Controls -->
						<div class="container">
							<center><a class="btn btn-success" style="margin-bottom: 50px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">Xem đầy đủ </a></center>
						</div>
					</div>
				</div>
			</div>
			<div class="container wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="1" style="padding-top: 50px;">
				<center><p><span style="padding: 34px;font-size: 42px;color: #ff8300;font-family:  Courier"> SẢN PHẨM DÀNH CHO THÚ NUÔI</span></p></center>
				<center><p style="font-size: 14px;color: #3d3d3d">ĐẢM BẢO CHẤT LƯỢNG</p></center>
				<center><div style="height: 1px;background-color: #000;width: 7%"></div></center>
			</div>
			<div class="slideshow" style="margin-top: 50px;margin-bottom: 50px;width: 100%;height: 50%">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color: #e1e1e1">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row container" style="margin: 0 auto;">
								<div class="col-xs-6 col-sm-3 listbox">
									<center><img class="dobong" src="upload/dichvu/1.png" alt=""  style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/2.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/3.png" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/4.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>						
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row container" style="margin: 0 auto;">
								<div class="col-xs-6 col-sm-3 listbox">
									<center><img class="dobong" src="upload/dichvu/1.png" alt=""  style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/2.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/3.png" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>
								</div>
								<div class="col-xs-6 col-sm-3">
									<center><img class="dobong" src="upload/dichvu/4.jpg" alt="" style="width: 200px;height: 200px;margin-top: 50px;margin-bottom:50px;border-radius: 10px;"></center>						
								</div>
							</div>
						</div>
						<div class="container">
							<center><a class="btn btn-success" style="margin-bottom: 50px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">Xem đầy đủ </a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="1">
		<center><p><span style="padding: 34px;font-size: 42px;color: #4267b2;font-family:  Courier">TIN TỨC MỚI NHẤT</span></p></center>
		<center><div style="height: 1px;background-color: #000;width: 7%;margin-bottom:50px"></div></center>
	</div>
	<div class="slider center container-fuild"  role="toolbar">
		<?php 
				$sql = "select * from news ORDER BY id_news DESC LIMIT 5";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$title = $row["title"];
					$content = $row["content"];
					$url_image = $row["url_image"];
					$time_news =  $row["time_news"];
		 ?>
		<div> 
			<img data-lazy="<?php echo $url_image ?>"  class="img-responsive"  style="height: 220px;width: 100%"/>
			<center><p style="padding-top: 40px;margin-top:0px;word-wrap: break-word;padding: 20px; "><?php echo $title; ?></p></center>
			<i style="opacity: 0.6;font-size: 10px;">Tin túc | Ngày <?php echo date($time_news); ?></i></br>
			<span><?php echo $content ?></span>
		</div>
		<?php } ?>
	</div>
	<div class="container-fuild" style="background-color: #ecf7f6;margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1"  class="col-sm-6 col-md-4 wow zoomIn" style="margin-top: 50px;margin-bottom: 50px;">
					<img src="upload/images/images.jpg" style="width: 100%;height: 30%;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);"/>
					<div style="color: #13bfb1;font-size: 30px;padding-top: 10px;">Việt Nam Spa Pet</div>
					<div style="font-size: 20px;color: #626262">Trung tâm chăm sóc thú nuôi với sự mệnh chăm sóc vật nuôi luôn sạch sẽ và khỏe mạnh.Chúng tôi đưa ra những dịch vụ chăm sóc đảm bảo chất lượng cao cho thú cưng của bạn.</div>
				</div>
				<div data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" class="col-sm-6 col-md-4 wow zoomIn" style="background-color: #FFFFFF;margin-top: 50px;margin-bottom: 50px;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);">
					<div style="font-size: 30px;padding:30px">Giờ làm việc</div>
					<div style="font-size: 20px;padding-left:30px;">Chúng tôi luôn sẵn sàng có mặt để phục vụ và chăm sóc vật nuôi của bạn</div>
					<div style="border-bottom: 2px dotted #b7b7b7;">
						<div style="text-align: center;background-color: #f8f8f8;width: 50%;margin: 0 auto;height: 40px;font-size: 20px;padding: 5px;border-radius: 10px;margin-top: 30px;">Thứ 2 - Thứ 6</div>
						<div style="text-align: center;padding: 10px;color: #13bfb1;font-weight: bold;font-size: 25px">8h - 16h</div>
					</div>
					<div>
						<div style="text-align: center;background-color: #f8f8f8;width: 50%;margin: 0 auto;height: 40px;font-size: 20px;padding: 5px;border-radius: 10px;margin-top: 30px;">Thứ 7</div>
						<div style="text-align: center;padding: 10px;color: #13bfb1;font-weight: bold;font-size: 25px">8h - 15h</div>
					</div>
				</div>
				<div data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" class="col-sm-6 col-md-4 wow zoomIn"  style="background-color: #13bfb1;margin-top:50px;margin-bottom: 50px;margin-left: 10px;width: 30%;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);">
					<div style="font-size: 30px;padding:30px;color: #FFFFFF" style="margin-top: 50px;margin-bottom: 50px;">Liên hệ</div>
					<table style="margin-left: 30px;margin-bottom: 50px;" cellspacing="5px" cellpadding="5px">
						<tr style="margin-bottom: 20px;">
							<td class="glyphicon glyphicon-earphone" style="font-size: 20px;padding: 10px;"></td>
							<td style="padding-left: 20px;color: #FFFFFF">0165.991.6555</td>
						</tr>
						<tr style="margin-bottom: 20px;">
							<td class="glyphicon glyphicon-envelope" style="font-size: 20px;padding: 10px;"></td>
							<td style="padding-left: 20px;color: #FFFFFF">okkemdau@gmail.com</td>
						</tr>
						<tr style="margin-bottom: 20px;">
							<td class="glyphicon glyphicon-tags" style="font-size: 20px;padding: 10px;"></td>
							<td style="padding-left: 20px;color: #FFFFFF">http://www.spachome.com.vn</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fuild">
		<div class="container wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-wow-iteration="1">
			<div style="text-align: center;margin-top: 50px;color: #757575;font-size: 20px;">TẠI SAO NÊN ĐẾN VỚI CHÚNG TÔI?</div>
			<div style="text-align: center;margin-top: 10px;color: #14bfb1;font-size: 40px;border-bottom:1px solid #9e9e9e;padding-bottom: 50px;">Hãy Đến Với SPA Chó Mèo Để Chăm Sóc Cho Thú Cưng Một Cách Tốt Nhất</div>
		</div>
		<div class="container" style="margin-top: 50px;margin-bottom: 50px;">
			<div class="row">
				<div  data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" class="col-sm-6 col-md-4 wow bounceIn">
					<table>
						<tr>
							<td><img src="upload/icons/icon-1.png" style="width: 70px;height: 65px;"></td>
							<td>
								<div style="padding-left: 20px;font-size: 25px;font-weight: bold">Bác Sĩ</div>
								<div style="padding-left: 20px;padding-top: 10px;font-size: 18px;color: #6c6c6c">Đội ngũ Bác Sĩ có trình độ chuyên môn cao -  nhiều kinh nghiệm đảm bảo thú cưng của bạn được tốt nhất</div>
							</td>
						</tr>
					</table>
				</div>
				<div  data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" class="col-sm-6 col-md-4 wow bounceIn">
					<table>
						<tr>
							<td><img src="upload/icons/icon-2.png" style="width: 70px;height: 65px;"></td>
							<td>
								<div style="padding-left: 20px;font-size: 25px;font-weight: bold"> Thời Gian Khám Nhanh </div>
								<div style="padding-left: 20px;padding-top: 10px;font-size: 18px;color: #6c6c6c">Với đội ngũ đông đảo và chuyên nghiệp. Bạn sẽ không phải chờ đợiquá lâu để đảm bảo cho thú cững của mình</div>
							</td>
						</tr>
					</table>
				</div>
				<div  data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" class="col-sm-6 col-md-4 wow bounceIn">
					<table>
						<tr>
							<td><img src="upload/icons/icon-3.png" style="width: 70px;height: 65px;"></td>
							<td>
								<div style="padding-left: 20px;font-size: 25px;font-weight: bold">Chi Phí Hợp Lý</div>
								<div style="padding-left: 20px;padding-top: 10px;font-size: 18px;color: #6c6c6c">Những định vụ đã được thiết kế với chi phí hoàn toàn phù hợp với nhu cầu vật nuôi của bạn</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fuild" style="background-color: #13bfb1;">
		<div class="container">
			<div class="col-xs-12 col-md-8 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">
				<div style="text-align: center;color: #FFFFFF;font-size: 31px;padding-top: 50px;padding-bottom:50px;"> Bạn muốn thú cưng của mình được chăm sóc tốt nhất?Hãy đăng ký cho chúng tôi</div>
			</div>
			<div class="col-xs-6 col-md-4 wow bounceInRight" style="margin-bottom: 50px;" data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1">
				<button type="button" style="width: 150px;height: 40px;border: none;background-color: #f7f7f7;border-radius: 10px;text-align: center;margin-top: 75px;">Đặt lịch ngay <span class="glyphicon glyphicon-pencil"></span></button>
			</div>
		</div>
	</div>
	<div class="container-fuild">
		<div class="container">
			<center><img class="col-xs-12 col-sm-6 col-md-12 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" src="upload/home/heart.png"/></center>
		</div>
	</div>
</div>
</body>
</html>