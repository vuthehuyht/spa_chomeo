<?php

include("connection.php");

$sql = "delete from news where id_news = $_GET[id]";

mysqli_query($conn,$sql);
header('location:index.php?page=news&&title=news')
?>
