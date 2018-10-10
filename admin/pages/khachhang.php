<!DOCTYPE html>
<html lang="en">
<head>
	<title>Liên hệ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<style type="text/css">
		td{
  width: 100px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
	#khachhang{
		background-color: #eee;
		color: #23527c;
	}
	</style>
</head>
<body>
	<?php
	include("connection.php");
	?>
	<div class="container">
			<table class="table table-striped table-hover table-bordered" style="margin-left: 90px;margin-top: 100px;">
				<tr class="info">
					<th>Mã khách hàng</th>
					<th>Username</th>
					<th>Tên khách hàng</th>
					<th>Giới tính</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Địa chỉ</th>
					<th>Thao tác</th>
				</tr>
				<?php 
				$sql = "select * from users ORDER BY id_users DESC";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id = $row["id_users"];
					$username = $row["username"];
					$fullname = $row["fullname"];
					$email = $row["email"];
					$phone = $row['phone_number'];
					$address = $row['address'];
					if($row['sex']=='1'){
						$sex = 'Nam';
					}else{
						$sex = 'Nữ';
					}
					?>
					<tr>
						<td> <?php echo $id ?>	</td>
						<td> <?php echo $username ?></td>
						<td> <?php echo $fullname ?></td>
						<td> <?php echo $sex ?></td>
						<td> <?php echo $email ?></td>
						<td> <?php echo $phone ?></td>
						<td><?php echo $address ?></td>
						<td><button class="btn btn-danger">Xóa</button></td>
					</tr>
					<?php 
				}
				?>
			</table>
	</div>
</body>
</html>
