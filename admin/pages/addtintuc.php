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
}
</style>
<script>
	new WOW().init();
</script>
</head>
<body>
	<?php 
	include 'connection.php';

	if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
		$title=$_POST["title"];
		$content=$_POST["content"];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$time = date("Y-m-d H:i:s");
		if ($title == "" || $content == "") {
			?>
			<script type="text/javascript">
				alert('Không được để trống');
			</script>
			<?php
		}else 
		if (($_FILES["img"]["type"] != "image/gif") && ($_FILES["img"]["type"] != "") && ($_FILES["img"]["type"] != "image/jpeg")&& ($_FILES["img"]["type"] != "image/pjpeg"))
		{
			?>
			<script type="text/javascript">
				alert('File không đúng định dạng');
			</script>
			<?php
		}
		else if($_FILES['img']['size'] > 1000000)
		{
			?>
			<script type="text/javascript">
				alert('Kích cỡ file phải nhỏ hơn 1MB');
			</script>
			<?php
		}
		else if($_FILES['img']['size'] =="")
		{
			?>
			<script type="text/javascript">
				alert('Bạn chưa chọn file ảnh');
			</script>
			<?php
		} 
		else{
			$img=$_FILES['img']['name'];
			$link_img='upload/tintuc/'.$img;
			$sql = "insert into news (title,content,time,url_image,id_admin) values ('$title','$content','$time','$link_img','$id_admin')";
			$result=mysqli_query($conn,$sql);
			move_uploaded_file($_FILES['img']['tmp_name'],'../upload/tintuc/'.$img);
			if($result)
			{
				?>
				aaa
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Thêm thất bại');
				</script>
				<?php
			}
		}
	}
	?>
	<div class="container" style="margin-top: 150px;">
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft"  data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">Tiêu đề</label>
				<div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1">
					<input type="textbox" name='title' class="form-control" id="inputEmail3" placeholder="Tiêu đề">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">Nội dung</label>
				<div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1">
					<textarea class="form-control" name='content' rows="3" placeholder="Nhập nội dung"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">Upload ảnh</label>
				<div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1">
					<input type="file" name="img" size="45" />
				</div>
			</div>
			<div style="color: red;font-style: italic;margin-left: 195px"><?php if(isset($msg)) {echo $msg;} ?></div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 wow bounceIn" data-wow-duration="1s" data-wow-delay="2s" data-wow-iteration="1">
					<button type="submit" name="btn_submit" class="btn btn-success">Thêm tin tức</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>