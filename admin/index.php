<?php 
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta charset="utf-8">
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
	<script type="text/javascript">
	//cố định menu
	jQuery(document).ready(function($) {
		var $filter = $('.nav-kill');
		var $filterSpacer = $('<div />', {
			"class": "vnkings-spacer",
			"height": $filter.outerHeight()
		});
		if ($filter.size())
		{
			$(window).scroll(function ()
			{
				if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top)
				{
					$filter.before($filterSpacer);
					$filter.addClass("fix");
				}
				else if ($filter.hasClass('fix')  && $(window).scrollTop() < $filterSpacer.offset().top)
				{
					$filter.removeClass("fix");
					$filterSpacer.remove();
				}
			});
		}

	});
</script>
<script type="text/javascript">
	//cố định menu
	jQuery(document).ready(function($) {
		var $filter = $('.nav-kill1');
		var $filterSpacer = $('<div />', {
			"class": "vnkings-spacer",
			"height": $filter.outerHeight()
		});
		if ($filter.size())
		{
			$(window).scroll(function ()
			{
				if (!$filter.hasClass('fix1') && $(window).scrollTop() > $filter.offset().top)
				{
					$filter.before($filterSpacer);
					$filter.addClass("fix1");
				}
				else if ($filter.hasClass('fix1')  && $(window).scrollTop() < $filterSpacer.offset().top)
				{
					$filter.removeClass("fix1");
					$filterSpacer.remove();
				}
			});
		}

	});
</script>
<style type="text/css">
.nav-kill.fix {
	position: fixed;
	top: 0px;
	left: 0px;
	z-index: 1000;
	opacity: .97;
	max-width: 100%;
	width: 100%;
}
.nav-kill1.fix1 {
	position: fixed;
	top: 50px;
	left: 0px;
	z-index: 100;
	opacity: .97;
	max-width: 100%;
}
.link{
	color: #FFFFFF;
}
<?php 
include("connection.php");
$sql = "select * from admin";

$kt = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($kt)) {
	if($_SESSION['admin'] == $row['username']){
		$name = $row['name'];
	}
}
?>
</style>
</head>
<body>
	<?php 
	if (isset($_SESSION['admin']) && $_SESSION['admin']){?>
	<div class="container-fluid">
		<nav class="navbar navbar-default fix nav-kill"  role="navigation">
			<div class="container-fluid" style="background-color: #23282d">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse col-sm-2 col-md-2" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a style="color: #FFFFFF" href="../index.php">Trang chủ/SPa Chó Mèo</a></li>
						<li>
							<?php
							if(isset($_GET['tieude']) == 'home'){
									echo '<span class="glyphicon glyphicon-home" style="padding-top:15px;color: #FFFFFF"></span><span style="padding-top:15px;color: #FFFFFF">   Trang chủ</span>';
								}
								if(isset($_GET['tieude']) == 'tintuc'){
									echo '<span class="glyphicon glyphicon-pencil" style="padding-top:15px;color: #FFFFFF"></span><span style="padding-top:15px;color: #FFFFFF">   Quản lý tin tức</span>';
								}
								else if(isset($_GET['tieude']) == 'lienhe'){
									echo '<span class="glyphicon glyphicon-earphone" style="padding-top:15px;color: #FFFFFF"></span><span style="padding-top:15px;color: #FFFFFF">   Quản lý tin tức</span>';
								}
                                                                else if(isset($_GET['tieude']) == 'gioithieu'){
									echo '<span class="glyphicon glyphicon-earphone" style="padding-top:15px;color: #FFFFFF"></span><span style="padding-top:15px;color: #FFFFFF">   Quản lý giới thiệu</span>';
								}
                                                                else if(isset($_GET['tieude']) == 'dichvu'){
									echo '<span class="glyphicon glyphicon-earphone" style="padding-top:15px;color: #FFFFFF"></span><span style="padding-top:15px;color: #FFFFFF">   Quản lý dịch vụ</span>';
								}
								?>	
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color: #FFFFFF" href="#"><?php echo $name; ?></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="glyphicon glyphicon-chevron-right" style="position: absolute;top: 500px;left: 0px"></div>
		<div class="list-group col-sm-2 col-md-2 fix1 nav-kill1" style="background-color: #32373c;height:660px;width: 200px">
			<ul class="nav nav-pills nav-stacked">
				<li class="active" style="border: 0px;"><a class="link" href="#"><span class=""></span> Danh mục</a></li>
				<li><a class="link" id='home' href="index.php?page=home&&tieude=home"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
				<li><a class="link"  id='tintuc' href="index.php?page=tintuc&&tieude=tintuc"><span class="glyphicon glyphicon-pencil"></span> Quản lý tin tức</a></li>
				<li><a class="link" id='sanpham' href="index.php?page=hienthi&&tieude=hienthi"><span class="glyphicon glyphicon-tags"></span> Quản lý sản phẩm</a></li>
				<li><a class="link" id='lienhe' href="index.php?page=lienhe&&tieude=lienhe"><span class="glyphicon glyphicon-earphone"></span> Quản lý liên hệ</a></li>
				<li><a class="link" id='gioithieu' href="index.php?page=gioithieu&&tieude=gioithieu"><span class="glyphicon glyphicon-earphone"></span> Quản lý giới thiệu</a></li>
                                <li><a class="link" id='gioithieu' href="index.php?page=dichvu&&tieude=dichvu"><span class="glyphicon glyphicon-earphone"></span> Quản lý dịch vụ</a></li>
				<li><a class="link" id='donhang' href="index.php?page=donhang&&tieude=donhang"><span class="glyphicon glyphicon-shopping-cart"></span> Quản lý đơn hàng</a></li>
				<li><a class="link" id='khachhang' href="index.php?page=khachhang&&tieude=khachhang"><span class="glyphicon glyphicon-lock"></span> Khách hàng</a></li>
				<li><a class="link" id='taikhoan' href="index.php?page=taikhoan&&tieude=taikhoan"><span class="glyphicon glyphicon-user"></span> Quản lý tài khoản</a></li>
				<li><a class="link" id='taikhoan' href="index.php?page=taikhoan&&tieude=taikhoan"><span class="glyphicon glyphicon-plus"></span>Thêm tài khoản admin</a></li>
			</ul>
		</div>
		<div class="col-md-10 col-sm-10" style="">
			<?php 
			if(isset($_GET["page"])){
				$page = $_GET["page"];
				switch($page){
					case "tintuc":
					require_once("pages/tintuc.php");
					break;
					case "home":
					require_once("pages/home.php");
					break;
					case "logout":
					require_once("pages/logout.php");
					break;
					default;
					case "addtintuc":
					require_once("pages/addtintuc.php");
					break;
                                        
					case "suatintuc":
					require_once("pages/suatintuc.php");
					break;
					case "xoatintuc":
					require_once("pages/xoatintuc.php");
					break;
					case "gioithieu":
					require_once("pages/gioithieu.php");
					break;
                                        case "dichvu":
                                            require_once("pages/dichvu.php");
                                            break;
                                        case "xoa_dichvu":
                                            require_once("pages/xoa_dichvu.php");
                                            break;
                                        case "sua_dichvu":
                                            require_once("pages/sua_dichvu.php");
                                            break;
                                        case "suagioithieu":
                                            require_once("pages/suagioithieu.php");
                                            break;
                                        case "sua_gioithieu":
                                            require_once("pages/sua_gioithieu.php");
                                            break;
					case "lienhe":
					require_once("pages/lienhe.php");
					break;
					
				}
			}
			else{
				header('location:index.php?page=home&&tieude=home');
			}
			?>
		</div>
	</div>
	<?php
}else{
	header('location:index.php');
} 
ob_flush();
?>
</body>
</html>