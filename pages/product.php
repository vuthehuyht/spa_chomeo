<!DOCTYPE html>
<html>
<head>
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
</head>
<body style=" font-family: arial;background-color: #f1f1f1">
	<div class="container" style="background-color: #FFF">
		<div style="padding-top: 20px;padding-bottom: 20px;font-style: italic;opacity: 0.9">Trang chủ/Sản phẩm</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<div class="thumbnail" style="background-color: #f2f2ff">
					<table>
						<tr>
							<td><img src="upload/product/thucan.png" style="width: 100px;height: 100px;" alt="..."></td>
							<td>
								<div class="caption">
									<h4 style="color: blue;font-size:15px;">Thức ăn</h4>
									<p><a href="#" class="btn btn-primary" role="button">Shop <span class="glyphicon glyphicon-shopping-cart"></span></a></p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="thumbnail" style="background-color: #fcfcff">
					<table>
						<tr>
							<td><img src="upload/product/quanao.png" style="width: 100px;height: 100px;" alt="..."></td>
							<td>
								<div class="caption">
									<h4 style="font-size:15px;">Quần áo</h4>
									<p><a href="#" class="btn btn-primary" role="button">Shop <span class="glyphicon glyphicon-shopping-cart"></span></a></p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="thumbnail" style="background-color: #f4f4ff">
					<table>
						<tr>
							<td><img src="upload/product/giuong.png" style="width: 100px;height: 100px;" alt="..."></td>
							<td>
								<div class="caption">
									<h4 style="color: blue;font-size:15px;">Giường, chuồng</h4>
									<p><a href="#" class="btn btn-primary" role="button">Shop <span class="glyphicon glyphicon-shopping-cart"></span></a></p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="thumbnail" style="background-color: #fcfcff">
					<table>
						<tr>
							<td><img src="upload/product/xich.png" style="width: 100px;height: 100px;" alt="..."></td>
							<td>
								<div class="caption">
									<h4 style="font-size:15px;">Dây xích, vòng cổ</h4>
									<p><a href="#" class="btn btn-primary" role="button">Shop <span class="glyphicon glyphicon-shopping-cart"></span></a></p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div style="margin-top: 50px">
			<div style="margin-bottom: 20px;">
				<div style="width: 150px;height: 40px;background-color: #337ab7;border-color: #2e6da4;color: #FFFFFF;font-weight: bold;padding: 10px;border-top-right-radius: 100px;">Thức ăn</div>
				<div style="border-bottom: 5px solid #337ab7;border-color: #337ab7"></div>
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<?php
				$sql = "select * from product where id_class_product = 1 LIMIT 4";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id_product = $row["id_product"];
					$name_product = $row["name_product"];
					$price =  $row["price"];
					$amount =  $row["amount"];
					$information_product =  $row["information_product"];           
					$url_image_product = $row["url_image_product"];
					echo "
					<div class='col-sm-6 col-md-3' style='float:left'>
					<div class='thumbnail'>
					<img src='$url_image_product' alt='...' style='width:175px;height:175px;border:1px solid #d3d3d3'>
					<div class='caption'>
					<center><p><span style='color:blue'><a href='#' style='text-decoration:none;'>$name_product</a><span></p></center>
					<center><p> Giá : <span style='font-weight:bold'>".number_format($price,0,'.','.')."</span></p></center>
					<p>
					<a class='btn btn-default btn-buynow' data-toggle='modal' data-target='#chi_tiet_sp' style='margin-top: 5px;margin-right: 5px;margin-left:20px;'>Chi tiết <span class='glyphicon glyphicon-pencil'></span></a>
					<a href='index.php?page=addcart&&id_product=$id_product'  class='btn btn-primary btn-buynow' style='margin-top: 5px;margin-right: 5px;'>Thêm vào<span class='glyphicon glyphicon-shopping-cart'></span></a>
					</p>
					</div>
					</div>
					</div>
					</a>";
				}
				?>
			</div>
			<div style="margin-bottom: 20px;">
				<div style="width: 150px;height: 40px;background-color: #337ab7;border-color: #2e6da4;color: #FFFFFF;font-weight: bold;padding: 10px;border-top-right-radius: 100px;">Chuồng</div>
				<div style="border-bottom: 5px solid #337ab7;border-color: #337ab7"></div>
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<?php
				$sql = "select * from product where id_class_product = 2 LIMIT 4";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id_product = $row["id_product"];
					$name_product = $row["name_product"];
					$price =  $row["price"];
					$amount =  $row["amount"];
					$information_product =  $row["information_product"];           
					$url_image_product = $row["url_image_product"];
					echo "
					<div class='col-sm-6 col-md-3' style='float:left'>
					<div class='thumbnail'>
					<img src='$url_image_product' alt='...' style='width:175px;height:175px;border:1px solid #d3d3d3'>
					<div class='caption'>
					<center><p><span style='color:blue'><a href='#' style='text-decoration:none;'>$name_product</a><span></p></center>
					<center><p> Giá : <span style='font-weight:bold'>".number_format($price,0,'.','.')."</span></p></center>
					<p>
					<a href='index2.php?page=ttsp' data-toggle='modal' data-target='#chi_tiet_sp' class='btn btn-default btn-buynow' style='margin-top: 5px;margin-right: 5px;margin-left:20px;'>Chi tiết <span class='glyphicon glyphicon-pencil'></span></a>
					<a href='index.php?page=addcart'  class='btn btn-primary btn-buynow' style='margin-top: 5px;margin-right: 5px;'>Thêm vào<span class='glyphicon glyphicon-shopping-cart'></span></a>
					</p>
					</div>
					</div>
					</div>
					</a>";
				}
				?>
			</div>
			<div style="margin-bottom: 20px;">
				<div style="width: 150px;height: 40px;background-color: #337ab7;border-color: #2e6da4;color: #FFFFFF;font-weight: bold;padding: 10px;border-top-right-radius: 100px;">Quần áo</div>
				<div style="border-bottom: 5px solid #337ab7;border-color: #337ab7"></div>
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<?php
				$sql = "select * from product where id_class_product = 3 LIMIT 4";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id_product = $row["id_product"];
					$name_product = $row["name_product"];
					$price =  $row["price"];
					$amount =  $row["amount"];
					$information_product =  $row["information_product"];           
					$url_image_product = $row["url_image_product"];
					echo "
					<div class='col-sm-6 col-md-3' style='float:left'>
					<div class='thumbnail'>
					<img src='$url_image_product' alt='...' style='width:175px;height:175px;border:1px solid #d3d3d3'>
					<div class='caption'>
					<center><p><span style='color:blue'><a href='#' style='text-decoration:none;'>$name_product</a><span></p></center>
					<center><p> Giá : <span style='font-weight:bold'>".number_format($price,0,'.','.')."</span></p></center>
					<p>
					<a href='index2.php?page=ttsp' data-toggle='modal' data-target='#chi_tiet_sp' class='btn btn-default btn-buynow' style='margin-top: 5px;margin-right: 5px;margin-left:20px;'>Chi tiết <span class='glyphicon glyphicon-pencil'></span></a>
					<a href='index.php?page=addcart'  class='btn btn-primary btn-buynow' style='margin-top: 5px;margin-right: 5px;'>Thêm vào<span class='glyphicon glyphicon-shopping-cart'></span></a>
					</p>
					</div>
					</div>
					</div>
					</a>";
				}
				?>
			</div>
			<div style="margin-bottom: 20px;">
				<div style="width: 150px;height: 40px;background-color: #337ab7;border-color: #2e6da4;color: #FFFFFF;font-weight: bold;padding: 10px;border-top-right-radius: 100px;">Dây xích, vòng cổ</div>
				<div style="border-bottom: 5px solid #337ab7;border-color: #337ab7"></div>
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<?php
				$sql = "select * from product where id_class_product = 4 LIMIT 4";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id_product = $row["id_product"];
					$name_product = $row["name_product"];
					$price =  $row["price"];
					$amount =  $row["amount"];
					$information_product =  $row["information_product"];           
					$url_image_product = $row["url_image_product"];
					echo "
					<div class='col-sm-6 col-md-3' style='float:left'>
					<div class='thumbnail'>
					<img src='$url_image_product' alt='...' style='width:175px;height:175px;border:1px solid #d3d3d3'>
					<div class='caption'>
					<center><p><span style='color:blue'><a href='#' style='text-decoration:none;'>$name_product</a><span></p></center>
					<center><p> Giá : <span style='font-weight:bold'>".number_format($price,0,'.','.')."</span></p></center>
					<p>
					<a href='index2.php?page=ttsp' data-toggle='modal' data-target='#chi_tiet_sp' class='btn btn-default btn-buynow' style='margin-top: 5px;margin-right: 5px;margin-left:20px;'>Chi tiết <span class='glyphicon glyphicon-pencil'></span></a>
					<a href='index.php?page=addcart'  class='btn btn-primary btn-buynow' style='margin-top: 5px;margin-right: 5px;'>Thêm vào<span class='glyphicon glyphicon-shopping-cart'></span></a>
					</p>
					</div>
					</div>
					</div>
					</a>";
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>