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
	$sql = "select * from news where id_news = '$_GET[id]'";

	$kt = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($kt);
	if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
		$tieude=$_POST["tieude"];
		$noidung=$_POST["noidung"];
		$ngaygio = date('Y-m-d H:i:s');
		if ($tieude == "" || $noidung == "") {
			$msg = "<p class = 'text'>Không được để trống!</p> ";
		}else {
			$sql = "UPDATE news SET title = '$tieude',content='$noidung',time_news='$ngaygio' WHERE id = '$_GET[id]'";

			mysqli_query($conn,$sql);
			?>
			<script type="text/javascript">
				alert('Sửa tin tức thành công');
				window.location.href ='index.php?page=news&&title=news';
			</script>
			<?php
		}
	}
	?>
	<div class="container" style="margin-top: 150px;">
		<form class="form-horizontal" role="form" method="post">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft"  data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="1">Tiêu đề</label>
				<div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">
					<input type="textbox" name='tieude' class="form-control" id="inputEmail3" value="<?php echo $row['title'] ?>" required="">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1">Nội dung</label>
				<div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="2s" data-wow-iteration="1">
					<textarea class="form-control" name='noidung' rows="3" required=""><?php echo $row['content'] ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 wow bounceIn" data-wow-duration="1s" data-wow-delay="3s" data-wow-iteration="1">
					<button type="submit" name="btn_submit" class="btn btn-primary">Sửa tin tức</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>