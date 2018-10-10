<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.woff" />
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <link rel="stylesheet" href="library/animate_css/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
  <link href="rateit/src/rateit.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="rateit/src/jquery.rateit.js" type="text/javascript"></script> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/86701580/mypersonalcdn/renda/renda-icon-font.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body{
        margin-left: 170px;
          margin-top: 100px;
    }
</style>
<body>
    <div class="container">
        
            <table class="table table-striped table-hover table-bordered" style="">
                <tr class="info">
                    <td style="width: 150px; text-align: center;font-weight:bold">Mã</td>
                    <td style="width: 200px; text-align: center;font-weight:bold;word-wrap: break-word;">Tên khách hàng</td>
                    <td style="width: 250px; text-align: center;font-weight:bold;word-wrap: break-word;">Email</td>
                    <td style="width: 150px; text-align: center;font-weight:bold">Số điện thoại</td>
                    <td style="width: 120px; text-align: center;font-weight:bold">Địa chỉ</td>
                    <td style="width: 200px; text-align: center;font-weight:bold">Dịch vụ đăng ký</td>
                    <td style="width: 200px; text-align: center;font-weight:bold">Loại dịch vụ</td>
                    <td style="width: 120px; text-align: center;font-weight:bold">Đơn giá</td>
                    <td style="width: 200px; text-align: center;font-weight:bold">Trạng thái</td>
                </tr>
                <?php
                    include("connection.php");
                    $sql = "select * from service_user, service where service.id_service = service_user.id_service";
                    $kt= mysqli_query($conn, $sql);
                    while($dong = mysqli_fetch_array($kt)){
                ?>
                      <tr>
                            <td style="width: 150px; text-align: center;"><?php echo $dong['id']?></td>
                            <td style="width: 200px; text-align: center;"><?php echo $dong['name_user']?></td>
                            <td style="width: 250px; text-align: center;"><?php echo $dong['email']?></td>
                            <td style="width: 150px; text-align: center;"><?php echo $dong['sdt']?></td>
                            <td style="width: 120px; text-align: center;"><?php echo $dong['address']?></td>
                            <td style="width: 200px; text-align: center;"><?php echo $dong['name_service']?></td>
                            <td style="width: 200px; text-align: center;"><?php echo $dong['weight']?></td>
                            <td style="width: 120px; text-align: center;"><?php echo $dong['price']?></td>
                            <td style="width: 200px; text-align: center;">
                                <?php if($dong['trangthai'] == 3){
                                            echo "<p style='color: green;'>Đã thanh toán</p>";
                                       }else if($dong['trangthai'] == 1){
                                       ?>
                                           <a href="index.php?page=xuly_dichvu&&id=<?php echo $dong['id']; ?>" ><button type=submit" class='btn btn-success'>Xử lý</button></a>
                                           <p style='color: red;'>Chưa xử lý</p>
                                       <?php
                                       }else if($dong['trangthai'] == 2){
                                       ?>
                                           <a href="index.php?page=xuly_dichvu&&id=<?php echo $dong['id']; ?>" ><button type=submit" class='btn btn-success'>Xử lý</button></a>
                                           <p style='color: blue;'>Chưa thanh toán</p>
                                       <?php
                                      
                                       }
                                ?>
                            </td>
                        </tr>      
                <?php
                    }
                ?>
                
            </table>
        
    </div>
</body>
</html>