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
            <p>tile</p><input type="text" name="title" value="<?= $findProduct['title'] ?>">
            <p>image</p> <img width="100px" src="../assets/img/<?= $findProduct['cover_image'] ?>" alt=""><input type="file" name="img">
            <p>author</p><input type="text" name="author" value="<?= $findProduct['author'] ?>">
            <p>publisher</p><input type="text" name="publisher" value="<?= $findProduct['publisher'] ?>">
            <p>publish_date</p><input type="date" name="publish_date" value="<?= $findProduct['publish_date'] ?>">
            <button type="submit" name="update">update</button>
        </form>
    </div>
</body>

</html>