<?php 
    require_once 'connect/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <br>
        <a href="models/homeModel.php"><button>Thêm Mới</button></a>
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>title</td>
                <td>author</td>
                <td>year</td>
                <td>genre</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "select * from books";
                $results = $connect->query($sql);
                foreach($results as $key => $reslut){
                    ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $reslut["id"] ?></td>
                        <td><?= $reslut["title"] ?></td>
                        <td><?= $reslut["author"] ?></td>
                        <td><?= $reslut["yaer"] ?></td>
                        <td><?= $reslut["genre"] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>