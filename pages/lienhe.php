<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.nav-kill1.fix1 {
		position: fixed;
		bottom: 10px;
		z-index: 1000;
		max-width: 100%;
		right: 20px;
	}
	.nav-kill2.fix2 {
		position: fixed;
		bottom: 10px;
		z-index: 1000;
		max-width: 100%;
		right: 20px;
	}
</style>
<script>
	$(document).ready(function(){
		$("#show").hide();
		$("#btn_1").click(function(){
			$("#show").show();
		});
		$("#btn_2").click(function(){
			$("#show").hide();
		});
	});
</script>
</head>
<body>
	<div class="nav-kill1 fix1" id="hide">
		<div id="btn_1" style="background-color: #ff7e00;border-radius: 10px;">
			<div style="color: #FFFFFF;padding: 10px;"><span class="glyphicon glyphicon-envelope"></span>  LIÊN HỆ VỚI CHÚNG TÔI  <buttton class="glyphicon glyphicon-chevron-up"></buttton></div>
		</div>
	</div>
	<div class="nav-kill2 fix2" id="show">
		<form method="post">
			<div style="border-radius: 10px;background-color: #f7f7f7;border: 1px solid #dbdbdb">
				<div  id="btn_2" style="background-color: #ff7e00;color: #FFFFFF;padding: 20px;border-top-left-radius: 10px;border-top-right-radius: 10px; ">   LIÊN HỆ VỚI CHÚNG TÔI  <buttton class="glyphicon glyphicon-chevron-down"></buttton></div>
				<center>
					<?php 
					if(isset($_SESSION['username'])){
						?>
						<div>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="textbox" name="name" value="<?php echo $name ?>"><br>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="email" name="email" value="<?php echo $email ?>"><br>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="textbox" name="phone" value="<?php echo $phone ?>">
							<br>
							<textarea style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;" placeholder="Hãy gửi vấn đề của các bạn cho chúng tôi"></textarea>
						</div>
						<?php }else{ ?>
						<div>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="textbox" name="name" placeholder="Họ và tên"><br>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="email" name="email" placeholder="Email"><br>
							<input  style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;border: 1px solid #a3a3a3" type="textbox" name="phone" placeholder="Số điện thoại">
							<br>
							<textarea style="width: 175px;margin-top: 20px;border-radius: 5px;padding-left: 5px;" placeholder="Hãy gửi vấn đề của các bạn cho chúng tôi" name="text"></textarea>
						</div>
						<?php }
						?>
					</center>
					<center><button type="submit" name="btn_submit" style="background-color:#ff7e00;color: #FFFFFF;border-radius: 10px;border: none;margin-top: 20px;margin-bottom: 20px;padding:10px;">Gửi tin nhắn</button></center>
				</div>
			</form>
			<?php 
			if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
				$name=$_POST["name"];
				$email=$_POST["email"];
				$phone = $_POST['phone'];
				$text = $_POST['text'];
				if ($name == "" || $email == ""||$phone == "" ||$text == "" ) {
					?>
					<script type="text/javascript">
						alert('Gửi tin nhắn không thành công');
						$(document).ready(function(){
							$("#show").show();
						});
					</script>
					<?php
				}else {
					$sql = "insert into contact (name,email,phone,content) values ('$name','$email','$phone','$text')";

					mysqli_query($conn,$sql);
					?>
					<script type="text/javascript">
						alert('Gửi tin nhắn thành công');
					</script>
					<?php
				}
			}
			?>
		</div>
	</body>
	</html>