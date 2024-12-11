<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <h2>Sửa SP</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $find['id'] ?>">
        <p>name</p><input type="text" name="name"  value="<?= $find['name'] ?>">
        <p>img</p>
        <img src="../assets/images/<?= $find['image'] ?>" alt="">
        <input type="file" name="img"  >
        <p>description</p><input type="text" name="description"  value="<?= $find['description'] ?>">
        <p>price</p><input type="text" name="price"  value="<?= $find['price'] ?>">
        <p>duration</p><input type="text" name="duration" value="<?= $find['duration'] ?>">
        <button type="submit" name="update">Sửa</button>
    </form>
</body>
</html>