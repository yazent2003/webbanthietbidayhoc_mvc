<div class="header">
    <div class="header1">
        <h1>Trang quản trị</h1>
    </div>
    <div class="header2">
        <ul class="menu1 mainmenu">

        <li><a class="menu1" href="<?php echo BASE_URL ?>./AdProductType">Loại sản phẩm</a></li>
        <li><a class="menu1" href="<?php echo BASE_URL ?>./Adproduct">Sản phẩm</a></li>

        <li><a class="menu1" href="<?php echo BASE_URL ?>./TinTuc/QuanLyTinTuc">Tin tức</a></li>
        <li><a class="menu1" href="<?php echo BASE_URL ?>./GopY">Góp ý</a></li>
        <li><a class="menu1" href="<?php echo BASE_URL ?>./Quanlydonhang">Đơn hàng</a></li>



        <li><a class="menu1" href="<?php echo BASE_URL ?>./QuanLyTonKho">Tồn kho</a></li>
        <li><a class="menu1" href="<?php echo BASE_URL ?>./QuanLyDoanhThu">Doanh thu</a></li>

        <li><a class="menu1" href="<?php echo BASE_URL ?>./DanhGiaSanPham">Đánh giá sản phẩm</a></li>

        <li class="dropdown">
            <a href="<?php echo BASE_URL . 'QuanlyKhachHang';?>" class="dropdown">Danh sách khách hàng </a>
            <div class="dropdown-content">
                <a style="color: black;" href="<?php echo BASE_URL ?>QuanlyKhachHang/quantri">Quản trị</a>
                <a style="color: black;" href="<?php echo BASE_URL ?>QuanlyKhachHang/nguoidung">Người dùng</a>
            </div>
        </li>

        <li><a class="menu1" href="<?php echo BASE_URL ?>./NhaCungCap">Quản Lý Nhà Cung Cấp</a></li>
        <li><a class="menu1" href="<?php echo BASE_URL ?>./KhuyenMai">Chương Trình Khuyến Mại</a></li>


            <li class="dropdown">
                <?php if (isset($_SESSION['user'])): ?>
                    <a class="dropdown">Tài khoản: <?php echo $_SESSION['user']; ?></a>
                    <div class="dropdown-content">
                    <a style="color: black;" href="<?php echo BASE_URL . 'Login/ThongTinTaiKhoan/' . $_SESSION["user"]?>">Thông Tin Tài Khoản</a>
                    <a style="color: black;" href="<?php echo BASE_URL . 'Login/DoiMatKhau'; ?>">Đổi Mật Khẩu</a>
                    <a href="Login/LogOut">Đăng Xuất</a>
                    </div>
                <?php else: ?>
                    <a href="<?php echo BASE_URL . 'QuanlyKhachHang/add'; ?>">Đăng Ký</a>
                    <a href="<?php echo BASE_URL . 'Login/checkLogin'; ?>">Đăng Nhập</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>

