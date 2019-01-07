
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
                $sql = "select * from service where id_service = $_GET[id]";
                $kt= mysqli_query($conn, $sql);
                $dong = mysqli_fetch_array($kt);
            ?>
            <h3 class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" style="color:steelblue; font-size: 25px; font-weight: 700; margin: 10px;"><?php echo $dong['name_service']?></h3>

            <p class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="col-sm-10 col-md-10" style="margin: 20px 0px; text-align: justify; background: #e4f2e7; padding: 10px 10px; border: 1px dashed gray; font-weight: bold; font-style: italic; border-radius: 7px;">
                <?php echo $dong['openning']?>
            </p>

            <p class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class="col-sm-12 col-md-12" style="text-align: justify; line-height: 1.4em; font-size: 20px; font-family: sans-serif;">
                <?php echo $dong['content']?>
            </p>
            
            <h3 class="wow zoomInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" style="color:steelblue; font-size: 25px; font-weight: 700; margin: 10px;">Một số hình ảnh về <?php echo $dong['name_service']?></h3>
            <?php
                $sql = "select * from image_service where id_service = $_GET[id]";
                $kt= mysqli_query($conn, $sql);
                while($dong = mysqli_fetch_array($kt)){
            ?>
            <img class="col-md-12 col-sm-12" src="upload/dichvu/<?php echo $dong['img']?>" style="padding: 10px; width: 500px; margin-left: 10px;"  />
            <?php
                }
            ?>
            <div class="col-sm-12 col-md-12 " style="margin: 20px 0px; background-color: snow;  border-radius: 20px; box-shadow: 9px 8px 9px 3px rgba(0,0,0,0.3);">
                
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
                            $sql="SELECT * FROM service_comment, users where service_comment.id_user = users.id_users AND service_comment.id_service = $_GET[id]";
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
                
             
           <div class="col-sm-12 col-md-12" style="margin : 20px 0px;">
                
               <?php
                if(isset($_SESSION['username'])){
                    $name= $_SESSION['username'];
                    $sql = "select * from users where username = '$name'";
                    $kt = mysqli_query($conn,$sql);
                      while ($row = mysqli_fetch_array($kt)){
                   ?>
               <form id="login" method="post" onsubmit="return validateForm()">
                   <div id="head2">
                        <span class="glyphicon glyphicon-align-justify col-sm-1 col-md-1"></span>
                        <p style="font-size: 30px; color: aliceblue; padding: 5px;"> Đăng ký dịch vụ</p>   
                   </div> 
                    <p style="font-style: oblique; font-family: serif;">Mời bạn điền đầy đủ thông tin vào đây để đăng ký.</p>
                    <div class="form-group col-sm-11 col-md-11">
                        <label >Username:</label>
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['fullname']?>"/>
                    </div> 
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Email:</label>
                        <input type="email" id="email" class="form-control" name="email"  value="<?php echo $row['email']?>"/>
                   </div>
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Phone number:</label>
                        <input type="text" id="phone_number" class="form-control" name="phone_number"  value="<?php echo $row['phone_number']?>" />
                   </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn-success" name="service_submit" value="Đăng ký" style="margin-bottom: 10px;">
                    </div>
               </form>
                        
              <?php
                     }
                        if(isset($_POST['service_submit'])){
                            $username= $_POST["username"];
                            $email= $_POST["email"];
                            $phone_number= $_POST["phone_number"];
                            
                            $sql="INSERT INTO `service_user`(`id_service`, `name_user`, `email`, `sdt`, trangthai) VALUES ('$dong[id_service]','$username','$email','$phone_number', 2)";
                            $kt= mysqli_query($conn, $sql);
                            ?>
                                <script type="text/javascript">
                                        window.location = 'http://localhost/Spa_ChoMeo/index.php?page=dichvu&&id=<?php $dong['id_service']?>';
					alert("Đăng ký thành công! Chúng tôi sẽ sớm liên hệ với bạn.");
                                        
				</script>
                            <?php
                        }
                    
                }else{
                     ?>
                <form id="login" method="post" onsubmit="return validateForm()">
                    <div id="head2">
                        <span class="glyphicon glyphicon-align-justify col-sm-1 col-md-1"></span>
                        <p style="font-size: 30px; color: aliceblue; padding: 5px;"> Đăng ký dịch vụ</p>   
                   </div>  
                    
                    <p style="font-style: oblique; font-family: serif;">Mời bạn điền đầy đủ thông tin vào đây để đăng ký.</p>
                   <div class="form-group col-sm-11 col-md-11">
                        <label >Username:</label>
                        <input type="text" id="username" class="form-control" name="username" required="">
                    </div> 
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Email:</label>
                        <input type="email" id="email" class="form-control" name="email" required="">
                   </div>
                    
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Phone number:</label>
                        <input type="text" id="phone_number" class="form-control" name="phone_number" required="" >
                   </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn-success" name="service_submit" value="Đăng ký" style="margin-bottom: 10px;">
                    </div>
                     <?php
                        if(isset($_POST['service_submit'])){
                            $username= $_POST["username"];
                            $email= $_POST["email"];
                            $phone_number= $_POST["phone_number"];
                            
                            $sql="INSERT INTO `service_user`(`id_service`, `name_user`, `email`, `sdt`, trangthai) VALUES ('$dong[id_service]','$username','$email','$phone_number', 2)";
                            $kt= mysqli_query($conn, $sql);
                            ?>
                                <script type="text/javascript">
					alert("Đăng ký thành công! Chúng tôi sẽ sớm liên hệ với bạn.");
				</script>
                            <?php
                        }
                     ?>
               </form>
               <?php
                }
               ?>
            </div>
            
        </div>
        
        <div class="container col-sm-4 col-md-4">
            <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;">
                <h3 class="page-header" style="color: unset; ">Giới thiệu về Spa</h3>
                <?php
                    $sql= "select * from introduction";
                    $kt= mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($kt)){
                ?>
                <div style="padding-bottom: 5px;">
                    <span class="glyphicon glyphicon-pencil"  style="font-size: 15px; color:indigo;"></span>

                    <a id="dichvu" style="color: seashell;" href='index.php?page=gioithieu&&id=<?php echo $row["id"]?>'><?php echo $row['title']?></a><br/>
                </div>   
                <?php
                    }
                ?>
            </div>
            
            <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;">
                <h3 class="page-header" style="color: unset; ">Dịch vụ của chúng tôi</h3>
                <?php
                    $sql= "select * from service";
                    $kt= mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($kt)){
                ?>
                <div style="padding-bottom: 5px;">
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
