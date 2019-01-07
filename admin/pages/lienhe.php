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
	</style>
</head>
<body>
	<?php
	include("connection.php");
	?>
	<div class="container">
			<table class="table table-striped table-hover table-bordered" style="margin-left: 90px;margin-top: 100px;">
				<tr class="info">
					<th>Mã liên hệ</th>
					<th>Tên khách hàng</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Nội dung</th>
					<th>Thao tác</th>
				</tr>
				<?php 
				$sql = "select * from contact ORDER BY id_contact DESC";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					$id = $row["id_contact"];
					$email = $row["email"];
					$name = $row['name'];
					$phone = $row['phone'];
					$content = $row['content'];
					?>
					<tr>
						<td> <?php echo $id ?>	</td>
						<td> <?php echo $name ?>	</td>
						<td> <?php echo $email ?>	</td>
						<td> <?php echo $phone ?></td>
						<td><?php echo $content ?></td>
						<td>Phản hồi</td>
					</tr>
					<?php 
				}
				?>
			</table>
	</div>
</body>
</html>
