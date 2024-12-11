<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa sản phẩm</title>
</head>

<body>
    <div>
        <h2>Sửa Sản Phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" hidden name="id" value="<?= $findProduct['id'] ?>"> 
            <p>name</p><input type="text" name="name" value="<?= $findProduct['name'] ?>">
            <p>thumbnail</p> <img width="100px" src="../assets/img/<?= $findProduct['thumbnail'] ?>" alt=""><input type="file" name="img">
            <p>instructor</p><input type="text" name="instructor" value="<?= $findProduct['instructor'] ?>">
            <p>duration</p><input type="text" name="duration" value="<?= $findProduct['duration'] ?>">
            <p>price</p><input type="text" name="price" value="<?= number_format( $findProduct['price']) ?>">
            <button type="submit" name="update">update</button>
        </form>
    </div>
</body>

</html>