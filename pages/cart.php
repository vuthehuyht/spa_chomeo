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
	if(isset($_POST['submit_update']))
	{
		foreach ($_SESSION['cart'] as $key => $value) {

			$sql = "SELECT * FROM product where id_product = $key";

			$query = mysqli_query($conn,$sql);

			$row = mysqli_fetch_array($query);
			$sl = $_POST["number_$key"];
			$_SESSION['cart'][$row['id_product']] = $sl;
		}
	}
	?>
	<div class="container-fluid" style="background-color: #FFFFFF;width: 95%;margin-top: -20px";>
		<div class="container" style="margin-top: 20px;margin-bottom: 20px;">
			<h2>Giỏ hàng</h2>
			<form method='post'>
				<table class="table table-striped table-hover table-bordered">
					<tr class="info">
						<th style="width: 100px;">Hình ảnh</th>
						<th >Tên sản phẩm</th>
						<th >Giá</th>
						<th >Số lượng</th>
						<th >Thao tác</th>
					</tr>
					<?php 

					if(isset( $_SESSION["cart"]) ){

						$length = count($_SESSION['cart']);
						$tong = '0';?>
						<div class="alert alert-info" role="alert">
							<?php

							echo 'Giỏ hàng có '.$length.' sản phẩm.';

							?> 
						</div>
						<?php
						foreach ($_SESSION['cart'] as $key => $value) {

							$sql = "SELECT * FROM product where id_product = $key";

							$query = mysqli_query($conn,$sql);

							$row = mysqli_fetch_array($query);
							?>
							<tr>
								<td> <img src="<?php echo $row['url_image_product'] ?>" style='width: 100px;height: 100px;'></td>
								<td style="padding-top:40px;"> <?php echo $row["name_product"] ?>	</td>
								<td style="padding-top:40px;" > <?php echo number_format($row["price"],0,'.','.') ?> đồng	</td>
								<td style="padding-top:40px;width: 100px;"> <input type="number" class="form-control" name="number_<?php echo $key ?>" value="<?php echo $_SESSION['cart'][$row['id_product']] ?>" style="width: 100px;"></td>
								<td style="padding-top:40px;"> <a href="?page=delete_cart&&id_product=<?php echo $key ?>" class="btn btn-danger delete" data-confirm="Bạn có thực sự muốn xóa?">Xóa sản phẩm</a></td>
							</tr>
							<?php 
							$tong +=$_SESSION['cart'][$key]*$row['price'];
							?>
							<?php 
						}
						?>

						<tr>
							<th colspan="3"></th>
							<th>Tổng tiền</th>
							<th colspan="2"><?php echo number_format($tong,0,'.','.') ?> đồng</th>
						</tr>
						<?php
					}else{
						echo "
						<tr> 
						<td colspan='6' style='text-align: center;'>Giỏ hàng trống</td>
						</tr>";?>
						<?php 
					}
					?>
				</table>
				<input type="submit" class="btn btn-success" name="submit_buy" value="Tiến hành mua hàng" style="margin-bottom: 20px;">
				<input type="submit" class="btn btn-primary" name="submit_update" value="Cập nhật" style="margin-bottom: 20px;">
				<a href="index.php?page=product" class="btn btn-info" style="margin-bottom: 20px;">Quay lại</a>
			</form>
		</div>
		<?php
		$sql = "select * from users";

		$kt = mysqli_query($conn,$sql);

		while ($row = mysqli_fetch_array($kt)) {
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == $row['username']){
					$id = $row['id_users'];
				}
			}
		}
		if(isset($_POST['submit_buy']))
		{
			if(isset($name)){
				foreach ($_SESSION['cart'] as $key => $value) {

					$sql = "SELECT * FROM product where id_product = $key";

					$query = mysqli_query($conn,$sql);

					$row = mysqli_fetch_array($query);
					$id_product = $row['id_product'];
					$price = $row['price'];
					$sl = $_POST["number_$key"];
					date_default_timezone_set("Asia/Ho_Chi_Minh");
					$time = date("Y-m-d H:i:s");
					$sql = "INSERT INTO bill_product (`id_product`, `amount_buy`, `time_bill_product`, `id_users`) VALUES ('$id_product','$sl','$time','$id') ";
					$query = mysqli_query($conn,$sql);
					if($query)
					{
						?>
						<script type="text/javascript">
							alert('Thêm thành công');
							window.location.href = 'index.php?page=donhang';
						</script>
						<?php
					}else{
						echo $sql;
					}
				}
			}else{
				?>
				<script type="text/javascript">
					var r = confirm("Bạn cần phải đăng nhập trước");
					if (r == true) {
						document.getElementById('id01').style.display='block';
					}
					else{
						window.location.href = 'index.php?page=cart';
					}
				</script>
				<?php
			}
		}
		?>
	</div>
</body>
<script type="text/javascript">
	var deleteLinks = document.querySelectorAll('.delete');

	for (var i = 0; i < deleteLinks.length; i++) {
		deleteLinks[i].addEventListener('click', function(event) {
			event.preventDefault();

			var choice = confirm(this.getAttribute('data-confirm'));

			if (choice) {
				window.location.href = this.getAttribute('href');
			}
		});
	};
</script>
</html>