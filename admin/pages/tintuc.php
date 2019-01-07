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
	#tintuc{
		background-color: #eee;
		color: #23527c;
	}
</style>
<script>
	new WOW().init();
</script>
</head>
<body>
	<?php 
		include 'connection.php';
	 ?>
	<div class="col-sm-12 col-md-12 wow zoomIn" style="margin-top: 100px;margin-left: 100px">
		<a href="?page=addtintuc&&tieude=tintuc"><button type="button" class="btn btn-success">Thêm tin tức</button></a>
		<table class="table table-hover" style="margin-top: 20px;width: 99%">
			<tr class="success">
				<td style="font-weight: bold">ID</td>
				<td style="font-weight: bold">Người đăng</td>
				<td style="font-weight: bold">Ngày giờ</td>
				<td style="width: 15%;font-weight: bold">Tiêu đề</td>
				<td style="width: 30%;font-weight: bold">Nội dung</td>
				<td style="font-weight: bold">URL_images</td>
				<td style="font-weight: bold">Thao tác</td>
			</tr>
				<?php
				$sql = "select * from news,admin where news.id_admin = admin.id_admin";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					echo "
					<tr>
					<td>".$row['id_news']."</td>
					<td>".$row['name']."</td>
					<td>".$row['time']."</td>
					<td>".$row['title']."</td>
					<td>".$row['content']."</td>
					<td>".$row['url_image']."</td>
					<td><a href='?page=suatintuc&&tieude=tintuc&&id=".$row['id_news']."'><button type='button' class='btn btn-primary'>Sửa</button></a> <a href='?page=xoatintuc&&id=".$row['id_news']."' type='button' class='btn btn-danger' data-confirm='Bạn có thực sự muốn xóa?'>Xóa</a></td>
					<tr> ";
				
				}
				?>
		</table>
	</div>
	<script type="text/javascript">
	var deleteLinks = document.querySelectorAll('.btn-danger');

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
</body>
</html>