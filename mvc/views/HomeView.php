<?php
// Bắt đầu session nếu chưa có
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Website thiết bị dạy học</title>
    <link href="<?php echo BASE_URL . 'public/styles/styleHome.css?v=' . time(); ?>" rel="stylesheet"/>
    <link href="<?php echo BASE_URL . '/public/fonts/themify-icons/themify-icons.css?v=' . time(); ?>" rel="stylesheet"/>
</head>
<body>
    <div class="main">
        <?php 
            require_once "./mvc/views/menu/MenuHome.php"; // Nhúng menu
        ?>
        <div class="content">
            <?php
                require_once "./mvc/views/home/".$data["page"].".php"; // Nhúng nội dung của trang
            ?>
        </div>
        <div class="footer">
            <?php
                require_once "./mvc/views/home/Footer.php"; // Nhúng nội dung của trang
            ?>       
        </div>
    </div>
</body>
</html>
