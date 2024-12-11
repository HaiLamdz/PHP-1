<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>
<body>
<h2>Sửa SP</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $find['id'] ?>">
        <p>title</p><input type="text" name="title" value="<?= $find['title'] ?>">
        <p>img</p><img src="../assets/img/<?= $find['cover_image'] ?>" alt="">
        <input type="file" name="img">
        <p>author</p><input type="text" name="author" value="<?= $find['author'] ?>">
        <p>publisher</p><input type="text" name="publisher" value="<?= $find['publisher'] ?>">
        <p>publish_date</p><input type="date" name="publish_date" value="<?= $find['publish_date'] ?>">
        <button type="submit" name="update">Sửa</button>
    </form>
</body>
</html>