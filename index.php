<?php 
ob_start(); 
session_start(); 
include 'header.php';				
if(isset($_GET["page"])){
	$page = $_GET["page"];
	switch($page){
		case "home":
		require_once("pages/home.php");
		break;
		case "login":
		require_once("pages/login.php");
		break;
		case "blog":
		require_once("pages/blog.php");
		break;
		case "logout":
		require_once("pages/logout.php");
		break;
		case "gioithieu":
		require_once("pages/gioithieu.php");
		break;
		case "dichvu":
		require_once("pages/dichvu.php");
		break;
		case "product":
		require_once("pages/product.php");
		break;
		case "addcart":
		require_once("pages/addcart.php");
		break;
		case "cart":
		require_once("pages/cart.php");
		break;
		case "delete_cart":
		require_once("pages/delete_cart.php");
		break;
		case "donhang":
		require_once("pages/donhang.php");
		break;
		default;
		require_once("pages/home.php");
	}
}
else{
	header('location:index.php?page=home');
}
include 'footer.php';
ob_flush();
?>
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
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="library/animate_css/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="library/Content/slick.css" rel="stylesheet" />
	<link href="library/Content/slick-theme.css" rel="stylesheet" />
	<script src="library/Scripts/jquery-1.10.2.js"></script>
	<script src="library/Scripts/jquery-migrate-1.2.1.min.js"></script>
	<script src="library/Scripts/slick.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
</html>