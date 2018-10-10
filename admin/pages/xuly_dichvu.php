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
            background-color: #f1f1f1;
        }
    </style>
    <body>
        <?php
        include("connection.php");
        $sql = "select * from service_user where id = $_GET[id]";
        $kt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($kt);
        ?>

        <form action="" method="post">
            <div class="form-group col-sm-11 col-md-11" >
                <label >Username:</label>
                <div class="input-group">
                    <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['name_user'] ?>"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                </div>
            </div> 
            <div class="form-group col-sm-11 col-md-11">
                <label>Email:</label>
                <div class="input-group">
                    <input type="email" id="email" class="form-control" name="email"  value="<?php echo $row['email'] ?>"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                </div>

            </div>
            <div class="form-group col-sm-11 col-md-11">
                <label>Phone number:</label>
                <div class="input-group">
                    <input type="text" id="phone_number" class="form-control" name="phone_number"  value="<?php echo $row['sdt'] ?>" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                </div>
            </div>
            <div class="form-group col-sm-11 col-md-11">
                <label>Address:</label>
                <div class="input-group">
                    <?php
                    $st = "An Giang, Bà Rịa-Vũng Tàu, Bạc Liêu, Bắc Kạn, Bắc Giang, Bắc Ninh, Bến Tre, Bình Dương, Bình Định, "
                            . "Bình Phước, Bình Thuận, Cà Mau, Cao Bằng, Cần Thơ*, Đà Nẵng*, Đắk Lắk, "
                            . "Đăk Nông, Điện Biên, Đồng Nai, Đồng Tháp, Gia Lai, Hà Giang, Hà Nam, "
                            . "Hà Nội*, Hà Tĩnh, Hải Dương, Hải Phòng*, Hậu Giang, Hòa Bình, "
                            . "Thành phố Hồ Chí Minh*, Hưng Yên, Khánh Hòa, Kiên Giang, Kon Tum, "
                            . "Lai Châu, Lâm Đồng, Lạng Sơn, Lào Cai, Long An, Nam Định, Nghệ An, "
                            . "Ninh Bình, Ninh Thuận, Phú Thọ, Phú Yên, Quảng Bình, Quảng Nam, "
                            . "Quảng Ngãi, Quảng Ninh, Quảng Trị, Sóc Trăng, Sơn La, Tây Ninh, "
                            . "Thái Bình, Thái Nguyên, Thanh Hóa, Thừa Thiên-Huế, Tiền Giang, "
                            . "Trà Vinh, Tuyên Quang, Vĩnh Long, Vĩnh Phúc, Yên Bái";
                    $province = explode(",", $st);
                    echo "<select name='address' class='form-control'>";
                    if (!isset($address)) {
                        echo "<option>" . $row['address'] . "</option>";
                    }
                    for ($i = 0; $i <= 62; $i++) {
                        ?>

                        <option <?php if (isset($address) && $address == '$province[$i]') echo "selected=\"selected\""; ?> value="<?php echo "$province[$i]" ?>" ><?php echo "$province[$i]" ?></option>

                        <?php
                    }
                    echo "</select>";
                    ?>

                    <span class="input-group-addon"><span class="glyphicon glyphicon-transfer"></span></span>
                </div>

            </div>
            <div class="form-group col-sm-11 col-md-11">
                <label>Dịch vụ đăng ký:</label>

                <div class="input-group">
                    <select class="form-control" name="service">
                        <?php
                        $sql = "SELECT * FROM service WHERE id_service = $row[id_service]";
                        $kt = mysqli_query($conn, $sql);
                        $dong = mysqli_fetch_array($kt);
                        ?>
                        <option value="<?php echo $dong['id_service'] ?>"><?php echo $dong['name_service'] ?></option>
                        <?php
                        $sql = "SELECT * FROM service where id_service != $dong[id_service]";
                        $kt = mysqli_query($conn, $sql);
                        while ($service = mysqli_fetch_array($kt)) {
                            ?>
                            <option value="<?php echo $service['id_service'] ?>"><?php echo $service['name_service'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-11 col-md-11">
                <label>Mức cân lựa chọn:</label>

                <div class="input-group">
                    <select class="form-control" name="weight">
                        <?php
                        $sql = "SELECT * FROM service_user WHERE id_service = $row[id_service]";
                        $kt = mysqli_query($conn, $sql);
                        $dong = mysqli_fetch_array($kt);
                        ?>
                        <option value="<?php echo $dong['weight'] ?>"><?php echo $dong['weight'] ?></option>
                        <?php
                        $sql = "SELECT * FROM price_service where id_service = $row[id_service]";
                        $kt = mysqli_query($conn, $sql);
                        while ($service = mysqli_fetch_array($kt)) {
                            ?>
                            <option value="<?php echo $service['weight'] ?>"><?php echo $service['weight'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-11 col-md-11">
                <label>Trạng thái:</label>

                <div class="input-group">
                    <select class="form-control" name="trangthai">
                        <?php
                        $sql = "SELECT * FROM service_user WHERE trangthai = $row[trangthai]";
                        $kt = mysqli_query($conn, $sql);
                        $dong = mysqli_fetch_array($kt);
                        ?>
                        <option value="<?php echo $dong['trangthai'] ?>"><?php
                            if ($dong['trangthai'] == 1) {
                                echo "Chưa xử lý";
                            } else if ($dong['trangthai'] == 2) {
                                echo "Chưa thanh toán";
                            } else if ($dong['trangthai'] == 3) {
                                echo "Đã thanh toán";
                            }
                            ?></option>
                        <option value="1">Chưa xử lý</option>
                        <option value="2">Chưa thanh toán</option>
                        <option value="3">Đã thanh toán</option>
                    </select>
                </div>
            </div>


            <div class="col-md-11 col-sm-11" style="padding: 10px;">
                
                <?php
                $id=$_GET['id'];
                ?>
                <input type="submit" class="btn btn-success" name="btn_xuly" value="Xử lý"/>
                <a href="index.php?page=xoa_quanly_dichvu&&id=<?php echo $id ?>"><input type="button" class="btn btn-danger" name="btn_xoa" value="Xóa"/></a>
                
                
                
                
            </div>
        </form>

        <?php
        if (isset($_POST['btn_xuly'])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone_number"];
            $address = $_POST["address"];
            $weight = $_POST['weight'];
            $trangthai = $_POST['trangthai'];
            $id_service = $_POST['service'];
            $sql = "SELECT * from price_service where id_service = '$id_service' AND weight = '$weight' ";
            $kt = mysqli_query($conn, $sql);
            $a = mysqli_fetch_array($kt);
            $price = $a['price'];
            $sql = "UPDATE `service_user` SET `name_user`='$username',`email`='$email',`sdt`='$phone_number',`trangthai`='$trangthai',`address`='$address',`weight`='$weight',`price`='$price' WHERE id = $_GET[id]";
            $kt = mysqli_query($conn, $sql);
            ?>
            <script>window.location = "http://localhost/Spa_ChoMeo/admin/index.php?page=quanly_dichvu&&tieude=quanly_dichvu";</script>
            <?php
        }
        ?>
    </body>

</html>