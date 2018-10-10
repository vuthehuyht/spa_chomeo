<?php
include("connection.php");
$sql = "delete from service where id_service = $_GET[id]";
//var_dump($sql);
//die;
mysqli_query($conn, $sql); 
?>
<script>window.location = "http://localhost/Spa_ChoMeo/admin/index.php?page=dichvu&&tieude=dichvu";</script>
<?php
?>
