<?php

include("connection.php");

$sql = "delete from product where id_product = $_GET[id_product]";

mysqli_query($conn,$sql);
header('location:index.php?page=product&&title=product')
?>