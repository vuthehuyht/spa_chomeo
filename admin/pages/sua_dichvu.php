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
      
  </style>
  <script>
	new WOW().init();
</script>
</head>
<body>
    <div class="container" style="width: 900px; position: relative; left: 200px; top: 200px;">
    <?php
        include '../connection.php';
        $sql = "select * from service where id_service = $_GET[id]";
        $kt= mysqli_query($conn, $sql);
        $dong = mysqli_fetch_array($kt)
    ?>
        
    <form action="" method="post">
        <textarea cols="10" rows="1" class="ckeditor" name="title" id="title"><?php echo $dong['name_service']?></textarea>
        <textarea cols="10" rows="3" class="ckeditor" name="openning" id="openning"><?php echo $dong['openning']?></textarea>
        <textarea cols="10" rows="10" class="ckeditor" name="content" id="content"><?php echo $dong['content']?></textarea>
        <input type="submit" class="btn-success" value="Update" name="btn_submit_service"/>
    </form>
        <?php
            if(isset($_POST['btn_submit_service'])){
                $title=$_POST['title'];
                $openning = $_POST['openning'];
                $content=$_POST['content'];
                $sql="UPDATE `service` SET `name_service`='$title', `openning`='$openning' ,`content`='$content' WHERE id_service = $_GET[id]";
                 $kt=mysqli_query($conn, $sql);
        ?>
        <script>window.location = "http://localhost/Spa_ChoMeo/admin/index.php?page=dichvu&&tieude=dichvu";</script>
        <?php
            }
        ?>
    
    
    <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="img" />
         <input type="submit" name="them_anh"/>
         	
      </form>
    <?php 


if(isset($_POST['them_anh'])){
    $id = $_GET['id'];
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
      }
      
      if($file_size > 2097152){
         $errors[]='Kích cỡ file nên là 2 MB';
		}
      
      if(empty($errors)==true){
         $sql="INSERT INTO `image_service`(`id_service`, `img`) VALUES ('$id','$file_name')";
         $kt=mysqli_query($conn, $sql);
         echo "Thành công!!!";
      }
      else{
         print_r($errors);
      }
   }
}
 ?>
        </div>
</body>
</html>