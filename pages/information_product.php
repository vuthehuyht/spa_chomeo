<?php
include 'connection.php';
$sql = "select * from qlbh where id_product ='$_GET[id_product]'";
$kt = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($kt)) {
	$id_product = $row["id_product"];
	$name_product = $row["name_product"];
	$price =  $row["price"];
	$amount =  $row["amount"];
	$information_product =  $row["information_product"];           
	$url_image_product = $row["url_image_product"];
	?>
	<div class="modal-dialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<table class="table">
			<tr>
				<td><img src='<?php echo $url_image_product; ?>' width="300px" height="300px"></td>
				<td>
					<p style="font-size: 24px;font-weight: bold;"><?php echo $name_product; ?></p>
					<p><?php echo $Tomtat ?></p>
					<p> Giá : <span style="color: red;font-weight: bold"><?php echo number_format($price,0,'.','.'); ?></span> đồng</p>
					<p> Thông tin sản phẩm : <span style="font-weight: bold;"><?php echo $information_product ?></span></p>
					<a href="index.php?page=addcart&&id_product=$id_product"><button type="submit" name="btn_button" class='btn btn-primary btn-buynow'><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ hàng</button></a>
				</td>
			</tr>
		</table>
	</div>
	<?php
}
?>