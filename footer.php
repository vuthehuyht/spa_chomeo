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
</head>
<style type="text/css">

#menu-dichvu #item{
  width:80%;
  background-color: initial;
  margin: 5px 0px;
}
#menu-dichvu #item a{
  text-decoration: none;
}
#menu-dichvu #item a h4{
  padding: 5px 0px;
  color: whitesmoke;
  font-size: 14px;
}

#menu-dichvu #item a:hover h4{
  background-color: maroom;
  border-left: 5px solid #a11119;
  min-width: 100%;
  box-shadow: 0 0 6px #545454;
  -moz-box-shadow: 0 0 6px #545454;
  -webkit-box-shadow: 0 0 6px #545454;
  transition: all 0.1s ease-out;
  -o-transition: all 0.1s ease-out;
  -moz-transition: all 0.1s ease-out;
  -webkit-transition: all 0.1s ease-out;
}

</style>
<body>
    
    <div class="container-fluid" style="background-color: bisque; width: 100%; ">
        <div class="container">
            
                <div class="col-sm-12 col-md-4" style="padding: 10px; ">
                    
                    <img src="upload/icons/chinhhang.jpg" style="height: 60px; width: 60px; float:left; "/>
                    <p style="position: relative; top: 13px; left: 15px;">Sản phẩm</p>
                    <p style="position: relative; top: 0px; left: 15px;"><strong>CHÍNH HÃNG</strong></p>
                </div>
            
                <div class="col-sm-12 col-md-4" style="padding-top: 10px; padding-bottom: 10px;">

                    <img src="upload/icons/dichvu.jpg" style="height: 60px; width: 60px; float:left; "/>
                        <p style="position: relative; top: 13px; left: 15px;">Dịch vụ</p>
                        <p style="position: relative; top: 0px; left: 15px;"><strong>CHẤT LƯỢNG</strong></p>
                </div>

                <div class="col-sm-12 col-md-4" style="padding-top: 10px; padding-bottom: 10px;">

                    <img src="upload/icons/tuvan.jpg" style="height: 60px; width: 60px; float:left; "/>
                        <p style="position: relative; top: 13px; left: 15px;">Tư vấn</p>
                        <p style="position: relative; top: 0px; left: 15px;"><strong>CHUYÊN NGHIỆP</strong></p>
               </div>
                
        </div>
    </div>
    
    
    <div class="container-fluid" style="background-color: black; opacity: 0.85;">
    <div class="container">
      
        <div  class="col-sm-6 col-md-4 wow zoomIn" style="padding-top: 30px;">
            <img src="upload/image/transparentpets.png" width="230px" height="90px">
            <address>
                <strong style="color: oldlace;"><h3>Trung tâm Chăm sóc và Dịch vụ Spa Chó Mèo</h3></strong>
                <p style="color: #ffffff;"><abbr title="Phone" style="font-size: 20px;">Địa chỉ:</abbr> Số 324 Nguyễn Trãi, Quận Thanh Xuân, Hà Nội.</p>
                <p style="color: #ffffff;"><abbr title="Phone" style="font-size: 20px;">Phone number:</abbr> (+84)904 613 523.</p>
                <p style="color: #ffffff;"><abbr title="Phone" style="font-size: 20px;">Email:</abbr> okkemdau@gmail.com </p>
                <p style="color: #ffffff;">
                    <abbr title="Phone" style="font-size: 20px;">Website:</abbr> <a href="index.php" style="color: #ffffff;">http://spa.vn </a></p>

            </address>
        </div>



        <div  class="col-sm-12 col-md-4 wow zoomIn" style="padding-top: 30px;">
            <strong style="color: #ffffff; font-style: italic;"><h3>Các dịch vụ của chúng tôi</h3></strong>
            <div id="menu-dichvu">
                <?php
                    $sql= "select * from service";
                    $kt= mysqli_query($conn, $sql);
                    while($dong = mysqli_fetch_array($kt)){
                ?>
                <div id="item">
                    <a href="index.php?page=dichvu&&id=<?php echo $dong["id_service"]?>">
                        <h4><?php echo $dong['name_service']?></h4>
                    </a>
                </div>
                 
                <?php
                    }
                ?>
            </div>
            
           <strong style="color: #ffffff; font-style: italic;"><h3>Follow Us</h3></strong>
           <img src="upload/image/icon_Facebook.png" width="35px" style="margin: 0px 3px;">
           <img src="upload/image/icon-youtube.png" width="35px" style="margin: 0px 3px;">
           <img src="upload/image/icon_zalo.png" width="35px" style="margin: 0px 3px;">
           <img src="upload/image/icon_twitter.png" width="35px" style="margin: 0px 3px;">
            
        </div>
            <div  class="col-sm-6 col-md-4 wow zoomIn" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9156767409627!2d105.8057703134164!3d20.99601698601612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puIChWTlUgVW5pdmVyc2l0eSBvZiBTY2llbmNlKQ!5e0!3m2!1svi!2s!4v1524571853830" 
                      width="100%" height="285px;" frameborder="0" style="border:0; padding-top: 50px;" allowfullscreen></iframe>
              
              <strong style="color: #ffffff; font-style: italic;"><h3>Giờ làm việc</h3></strong>
              <address>
                  <p style="color: #ffffff;">Thứ 2 - Thứ 6: 8.00AM to 4.00PM</p>
                  <p style="color: #ffffff;">Thứ 7 - Chủ nhật: 8.00AM to 3.00PM</p>
              </address>
            </div>
      </div>
        

        
    
    <div class="caption" style="border-top: 1px whitesmoke solid; margin-top: 20px;">
      <h4 style="color: whitesmoke;">© 2018 My Blog. All Rights Reserved.</h4>
    </div>
  </div> 


</body>
</html>

