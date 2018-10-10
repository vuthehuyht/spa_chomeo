
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
  <style type="text/css">
  body{
    background: #f1f1f1; 
  }
  .container #dichvu:hover{
    text-decoration: none;
  }
  #login{
    background-color: whitesmoke; 
    border-collapse: collapse;
    box-shadow: 4px 8px 9px 4px rgba(0,0,0,0.2);
    border-radius: 20px;
  }
  #login #head2{
    background-color: teal;
    margin-top: 0px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding: 10px;

  }
  #login #head2 span{
    position: relative;
    top: 15px;
    color: aliceblue;
  }
  #login .form-group input[type="submit"]{
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 170px;
    border-radius: 10px;
  }
  .slider {
   margin-top: 10px;
   -webkit-appearance: none;
   height: 20px;
   background: white;
   outline: none;
   opacity: 1;
   border-radius: 5px;
   margin-bottom: 3px;
 }

 .slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 4px;
  height: 20px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 20px;
  height: 20px;
  background: #4CAF50;
  cursor: pointer;
}







</style>
<script>
	new WOW().init();
</script>


</head>

<body>
  <?php
  include 'connection.php';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  ?>

  <div class="container-fluid" style="background-color: #f1f1f1;">
    <center>
      <div class="col-md-12 col-sm-12" style="background-color: white;">
        <div class="page-header"> 
          <h2><label data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class=" wow zoomInLeft"  style="color: #b92c28;">
            Home <span class="glyphicon glyphicon-chevron-right"></span> Dịch vụ
          </label> </h2>
        </div>
      </div>
    </center>
    <div class="container col-sm-8 col-md-8">
      <?php
      $sql = "select * from service where id_service = '$_GET[id]'";
      $kt= mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($kt);
      ?>
      <h3 class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" style="color:steelblue; font-size: 25px; font-weight: 700; margin: 10px;"><?php echo $row['name_service']?></h3>

      <p class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="col-sm-10 col-md-10" style="margin: 20px 0px; text-align: justify; background: #e4f2e7; padding: 10px 10px; border: 1px dashed gray; font-weight: bold; font-style: italic; border-radius: 7px;">
        <?php echo $row['openning']?>
      </p>

      <p class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="col-sm-12 col-md-12" style="text-align: justify; line-height: 1.4em; font-size: 20px; font-family: sans-serif;">
        <?php echo $row['content']?>
      </p>

      <h3 class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" style="color:steelblue; font-size: 25px; font-weight: 700; margin: 10px;">Một số hình ảnh về <?php echo $row['name_service']?></h3>
      <?php
      $sql = "select * from image_service where id_service = '$_GET[id]'";
      $kt= mysqli_query($conn, $sql);
      while($img = mysqli_fetch_array($kt)){
        ?>
        <img class="col-md-3 col-sm-3 img-thumbnail" src="upload/dichvu/<?php echo $img['img']?>" style="padding: 10px; margin-left: 0px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)"  />
        <?php
      }
      ?>
      <div class="col-sm-12 col-md-12 " style="margin: 20px 0px; background-color: snow;  border-radius: 20px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">

        <form class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1"  method="post" onsubmit="return validateForm()" style="margin-top: 10px; background-color: whitesmoke; ">
          <div style="background-color: snow; border-bottom: 1px black solid; border-top-left-radius: 10px;
          border-top-right-radius: 10px;">
          <span class="glyphicon glyphicon-align-justify col-sm-1 col-md-1" style="margin: 15px; font-size: 22px;"></span>
          <p style="font-size: 30px; color: black; padding: 5px;">

          Đánh giá và bình luận</p>   
        </div> 
        <?php
        if(isset($_SESSION['username'])){

          ?>
          <div class="col-md-12 col-sm-12">
            <h5 class="col-sm-12 col-md-6">
            Đánh giá dịch vụ của chúng tôi: </h5>
            <div class="col-md-6 col-sm-12">
              <input type="range" min="1" max="100" value="50" name="rate"  class="slider" id="myRange">
              <p><span id="demo"></span>/100</p>
              <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                  output.innerHTML = this.value;
                }
              </script>
            </div>
          </div>

          <div class="form-group col-sm-11 col-md-11">
            <h4>Viết bình luận<span class="glyphicon glyphicon-pencil"></span></h4>
            <textarea class="form-control" name="comment" rows="3" required=""></textarea>
          </div>
          <a href="index.php?page=dichvu&&id=<?php echo $dong["id_service"]?>">
            <button style="margin-left: 13px; margin-bottom: 10px;" type="submit" name="btn_comment" class="btn btn-primary">Gửi</button>
          </a>

          <?php
          if(isset($_POST['btn_comment'])){
            $comment=$_POST['comment'];
            $id_service=$_GET['id'];
            $rate= $_POST['rate'];
            $time =date("Y/m/d H:i:s");
            $name= $_SESSION['username'];
            $sql = "select * from users where username = '$name'";
            $kt = mysqli_query($conn,$sql);
            $dong=  mysqli_fetch_array($kt);
            $id_user= $dong['id_users'];
            $sql="SELECT * FROM service_comment where id_service = '$id_service' AND id_user = '$id_user' ";
            $kt= mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($kt);
            if($num_rows != 0){
             $sql="UPDATE `service_comment` SET `comment`='$comment',`tgian`='$time',`rate`='$rate' WHERE id_service = '$id_service' AND id_user = '$id_user' ";
             $kt= mysqli_query($conn, $sql);
           }else{
             $sql="INSERT INTO `service_comment`( `id_user`, `id_service`, `comment`, `tgian`, rate) VALUES ('$id_user', '$id_service', '$comment', '$time', '$rate')";
             $kt= mysqli_query($conn, $sql);
           }
           ?>
           <script type="text/javascript">
             alert("Cảm ơn bạn đã bình luận về dịch vụ của chúng tôi.");
           </script>
           <?php
         }
       }
       ?>       
     </form>
     <div  class="col-md-12 col-sm-12" style="margin-top: 20px;">
      <div class="col-sm-5 col-md-5" style="font-size: 16px;">
        Khách hàng bình chọn:
      </div>
      <div data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="progress wow zoomInLeft" style="">
       <?php

       $sql="SELECT AVG(rate) as dtb FROM service_comment where id_service = $_GET[id] ";
       $kt= mysqli_query($conn, $sql);
       $dong = mysqli_fetch_array($kt);
       ?>
       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo number_format($dong['dtb'], 2)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($dong['dtb'], 2)?>%;">
        <?php
        echo number_format($dong['dtb'], 2)."%";
        ?>
      </div>
    </div>
  </div>
  <?php
  $sql="SELECT * FROM service_comment, users where service_comment.id_user = users.id_users AND service_comment.id_service = '$_GET[id]'";
  $kt= mysqli_query($conn, $sql);
  while($dong = mysqli_fetch_array($kt)){
    ?>
    <div  class="col-md-11 col-sm-11">

      <div data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="col-md-12 col-sm-12 wow zoomInLeft" style="background-color: whitesmoke; border-radius: 10px;  ">
        <span  style="font-size: 18px; color: #4267b2;">
          <?php echo $dong['fullname']?>
        </span>
        <span  style="font-size: 15px; color: black; ">
          <?php echo $dong['comment']?>
        </span>
      </div>
      <p class="col-sm-11 col-md-11" style="font-size: 12px; padding-left: 25px; padding-top: 3px;">
        <?php echo $dong['tgian'] ?>
      </p>
    </div>
    <?php
  }
  ?>
</div>   
<div class="col-md-12 col-sm-12" style="margin-top: 20px;">
  <button onclick="document.getElementById('dangky').style.display='block'" style="margin-left: 20px;font-size: 0.8rem; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);" type="button" class="btn btn-success" >ĐĂNG KÝ DỊCH VỤ TẠI ĐÂY </button>
</div>
<div id='dangky' class='w3-modal'>
  <form class="w3-modal-content" method='post' action=''>
   <header class="w3-container" style="border-bottom: 1px solid #ededed">
    <span onclick="document.getElementById('dangky').style.display='none'" 
    class="w3-button w3-display-topright" style="background-color:red;color:#FFF">&times;</span>
    <h2 style="padding-top: 10px;font-size: 30px;color: green;float: left"><?php echo $row['name_service']?></h2>

  </header>
  <div class="w3-container">
    <div class="col-sm-8 col-md-8" style=" margin-top: 20px;margin-bottom: 20px; border-right: 1px black solid;">
     <?php
     if(isset($_SESSION['username'])){
      $name= $_SESSION['username'];
      $sql = "select * from users where username = '$name'";
      $kt = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_array($kt)){
       ?>

       <div class="form-group col-sm-11 col-md-11" >
        <label >Username:</label>
        <div class="input-group">
          <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['fullname']?>"/>
          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        </div>
      </div> 
      <div class="form-group col-sm-11 col-md-11">
        <label>Email:</label>
        <div class="input-group">
          <input type="email" id="email" class="form-control" name="email"  value="<?php echo $row['email']?>"/>
          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
        </div>

      </div>
      <div class="form-group col-sm-11 col-md-11">
        <label>Phone number:</label>
        <div class="input-group">
          <input type="text" id="phone_number" class="form-control" name="phone_number"  value="<?php echo $row['phone_number']?>" />
          <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
        </div>
      </div>
      <div class="form-group col-sm-11 col-md-11">
        <label>Address:</label>
        <div class="input-group">
          <?php
          $st="An Giang, Bà Rịa-Vũng Tàu, Bạc Liêu, Bắc Kạn, Bắc Giang, Bắc Ninh, Bến Tre, Bình Dương, Bình Định, "
          . "Bình Phước, Bình Thuận, Cà Mau, Cao Bằng, Cần Thơ*, Đà Nẵng*, Đắk Lắk, "
          . "Đăk Nông, Điện Biên, Đồng Nai, Đồng Tháp, Gia Lai, Hà Giang, Hà Nam, "
          . "Hà Nội*, Hà Tĩnh, Hải Dương, Hải Phòng*, Hậu Giang, Hòa Bình, "
          . "Thành phố Hồ Chí Minh*, Hưng Yên, Khánh Hòa, Kiên Giang, Kon Tum, "
          . "Lai Châu, Lâm Đồng, Lạng Sơn, Lào Cai, Long An, Nam Định, Nghệ An, "
          . "Ninh Bình, Ninh Thuận, Phú Thọ, Phú Yên, Quảng Bình, Quảng Nam, "
          . "Quảng Ngãi, Quảng Ninh, Quảng Trị, Sóc Trăng, Sơn La, Tây Ninh, "
          . "Thái Bình, Thái Nguyên, Thanh Hóa, Thừa Thiên-Huế, Tiền Giang, "
          . "Trà Vinh, Tuyên Quang, Vĩnh Long, Vĩnh Phúc, Yên Bái";
          $province=explode(",",$st);
          echo "<select name='address' class='form-control'>";
          if(!isset($address)){
            echo "<option>".$row['address']."</option>";
          }
          for ($i=0;$i<=62;$i++){

            ?>

            <option <?php if (isset($address) && $address == '$province[$i]') echo "selected=\"selected\"";  ?> value="<?php echo "$province[$i]" ?>" ><?php echo "$province[$i]" ?></option>

            <?php

          }
          echo "</select>";
          ?>

          <span class="input-group-addon"><span class="glyphicon glyphicon-transfer"></span></span>
        </div>

      </div>
      <?php

    }
  }else{
    ?>
    <div class="form-group col-sm-11 col-md-11" >
      <label >Username:</label>
      <div class="input-group">
        <input type="text" id="username" class="form-control" name="username" value="" required=""/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
      </div>
    </div> 
    <div class="form-group col-sm-11 col-md-11">
      <label>Email:</label>
      <div class="input-group">
        <input type="email" id="email" class="form-control" name="email"  required=""/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
      </div>

    </div>
    <div class="form-group col-sm-11 col-md-11">
      <label>Phone number:</label>
      <div class="input-group">
        <input type="text" id="phone_number" class="form-control" name="phone_number"  required="" />
        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
      </div>
    </div>
    <div class="form-group col-sm-11 col-md-11">
      <label>Address:</label>
      <div class="input-group">
        <?php
        $st="An Giang, Bà Rịa-Vũng Tàu, Bạc Liêu, Bắc Kạn, Bắc Giang, Bắc Ninh, Bến Tre, Bình Dương, Bình Định, "
        . "Bình Phước, Bình Thuận, Cà Mau, Cao Bằng, Cần Thơ*, Đà Nẵng*, Đắk Lắk, "
        . "Đăk Nông, Điện Biên, Đồng Nai, Đồng Tháp, Gia Lai, Hà Giang, Hà Nam, "
        . "Hà Nội*, Hà Tĩnh, Hải Dương, Hải Phòng*, Hậu Giang, Hòa Bình, "
        . "Thành phố Hồ Chí Minh*, Hưng Yên, Khánh Hòa, Kiên Giang, Kon Tum, "
        . "Lai Châu, Lâm Đồng, Lạng Sơn, Lào Cai, Long An, Nam Định, Nghệ An, "
        . "Ninh Bình, Ninh Thuận, Phú Thọ, Phú Yên, Quảng Bình, Quảng Nam, "
        . "Quảng Ngãi, Quảng Ninh, Quảng Trị, Sóc Trăng, Sơn La, Tây Ninh, "
        . "Thái Bình, Thái Nguyên, Thanh Hóa, Thừa Thiên-Huế, Tiền Giang, "
        . "Trà Vinh, Tuyên Quang, Vĩnh Long, Vĩnh Phúc, Yên Bái";
        $province=explode(",",$st);
        echo "<select name='address' class='form-control' required=''>";
        if(!isset($address)){
          echo "<option value=''></option>";
        }
        for ($i=0;$i<=62;$i++){

          ?>

          <option value="<?php echo "$province[$i]" ?>" ><?php echo "$province[$i]" ?></option>

          <?php

        }
        echo "</select>";
        ?>

        <span class="input-group-addon"><span class="glyphicon glyphicon-transfer"></span></span>
      </div>

    </div>
    <?php
  }
  ?>

</div>

<div class="col-sm-4 col-md-4" style=" margin-top: 20px;margin-bottom: 20px;">
  <label>Bảng giá cho dịch vụ</label>
  <table class=' table-hover table-bordered col-md-12 col-sm-12 '>
    <tr>
      <td><label>Khối lượng</label></td>
      <td><label>Định giá</label></td>
    </tr>
    <?php
    $id_service = $_GET['id'];
    $sql="SELECT * FROM `price_service`, `service`  WHERE service.id_service = price_service.id_service AND service.id_service = $id_service ";
    $kt = mysqli_query($conn,$sql);
    while ($price = mysqli_fetch_array($kt)){

      ?>
      <tr>
        <td style="padding-left: 10px;"><?php echo $price['weight'] ?></td>
        <td style="padding-left: 10px;"><?php echo $price['price'] ?>k</td>
      </tr>
      <?php
    }
    ?>
  </table>  
  <p style='font-size: 10px'>Giá dịch vụ trên đã bao gồm những sản phẩm cần thiết đi kèm.
  </p>
  <p style="font-size: 16px; font-family: serif; font-weight: 700;">Trọng lượng thú cưng của bạn?</p>

  <select name="weight" id="weight" onchange="priceChanged(this)" required="">
    <option value=""></option>
    <?php
    $id_service = $_GET['id'];
    $sql="SELECT * FROM `price_service`, `service`  WHERE service.id_service = price_service.id_service AND service.id_service = $id_service ";
    $kt = mysqli_query($conn,$sql);
    while ($weight = mysqli_fetch_array($kt)){
      ?>
      <option value="<?php echo $weight['weight'] ?>" ><?php echo $weight['weight'] ?></option>

      <?php

    }
    ?>
  </select>



</div>
</div>
<footer class="w3-container" style="background-color:#ededed;height: 50px;">
  <input type="submit" class="btn btn-success" name="service_submit"value="Đăng ký" />
</footer>
</form>
<?php
if(isset($_POST['service_submit'])){
  $username= $_POST["username"];
  $email= $_POST["email"];
  $phone_number= $_POST["phone_number"];
  $address=$_POST["address"];
  $weight =$_POST['weight']; 
  $id_service = $_GET['id'];
  $sql="SELECT * from price_service where id_service = '$id_service' AND weight = '$weight' ";
  $kt= mysqli_query($conn, $sql); 
  $a = mysqli_fetch_array($kt);
  $price = $a['price'];
  $sql="SELECT * from service_user where id_service = '$id_service' AND email = '$email' AND trangthai = '1' ";
  $kt= mysqli_query($conn, $sql);
  $num = mysqli_num_rows($kt);
  if($num == 0){
    $sql="INSERT INTO `service_user`(`id_service`, `name_user`, `email`, `sdt`, trangthai, weight, price, address) VALUES ('$id_service','$username','$email','$phone_number', '1', '$weight', '$price', '$address')";
    $kt= mysqli_query($conn, $sql);
    ?>
    <script type="text/javascript">
      window.location = 'http://localhost/Spa_ChoMeo/index.php?page=dichvu&&id=<?php echo $dong[id_service]?>';
      alert("Đăng ký thành công! Chúng tôi sẽ sớm liên hệ với bạn.");

    </script>
    <?php

  }else{

    ?>
    <script type="text/javascript">
      window.location = 'http://localhost/Spa_ChoMeo/index.php?page=dichvu&&id=<?php echo $dong[id_service]?>';
      alert("Bạn đã đăng ký dịch vụ này trước đó. Chúng tôi sẽ sớm liên hệ với khách hàng.");

    </script>
    <?php

  }
}
?>
</div>

</div>

<div class="container col-sm-4 col-md-4" style="">
  <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;margin-top: 55px; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
    <h3 class="page-header" style="color: unset; ">Giới thiệu về Spa</h3>
    <?php
    $sql= "select * from introduction";
    $kt= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($kt)){
      ?>
      <div style="padding-bottom: 20px;">
        <span class="glyphicon glyphicon-pencil"  style="font-size: 15px; color:indigo;"></span>

        <a id="dichvu" style="color: seashell;" href='index.php?page=gioithieu&&id=<?php echo $row["id"]?>'><?php echo $row['title']?></a><br/>
      </div>   
      <?php
    }
    ?>
  </div>

  <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;margin-top: 20px; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
    <h3 class="page-header" style="color: unset; ">Dịch vụ của chúng tôi</h3>
    <?php
    $sql= "select * from service";
    $kt= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($kt)){
      ?>
      <div style="padding-bottom: 20px;">
        <span class="glyphicon glyphicon-pencil"  style="font-size: 15px; color:indigo;"></span>

        <a id="dichvu" style="color: seashell;" href='index.php?page=dichvu&&id=<?php echo $row["id_service"]?>'><?php echo $row['name_service']?></a><br/>
      </div>  
      <?php
    }
    ?>
  </div>


</div>
</div>

</body>
</html>
