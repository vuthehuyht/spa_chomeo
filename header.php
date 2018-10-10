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
	<style type="text/css">
	.nav-kill.fix {
		overflow: visible;
		position: fixed;
		top: 40px;
		z-index: 1000;
		opacity: 1;
		max-width: 100%;
		width: 100%;
	}
	.navbar-default .navbar-nav{
		transition: all 300ms ease;
		-o-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		-webkit-transition: all 300ms ease;
	}
	.navbar-default .navbar-nav>li{
		margin-left: 10px;
		margin-right: 10px;
	}
	.navbar-default .navbar-nav>li>a {
		font-family: sans-serif;font-size: 0.8rem;
		padding-bottom: 14px;
		transition: all 300ms ease;
		-o-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		-webkit-transition: all 300ms ease;
		line-height: 5px;
	}
	.navbar-default .navbar-nav .item{
		margin-left: 10px;
		margin-right: 10px;
		padding-left: 0px;
		padding-right: 0px;
		transition: all 300ms ease;
		-o-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		-webkit-transition: all 300ms ease;
	}
	.navbar-default .navbar-nav .item:hover{
		margin-left: 10px;
		margin-right: 10px;
		border-bottom: 2px solid #fff;
	}
	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		margin-left: 20px;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}
	.textphp{
		color: red;
		font-style: italic;
		margin-top: 10px;
		margin-left: 0px;
	}
	#head{
		font-size: 24px;
		margin-top: 20px;
		margin-bottom: 10px;
		color: green;
	}

	.login-card {
		padding: 40px;
		width: 435px;
		background-color: #FFFFFF;
		margin: 0 auto 10px;
		border-radius: 2px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		overflow: hidden;
		font-family: Arial;font-size: 14px;
	}



	.login-help {
		width: 100%;
		text-align: center;
		font-size: 12px;
	}
</style>
<script>
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			document.getElementById("navbar").style.top = "0";
			document.getElementById("navbar").style.backgroundColor = "#4267b2";
			document.getElementById("right").style.marginTop = "10px";
			document.getElementById("image").style.width = "50%";
			document.getElementById("image").style.marginTop = "20px";
		} else {
			document.getElementById("navbar").style.top = "40px";
			document.getElementById("navbar").style.backgroundColor = "hsla(0, 100%, 100%, 0.0)";
			document.getElementById("image").style.width = "100%";
		}
	}
</script>
<script>
	$(function () {
		var nua = navigator.userAgent
		var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
		if (isAndroid) {
			$('select.form-control').removeClass('form-control').css('width', '100%')
		}
	})
</script>
<script type="text/javascript">
	function validateForm(){
    //Tên phải được điền
    var masp=document.forms["myForm"]["txtPhone"].value;
    var ktmasp=isNaN(masp);
    if(ktmasp==true) {
    	var r = confirm("Số điện thoại phải ở dạng số");
    	if (r == true) {
    		document.getElementById('id02').style.display='block';
    	}
    }
}
</script>
</head>
<?php 
include("connection.php");
$sql = "select * from users";

$kt = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($kt)) {
	if(isset($_SESSION['username'])){
		if($_SESSION['username'] == $row['username']){
			$name = $row['fullname'];
		}
	}
}
$sql = "select * from admin";

$kt = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($kt)) {
	if(isset($_SESSION['admin'])){
		if($_SESSION['admin'] == $row['username']){
			$name_admin = $row['name'];
		}
	}
}
?>
<body>
	<div class="container-fuild" >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 650px">
			<ol class="carousel-indicators" style="z-index: 1">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" >
				<div class="item active" >
					<img src="upload/home/slide-1.jpg" class="img-responsive" style="width:100%;height: 650px;" alt="..." >
				</div>
				<div class="item" >
					<img src="upload/home/slide-7.png" class="img-responsive"  style="width:100%;height: 650px;" alt="..." >
				</div>
				<div class="item">
					<img src="upload/home/slide-6.png" class="img-responsive"  style="width:100%;height: 650px;" alt="..." >
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="container-fuild">
		<div class="container-fuild menu-cha" >
			<nav class="navbar navbar-default nav-kill fix" id="navbar" role="navigation" style="background-color:hsla(0, 100%, 100%, 0.0);border: none;transition: all 200ms ease;-o-transition: all 200ms ease;-moz-transition: all 200ms ease;-webkit-transition: all 200ms ease;">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="?page=home" class="navbar-brand" style="margin-top: -25px;width: 100px;" href="#"><img id="image" src="upload/logo/logoa.png" style="width: 100%"></a>
					</div>
					<div class="collapse navbar-collapse" style="opacity: 1">
						<div class="nav navbar-nav navbar-right" id="right">
							<ul class="nav navbar-nav menu">
								<li><a class="item" id="item-1" href="?page=home" id="home" style="font-weight: bold;opacity:1;color: #FFF">TRANG CHỦ</a></li>
								<?php
								$sql = "select * from introduction where id= 1";
								$kt= mysqli_query($conn, $sql);
								$dong = mysqli_fetch_array($kt);
								?>

								<li><a class="item" id="item-2" href="index.php?page=gioithieu&&id=<?php echo $dong['id']?>" style="font-weight: bold;opacity:1;color: #FFF" target="_blank">GIỚI THIỆU</a></li>
								<li><a class="item" id="item-2" href="index.php?page=product" style="font-weight: bold;opacity:1;color: #FFF">SẢN PHẨM</a></li>
								<li><a class="item" id="item-3" href="index.php?page=dichvu&&id=5" style="font-weight: bold;opacity:1;color: #FFF" >DỊCH VỤ</a></li>
								<li><a class="item" id="item-4" style="font-weight: bold;opacity:1;color: #FFF" href="?page=blog">BLOG</a></li>
								<li><a class="item" id="item-5" href="?page=tintuc" id="tintuc" style="font-weight: bold;opacity:1;color: #FFF;" >TIN TỨC</a></li>
							</ul>
							<div class="dropdown">
								<?php 
								if(isset($name)){
									?>
									<a href="#"><button  style="margin-left: 20px;font-size: 0.8rem; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);width:150px;" type="button" class="btn btn-success" ><?php echo $name ?> <span class="caret"></span></button></a>
									<div class="dropdown-content">
										<a href="?page=cart"><button type="button" class="btn btn-primary" style="margin-top: 10px;width: 150px;"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="count-item" data-count="0">GIỎ HÀNG <?php 
										if(isset( $_SESSION["cart"]) ){
											$length = sizeof($_SESSION['cart']);
											echo $length;}
											else{
												echo "0";
											}  
											?></span></button></a>
											<a href="?page=donhang"><button style="font-size: 0.8rem;margin-top: 10px;width:150px;" type="button" class="btn btn-info">ĐƠN HÀNG</button></a>
											<a href="?page=logout"><button style="font-size: 0.8rem;margin-top: 10px;width:150px;" type="button" class="btn btn-danger">ĐĂNG XUẤT</button></a>
										</div>
										<?php
									}else{
										?>
										<button onclick="document.getElementById('id01').style.display='block'" style="margin-left: 20px;font-size: 0.8rem; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);width:100px" type="button" class="btn btn-success" >ĐĂNG NHẬP <span class="caret"></span></button>
										<div class="dropdown-content">
											<button onclick="document.getElementById('id02').style.display='block'" style="font-size: 0.8rem;margin-top: 10px;width:100px" type="button" class="btn btn-primary" >ĐĂNG KÝ</button>
										</div>
										<?php 
									}

									?>
								</div>
							</div><!-- /.navbar-collapse -->
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content">
				<header class="w3-container" style="border-bottom: 1px solid #ededed">
					<span onclick="document.getElementById('id01').style.display='none'" 
					class="w3-button w3-display-topright" style="background-color:red;color:#FFF">&times;</span>
					<h2 style="padding-top: 10px;font-size: 24px;color: green;width:50%;float: left">Đăng nhập</h2>
					<button onclick="document.getElementById('id02').style.display='block'" class="btn btn-primary" style="margin-bottom: 20px;margin-left: 290px;margin-top: 20px;">Đăng ký</button>
				</header>
				<div class="w3-container">
					<div class="login-card" style="margin-top: 20px;margin-bottom: 20px;">
						<form method="post">
							<div class="form-group">
								<label for="usr">Tên đăng nhập</label>
								<input type="text" class="form-control" id="usr" placeholder="Nhập tên tài khoản" name="username" required="">
							</div>
							<div class="form-group">
								<label for="pwd">Mật khẩu</label>
								<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password" required="">
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="remember"> Nhớ mật khẩu</label>
							</div>
							<button type="submit" name="submit" class="btn btn-success">Đăng nhập</button>
						</form>
						<div class="login-help">
							<a href="index.php?page=email">Quên mật khẩu?</a>
						</div>
					</div>
				</div>
				<footer class="w3-container" style="background-color:#ededed;height: 50px;">
				</footer>
			</div>
		</div>
		<div id="id02" class="w3-modal">
			<div class="w3-modal-content">
				<header class="w3-container" style="border-bottom: 1px solid #ededed">
					<span onclick="document.getElementById('id02').style.display='none'" 
					class="w3-button w3-display-topright" style="background-color:red;color:#FFF">&times;</span>
					<h2 style="padding-top: 10px;font-size: 24px;color: green;width:50%;float: left">Đăng ký</h2>
				</header>
				<div class="w3-container">
					<div class="login-card" style=" box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);margin-top: 20px;margin-bottom: 20px;">
						<form method="post"  name="myForm" onsubmit="return validateForm()">
							<div class="form-group">
								<label for="usr">Tên đăng nhập</label>
								<input type="text" class="form-control" id="usr" placeholder="Nhập tên tài khoản" name="username" required="">
							</div>
							<div class="form-group">
								<label for="pwd">Mật khẩu</label>
								<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password" required="">
							</div>
							<div class="form-group">
								<label for="pwd">Nhập lại mật khẩu</label>
								<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="repassword" required="">
							</div>
							<div class="form-group">
								<label for="usr">Họ và tên</label>
								<input type="text" class="form-control" id="usr" placeholder="Nhập họ và tên" name="fullname" required="">
							</div>
							<div class="form-group">
								<label for="usr">Giới tính</label></br>
								Nam <input type="radio" name="gender" value="Nam"> Nữ <input type="radio" name="gender" value="Nữ"><br>
							</div>
							<div class="form-group">
								<label for="usr">Email</label>
								<input type="email" class="form-control" id="usr" placeholder="Nhập Email" name="email" required="">
							</div>
							<div class="form-group">
								<label for="usr">Số điện thoại</label>
								<input type="text" class="form-control" id="txtPhone" placeholder="Nhập số điện thoại" name="phone" required="">
							</div>
							<div class="form-group">
								<label for="usr">Địa chỉ</label>
								<input type="text" class="form-control" id="usr" placeholder="Nhập địa chỉ" name="address" required="">
							</div>
							<button type="submit" name="submit_btn" class="btn btn-success">Đăng Ký</button>
						</form>
					</div>
				</div>
				<footer class="w3-container" style="background-color:#ededed;height: 50px;">
				</footer>
			</div>
		</div>
		<?php 
		include("connection.php");
		if (isset($_POST["submit"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($username == "" || $password =="") {
				$msg =  "<p class='textphp'>Tên đăng nhập hoặc mật khẩu bạn không được để trống!</p>";
			}else{
				$sql = "select * from users where username = '$username' and password = '$password' ";
				$query = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($query);
				if ($num_rows==0) {
					?>
					<script type="text/javascript">
						var r = confirm("Tài khoản hoặc mật khẩu không chính xác");
						if (r == true) {
							document.getElementById('id01').style.display='block'
						}
					</script>
					<?php
				}else{
					$_SESSION['username'] = $username;
					header('location:?page=home');
				}
			}
		}
		if (isset($_POST["submit"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($username == "" || $password =="") {
				$msg =  "<p class='textphp'>Tên đăng nhập hoặc mật khẩu bạn không được để trống!</p>";
			}else{
				$sql = "select * from admin where username = '$username' and password = '$password' ";
				$query = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($query);
				if ($num_rows==0) {
					?>
					<script type="text/javascript">
						var r = confirm("Tài khoản hoặc mật khẩu không chính xác");
						if (r == true) {
							document.getElementById('id01').style.display='block'
						}
					</script>
					<?php
				}else{
					$_SESSION['admin'] = $username;
					header('location:admin/index.php');
				}
			}
		}
		if (isset($_POST["submit_btn"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$fullname = $_POST["fullname"];
			$repassword = $_POST["repassword"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			if (empty($_POST['gender']) == true) {
				?>
				<script type="text/javascript">
					var r = confirm("Giới tính không được để trống");
					if (r == true) {
						document.getElementById('id02').style.display='block'
					}
				</script>
				<?php
				if(isset($_POST['gender'])=='Nam'){
					$sex = 1;
				}
				else{
					$sex = 0;
				}
			}else{
				if(strlen($username) < 6 or strlen($password) < 6){
					?>
					<script type="text/javascript">
						var r = confirm("Tài khoản và mật khẩu phải nhiều hơn 6 ký tự!!!");
						if (r == true) {
							document.getElementById('id02').style.display='block'
						}
					</script>
					<?php
				}else{
					if($repassword != $password){
						?>
						<script type="text/javascript">
							var r = confirm("Mật khẩu không trùng nhau!!!");
							if (r == true) {
								document.getElementById('id02').style.display='block'
							}
						</script>
						<?php
					}else{
						$sql="select * from users where username='$username'";
						$kt=mysqli_query($conn, $sql);
						if(mysqli_num_rows($kt)  > 0){
							?>
							<script type="text/javascript">
								var r = confirm("Tài khoản đã tồn tại");
								if (r == true) {
									document.getElementById('id02').style.display='block'
								}
							</script>
							<?php
						}else{
							$sql = "INSERT INTO users (username, PASSWORD, fullname, email, phone_number, address, sex) VALUES ('$username','$password','$fullname','$email','$phone','$address','$sex') ";
							$query = mysqli_query($conn,$sql);
							?>
							<script type="text/javascript">
								alert("Đăng ký thành công!!!");
							</script>
							<?php
							$_SESSION['username'] = $username;
							header('location:?page=home');
						}
					}
				}
			}
		}
		?>
	</body>
	</html>