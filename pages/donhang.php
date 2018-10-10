<!DOCTYPE html>
<html lang="en">
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
	<style type="text/css">
	th{
		text-align: center;
	}
</style>
</head>
<body>
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
	<div class="container-fluid" style="background-color: #FFFFFF;width: 95%;margin-top: -20px";>
		<div class="container" style="margin-top: 20px;margin-bottom: 20px;">
			<h2>Đơn hàng của tôi</h2>
			<form method='post'>
				<table class="table table-striped table-hover table-bordered">
					<tr class="info">
						<th style="width: 100px;">Hình ảnh</th>
						<th >Tên sản phẩm</th>
						<th >Ngày đặt hàng</th>
						<th >Giá</th>
						<th >Số lượng</th>
						<th >Tình trạng</th>
						<th >Thao tác</th>
					</tr>
					<?php
					$sql = "select * from bill_product,product where bill_product.id_product = product.id_product";
					$count = "SELECT COUNT(*) FROM bill_product WHERE id_users = $id";
					$kt = mysqli_query($conn,$sql);
					?>
					<div class="alert alert-info" role="alert">
						<?php

						echo 'Bạn có '.COUNT('id_bill_product').' đơn hàng.';

						?> 
					</div>
					<?php
					while ($row = mysqli_fetch_array($kt)) {

						?>
						<tr>
							<td> <img src="<?php echo $row['url_image_product'] ?>" style='width: 100px;height: 100px;'></td>
							<td style="padding-top:40px;"> <?php echo $row["name_product"] ?>	</td>
							<td style="padding-top:40px;"> <?php echo $row["time_bill_product"] ?></td>
							<td style="padding-top:40px;" > <?php echo number_format($row["price"],0,'.','.') ?> đồng	</td>
							<td style="padding-top:40px;" > <?php echo ($row["amount_buy"]) ?>	</td>
							<td style="padding-top:40px;" >Chưa giao hàng</td>
							<td style="padding-top:40px;" ><button class="btn btn-danger">Hủy đơn hàng</button></td>
						</tr>
						<?php 
					}
					?>
				</table>
				<input type="submit" class="btn btn-success" name="submit_buy" value="Tiến hành mua hàng" style="margin-bottom: 20px;">
				<input type="submit" class="btn btn-primary" name="submit_update" value="Cập nhật" style="margin-bottom: 20px;">
				<a href="index.php?page=product" class="btn btn-info" style="margin-bottom: 20px;">Quay lại</a>
			</form>
		</div>
	</body>
	</html>