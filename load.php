<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<script src="bootstrap/js/bootstrap.min.js"></script>
<body>
			<?php
			if(isset($_GET["page"])){
				$page = $_GET["page"];
				switch($page){
					case "modal_delete_product":
					require_once("pages/information_product.php");
					break;
					default:
					require_once("index.php?page=home");
				}
			}
			?>
</body>
<?php 
    ob_flush();
 ?>
</html>