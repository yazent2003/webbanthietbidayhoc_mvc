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
    <title>Quản trị người dùng</title>
    <link href="<?php echo BASE_URL . 'public/styles/stylequantri.css?v=' . time(); ?>" rel="stylesheet"/>
    <link href="<?php echo BASE_URL . '/public/fonts/themify-icons/themify-icons.css?v=' . time(); ?>" rel="stylesheet"/>
    <link href="<?php echo BASE_URL . 'public/styles/styleNhaCungCap.css?v=' . time(); ?>" rel="stylesheet"/>
    </head>
    <body>
    <div class="main">
        <!-- Header -->
        <div class="header">
            <?php 
                require_once "./mvc/views/menu/MenuAdmin.php"; // Nhúng menu
            ?>
        </div>
        
        <!-- Content -->
        <div class="content">
            <?php
                require_once "./mvc/views/admin/".$data["page"].".php"; // Nhúng nội dung của trang
            ?>
        </div>
        </div>

        <!-- Footer
        <div class="footer">
            <?php
                require_once "./mvc/views/admin/Footer.php"; // Nhúng footer
            ?>       
        </div> -->
        
    
</body>

</html>
