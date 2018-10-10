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
	#news{
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
	<form method="post">
		<div class="container wow zoomIn" style="margin-top: 100px;margin-left: 100px">
			<a href="?page=add_news&&title=news"><button type="button" class="btn btn-success">Thêm tin tức</button></a>
			<table class="table table-hover" style="margin-top: 20px;width: 99%">
				<tr class="success">
					<td style="font-weight: bold">ID</td>
					<td style="font-weight: bold">Người đăng</td>
					<td style="font-weight: bold">Ngày giờ</td>
					<td style="width: 10%;font-weight: bold">Tiêu đề</td>
					<td style="width: 20%;font-weight: bold">Nội dung</td>
					<td style="font-weight: bold;width: 10%;">URL_images</td>
					<td style="font-weight: bold;">Trạng thái</td>
					<td style="font-weight: bold">Thao tác</td>
				</tr>
				<?php
				$sql = "select * from news,admin where news.id_admin = admin.id_admin";
				$kt = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($kt)) {
					echo "
					<tr>
					<td style = 'word-wrap: break-word'>".$row['id_news']."</td>
					<td style = 'word-wrap: break-word'>".$row['name']."</td>
					<td style = 'word-wrap: break-word'>".$row['time_news']."</td>
					<td style = 'word-wrap: break-word'>".$row['title']."</td>
					<td style = 'word-wrap: break-word'>".$row['content']."</td>
					<td style = 'word-wrap: break-word'>".$row['url_image']."</td>
					<td style = 'word-wrap: break-word'><button type='submit' name='btn_submit' class='btn btn-success'>Hiện</button> <button type='submit' name = 'hide' class='btn btn-danger'>Ẩn</button></td>
					<td><a href='?page=update_news&&title=news&&id=".$row['id_news']."'><button type='button' class='btn btn-primary'>SỬA</button></a> <a href='?page=delete_news&&id=".$row['id_news']."' type='button' class='btn btn-danger' data-confirm='Bạn có thực sự muốn xóa?'>XÓA</a></td>
					<tr> ";
				}
				?>
			</table>
		</div>
	</form>
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