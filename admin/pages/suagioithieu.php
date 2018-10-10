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
        $sql = "select * from introduction where id = $_GET[id]";
        $kt= mysqli_query($conn, $sql);
        $dong = mysqli_fetch_array($kt);
    ?>
        
    <form action="" method="post">
        <textarea class="ckeditor" name="title" id="title"><?php echo $dong['title']?></textarea>
        <textarea class="ckeditor" name="content" id="content"><?php echo $dong['content']?></textarea>
        <input type="submit" class="btn-success" value="Update" name="btn_submit_service"/>
    </form>
        <?php
            if(isset($_POST['btn_submit_service'])){
                $title=$_POST['title'];
                $content=$_POST['content'];
                $sql="UPDATE `introduction` SET `title`='$title',`content`='$content' WHERE id = $_GET[id]";
                 $kt=mysqli_query($conn, $sql);
            }
        ?>
    </div>
</body>
</html>