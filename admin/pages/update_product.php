<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
    .form-control{
        width: 78%;
    }
    .form-horizontal{
        margin-left: -70px;
    }
    #product{
        background-color: #eee;
        color: #23527c;
    }
</style>
</head>
<script type="text/javascript">
    // JavaScript Document
    function validateForm(){
    //Tên phải được điền
    var id_product=document.forms["myForm"]["id_product"].value;
    var kt_id_product=isNaN(id_product);
    if(id_product=="") {
        alert("Mã sản phẩm không được để trống");
        return false;
    }
    if(kt_id_product==true) {
        alert("Mã sản phẩm phải để ở định dạng số");
        return false;
    }
    var name_product=document.forms["myForm"]["name_product"].value;
    if(name_product=="") {
        alert("Tên sản phẩm không được để trống");
        return false;
    }
    //Nhập số lượng muốn mua
    var amount=document.forms["myForm"]["amount"].value;
    var kt_amount=isNaN(amount);
    if((amount=="")||(amount<=0)){
        alert("Số lượng không được để trống và phải lớn hơn 0");
        return false;
    }
    if(kt_amount == true) {
        alert("Số lượng sản phẩm đang có phải để ở định dạng số");
        return false;
    }
}
</script>
<?php 
include("connection.php");
$sql = "select * from admin";

$kt = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($kt)) {
    if($_SESSION['admin'] == $row['username']){
        $name = $row['name'];
        $id_admin = $row['id_admin'];
    }
}
$sqli = "select * from product where id_product = '$_GET[id_product]'";

$kti = mysqli_query($conn,$sqli);

$rowi = mysqli_fetch_array($kti);
if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
    $id_product=$_POST["id_product"];
    $information_product=$_POST["information_product"];
    $name_product=$_POST["name_product"];
    $price=$_POST["price"];
    $amount=$_POST["amount"];
    $id_class_product=$_POST["id_class_product"];
    if ($id_product == "" || $name_product == "" || $amount==""|| $price=="" ||  $information_product=="") {
    }else 
    if (($_FILES["img"]["type"] != "image/gif") && ($_FILES["img"]["type"] != "") && ($_FILES["img"]["type"] != "image/jpeg")&& ($_FILES["img"]["type"] != "image/pjpeg")&& ($_FILES["img"]["type"] != "image/jpg")&& ($_FILES["img"]["type"] != "image/png"))
    {
        ?>
        <script type="text/javascript">
            alert('File không đúng định dạng');
        </script>
        <?php
    }
    else if($_FILES['img']['size'] > 1000000)
    {
        ?>
        <script type="text/javascript">
            alert('Kích cỡ file phải nhỏ hơn 1MB');
        </script>
        <?php
    }
    else if($_FILES['img']['size'] =="")
    {
        ?>
        <script type="text/javascript">
            alert('Bạn chưa chọn file ảnh');
        </script>
        <?php
    } 
    else{
        $img=$_FILES['img']['name'];
        $url_image_product='upload/product/'.$img;
        $sql = "UPDATE `product` SET `id_product`= '$id_product',`name_product`='$name_product', `price`='$price', `amount`='$amount', `information_product`='$information_product', `url_image_product`='$url_image_product', `id_admin`='$id_admin', `id_class_product` ='$id_class_product' where id_product = '$_GET[id_product]'";
        $result=mysqli_query($conn,$sql);
        move_uploaded_file($_FILES['img']['tmp_name'],'../upload/product/'.$img);
        if($result)
        {
            ?>
            <script type="text/javascript">
                alert('Update thành công');
                window.location.href = 'index.php?page=product&&title=product';
            </script>
            <?php
        }else{
             ?>
            <script type="text/javascript">
                alert('Update thất bại');
            </script>
            <?php
        }
    }
}
?>
<body>
    <div class="container" style="margin-left: 110px;margin-top: 100px;">
        <div class="container">
            <form class="form-horizontal" role="form" action="" method="post" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mã sản phẩm</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="id_product" name="id_product" value="<?php echo $rowi['id_product'] ?>"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Loại sản phẩm</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_class_product">
                          <option value="1">Thức ăn</option>
                          <option value="2">Chuồng, nhà, giường, túi</option>
                          <option value="3">Quần áo</option>
                          <option value="4">Vòng cổ, dây xích</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="textbox" class="form-control" id="name_product" name="name_product" value="<?php echo $rowi['name_product'] ?>" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Giá sản phẩm</label>
                <div class="col-sm-10">
                    <input type="textbox" class="form-control" id="price" name="price" value="<?php echo $rowi['price'] ?>" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Số lượng</label>
                <div class="col-sm-10">
                    <input type="textbox" class="form-control" id="amount" name="amount" value="<?php echo $rowi['amount'] ?>" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Thông tin sản phẩm</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="information_product" required=""><?php echo $rowi['information_product'] ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1">Upload ảnh</label>
                <div class="col-sm-10 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1">
                    <input type="file" name="img" size="45" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="btn_submit" style="background-color: green;color: #FFFFFF">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>