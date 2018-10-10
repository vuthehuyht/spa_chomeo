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
      body{
          margin-left: 200px;
          margin-top: 100px;
      }
        #dichvu{
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
        include 'connection.php';
        ?>
    <?php
                    $sql= "select * from service";
                    $kt= mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($kt)){
                ?> 
                <div style="padding-bottom: 5px; font-size: 20px;">
                    <span class="glyphicon glyphicon-pencil"  style="font-size: 15px; color:indigo;"></span>
                    <a  id="dichvu" style="color: black; text-decoration: none;" href='index.php?page=sua_dichvu&&id=<?php echo $row["id_service"]?>&&title=dichvu'><?php echo $row['name_service']?></a>
                    <button class="btn btn-danger" type="button" onclick="Delete(<?php echo $row['id_service']?>)">
                        Delete
                    </button>
                    <dialog id="delete<?php echo $row['id_service']?>">
                        Bạn chắc chắn muốn xóa dịch vụ này?
                        <input class="btn-default" type="button" value="Hủy" onclick="closeDialog(<?php echo $row['id_service']?>)"/>
                        <a href="index.php?page=xoa_dichvu&&id=<?php echo $row['id_service']?>"><input class="btn-success" type="submit" name="btn_ok" value="Đồng ý"/></a>
                    </dialog>
                </div>
                    <?php
                    }
                    ?>
    <script type="text/javascript">
        
        function Delete(id){
            var x = document.getElementById("delete"+id);
            x.show();
        }
        function closeDialog(id) { 
            var x = document.getElementById("delete"+id);
            x.close(); 
        }
    </script>
    
    
    <form action="" method="post" name="myForm" onsubmit="return validateForm()" style="margin-top: 50px;">
                    <div class="form-group col-sm-11 col-md-11">
                        <label >Title:</label>
                        <input type="text" class="form-control" name="title" required="">
                    </div> 
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Openning:</label>
                        <textarea class="form-control" name="openning" cols="10" rows="3" required=""></textarea>
                   </div>
                   <div class="form-group col-sm-11 col-md-11">
                        <label>Content:</label>
                        <textarea class="form-control" name="content" cols="10" rows="3" required=""></textarea>
                   </div>
                   <button style="margin-left: 13px; margin-bottom: 10px;" type="submit" name="btn_them" class="btn btn-primary">Thêm dịch vụ</button>
    </form>
    <?php
        if(isset($_POST['btn_them'])){
            $title = $_POST['title'];
            $openning = $_POST['openning'];
            $content = $_POST['content'];
            $admin = $_SESSION['admin'];
            $sql="SELECT * from admin where username = '$admin'";
            $kt=mysqli_query($conn, $sql);
            $dong= mysqli_fetch_array($kt);
            $id_admin= $dong['id_admin'];
            $sql=" INSERT INTO `service`(`name_service`, `content`, `id_admin`, `openning`) VALUES ('$title','$content','$id_admin','$openning') ";
            $kt= mysqli_query($conn, $sql);
    ?>
    <script type="text/javascript">
        window.location = "index.php?page=dichvu&&title=dichvu";
	alert("Thêm dịch vụ thành công.");
</script>
    <?php
        }
    ?>
</body>
</html>