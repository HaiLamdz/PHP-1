<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thêm</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <p>title</p><input type="text" name="title" id="">
    <p>image</p><input type="file" name="img" id="">
    <p>intro</p><input type="text" name="intro" id="">
    <p>detail</p><input type="text" name="detail" id="">
    <p>view</p><input type="text" name="view" id="">
    <p>status</p><input type="text" name="status" id="">
    <p>Danh mục sản phẩm</p>
    <select name="cate" id="">
        <option value="1">kinh tế</option>
        <option value="2">Xã hội</option>
    </select> <br>
    <input type="submit" name="btn_insert" id="" value="Thêm sản phẩm">
    </form>
    <?php 
        require_once 'connect.php';
        if(isset($_POST['btn_insert'])){
            $name = $_POST['title'];
            $intro = $_POST['intro'];
            $detail = $_POST['detail'];
            $view = $_POST['view'];
            $status = $_POST['status'];
            $cate = $_POST['cate'];

            $img=$_FILES['img']['name'];
            $tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($tmp,'images/'.$img);

            $sql="insert into tintuc values(null,'$name','$img','$intro','$detail', '$view', '$status',$cate)";
            $result=$connect->prepare($sql);
            if($result->execute()){
                header("location:index.php");
            }else{
                echo "Không thêm được sản phẩm";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            }
        }
    ?>
</body>
</html>