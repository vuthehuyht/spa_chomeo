<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.woff" />
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <link rel="stylesheet" href="library/animate_css/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
  <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../../ckfinder/ckfinder.js"></script>
  <style type="text/css">
        #gioithieu{
    background-color: #eee;
    color: #23527c;
  }
  </style>
  <script>
	new WOW().init();
</script>
</head>

<body>
    <?php
   include '../connection.php';
   
   ?>
    
<div class="container-fluid" class="container" style="width: 852px; position: relative; left: 153px;margin-top: 20px;">
    <center>
        <div class="page-header" > 
        <h1><label data-wow-duration="1s" data-wow-delay="0s" data-wow-iteration="1" class=" wow zoomInLeft"  style="color: #b92c28;">
                Home <span class="glyphicon glyphicon-chevron-right"></span> Giới thiệu
            </label> </h1>
        </div>
     </center>

    <div class="col-sm-4 col-md-4">
        <img class="wow zoomInLeft img-thumbnail" 
             style="margin: 10px 0px;
             box-shadow: 5px 5px 5px; 
             -moz-box-shadow: 5px 5px 5px;
                -webkit-box-shadow: 5px 5px 5px;
                -o-box-shadow: 5px 5px 5px;
                -ms-box-shadow: 5px 5px 5px;" 
                src="../upload/gioithieu/img1.jpg" data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1" />
        <img class="wow zoomInLeft img-thumbnail" 
             style="margin: 10px 0px; 
             box-shadow: 5px 5px 5px; 
             -moz-box-shadow: 5px 5px 5px;
                -webkit-box-shadow: 5px 5px 5px;
                -o-box-shadow: 5px 5px 5px;
                -ms-box-shadow: 5px 5px 5px;" src="../upload/gioithieu/img2.jpg"  data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1" />
        <img class="wow zoomInLeft img-thumbnail"
             style="margin: 10px 0px;
             box-shadow: 5px 5px 5px; 
             -moz-box-shadow: 5px 5px 5px;
                -webkit-box-shadow: 5px 5px 5px;
                -o-box-shadow: 5px 5px 5px;
                -ms-box-shadow: 5px 5px 5px;" src="../upload/gioithieu/img3.jpg"  data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1" />
    </div>
    <div  class="col-sm-8 col-md-8" >
              
    <?php
            
        $sql = "select * from introduction";
        $kt= mysqli_query($conn, $sql);
        while($dong = mysqli_fetch_array($kt)){
    ?>
                <div data-wow-duration="1.5s" data-wow-delay="1.5s" data-wow-iteration="1" class="col-sm-12 col-md-10 wow zoomInLeft " style="margin-left:10px; border: none; padding-top: 12px;">
                    <span style=" color: indigo; font-size: 25px; font-family: monospace; padding: 10px;">
                        <?php 
                            echo $dong['title'];
                        ?>
                    </span>
                    
                </div>
                <div data-wow-duration="2s" data-wow-delay="1.5s" data-wow-iteration="1" class="col-sm-12 col-md-12 wow zoomInLeft">
                    <P align="justify" style="font-size: 20px; padding: 10px;">
                        <?php 
                        if(strlen($dong['content']) > 100){
                          $print = explode(" ", $dong['content']);
                           for($i=0; $i< 40; $i++){
                               echo $print[$i].' ';
                           }
                           echo "... <br/>";
                           
                        }
        
                        ?>
                       
                    </P>
                </div>
        <a class="col-md-12 col-sm-12" href="index.php?page=suagioithieu&&id=<?php echo $dong["id"] ?>&&title=gioithieu"><button type="submit" class="btn btn-danger">Update</button></a>
       <?php
        }
       ?>
       
    </div>
    
</div>



</body>
</html>