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
  <style type="text/css">

</style>
<script>
	new WOW().init();
</script>
</head>

<body>
  <?php
  include 'connection.php';
  ?>

  <div class="container-fluid">
    <center>
      <div class="page-header" > 
        <h1><label data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class=" wow zoomInLeft"  style="color: #b92c28;">
          Home <span class="glyphicon glyphicon-chevron-right"></span> Giới thiệu
        </label> </h1>
      </div>
    </center>
    <div class="container col-sm-8 col-md-8">
      <div class="col-sm-12 col-md-12">
       <?php

       $sql = "select * from introduction where id = $_GET[id]";
       $kt= mysqli_query($conn, $sql);
       $dong = mysqli_fetch_array($kt);
       ?>
       <div class="col-sm-12 col-md-10 " style="margin-left:10px; border: none; padding-top: 12px;">
        <span style=" color: indigo; font-size: 28px; font-family: -webkit-body; padding: 10px; font-weight: 600;">
          <?php echo $dong['title']; ?>
        </span>

      </div>
      <div class="col-sm-12 col-md-12">
        <P align="justify" style="font-size: 16px; padding: 10px; line-height: 1.6em;">
          <?php 

          echo $dong['content'];

          ?>
        </P>
      </div>
    </div>

    <div class="col-sm-12 col-md-12">
      <?php 
      $sql="SELECT * FROM `image_introduction` WHERE id_image= $_GET[id] LIMIT 1";
      $kt= mysqli_query($conn, $sql);
      while($dong = mysqli_fetch_array($kt)){
        ?>
        <img
        style="width: 100%;height: 350px;margin-bottom: 50px;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);"
        src="upload/gioithieu/<?php echo $dong['image']?>" data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1" />
        <?php
      }
      ?>
    </div>
  </div>

  <div  class="col-sm-4 col-md-4" style="">
    <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);">
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

    <div class=" col-sm-12 col-md-12" style="margin: 10px 0px;; background-color: yellowgreen; opacity: 0.9; border-radius: 10px;-webkit-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75); box-shadow: -1px 14px 51px -17px rgba(0,0,0,.75);">
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