<?php 
	$id_product = $_GET["id_product"];
	if(isset($_SESSION['cart'][$id_product])){
	unset( $_SESSION['cart'][$id_product] );
	header('location:index.php?page=cart');
}
?>