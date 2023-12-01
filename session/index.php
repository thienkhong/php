<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <a href="login.php">Đăng nhập</a>
    <h1>Unitop.vn</h1>
    <a href="index.php">Trang chủ</a>
    <a href="course.php">Khóa học</a>
    <hr>
    <p>Trang chủ</p>

    <?php
    $username = 'phancuong.qt';
    echo $username;

    echo $_SESSION['login']['username'];
    ?>

</body>
</html>