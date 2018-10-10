<?php 
	$id_product = $_GET["id_product"];
	if($_GET){
		if( isset($_SESSION["cart"]) && !empty($_SESSION["cart"]) ){
			if( isset($_SESSION["cart"][$id_product]) && !empty($_SESSION["cart"][$id_product]) ){
				$_SESSION["cart"][$id_product]++;
			} else {
				$_SESSION["cart"][$id_product] =1;
			}
		} else {
			$_SESSION["cart"][$id_product] = 1;
		}
	}
	header("Location: index.php?page=cart");
?>