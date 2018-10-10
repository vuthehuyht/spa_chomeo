<?php
include("connection.php");
$sql = "delete from service_user where id = $_GET[id]";

mysqli_query($conn, $sql); 
?>
<script>window.location="http://localhost/Spa_ChoMeo/admin/index.php?page=quanly_dichvu";</script>
<?php
?>
