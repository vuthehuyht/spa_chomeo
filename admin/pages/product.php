<!DOCTYPE html>
<html>
<head>
 <title></title>
 <meta charset="utf-8">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" href="library/animate_css/animate.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
 <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <style type="text/css">
 #product{
    background-color: #eee;
    color: #23527c;
}
</style>
</head>
<body>
    <div class="container" style="margin-top: 100px;margin-left: 110px;">
       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="index.php?page=add_product&&title=product"><button class="btn btn-default" style="background-color: green;color: #FFFFFF;margin-left: -205px; margin-bottom: 20px;">THÊM SẢN PHẨM</button></a>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered" style="width: 95%">
        <?php
        include("connection.php");
        $sql = "select * from product,admin,class_product where product.id_admin = admin.id_admin AND product.id_class_product = class_product.id_class_product";
        $kt = mysqli_query($conn,$sql);
        ?>
        <tr class="success">
            <td style="font-weight: bold">Ảnh sản phẩm</td>
            <td style="font-weight: bold">Thông tin sản phẩm</td>
            <td style="font-weight: bold;width: 18%">Thao tác</td>
        </tr>
        <?php 
        while ($row = mysqli_fetch_array($kt)) {
            $id_product = $row["id_product"];
            $name_product = $row["name_product"];
            $price =  $row["price"];
            $amount =  $row["amount"];
            $information_product =  $row["information_product"];           
            $name_admin = $row["name"];
            $url_image_product = $row["url_image_product"];
            $name_class_product = $row["name_class_product"];
            echo "<tr>
            <td><img src='../$url_image_product' width='200px;' height='200xp' alt='hình ảnh' /></td>
            <td>
            <span style='font-weight:bold'>Mã sản phẩm</span> : $id_product</br>
            <span style='font-weight:bold'>Loại sản phẩm</span> : $name_class_product</br>
            <span style='font-weight:bold'>Tên sản phẩm</span> : $name_product</br>
            <span style='font-weight:bold'>Giá sản phẩm</span> : $price đồng</br>
            <span style='font-weight:bold'>Số lượng trong kho</span> : $amount</br>
            <span style='font-weight:bold'>Thông tin sản phẩm</span> : $information_product</br>
            <span style='font-weight:bold'>Người đăng</span> : $name_admin</br>
            </td>
            <td><a href='index.php?page=update_product&&id_product=$id_product&&title=product'><button class='btn btn-primary' >UPDATE</button></a>
            <a href='load.php?page=modal_delete_product&&id_product=$id_product' class='btn btn-danger' data-toggle='modal' data-target='#delete_confirm' >DELETE</a>
            </tr>";
        }
        ?>
    </table>
</div>
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
</body>
</html>
