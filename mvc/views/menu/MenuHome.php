<div class="boxtop">

        <div class="boxcenter">
            <div class="boxtopleft">
                Hotline: 0965.313.809
            </div>
            <div class="boxtopfight">
            <a href="https://www.facebook.com/yazent03/" target="_blank">Liên hệ</a>

            <li class="dropdown">
                <?php if (isset($_SESSION['user'])): ?>
                    <a class="dropdown">Xin chào: <?php echo $_SESSION['user']; ?></a>
                            <div class="dropdown-content">
                                <a href="<?php echo BASE_URL . 'Login/ThongTinTaiKhoan/' . $_SESSION["user"]?>">Thông Tin Tài Khoản</a>
                                <a href="<?php echo BASE_URL . 'Login/DoiMatKhau'; ?>">Đổi Mật Khẩu</a>

                                <a href="<?php echo BASE_URL . 'Login/LogOut'; ?>">Đăng Xuất</a>
                            </div>
                        <?php else: ?>
                            <span>
                                <a href="<?php echo BASE_URL . 'QuanlyKhachHang/DangKy'; ?>">Đăng Ký</a>
                            </span>
                            <span>
                                <a href="<?php echo BASE_URL . 'Login/checkLogin'; ?>">Đăng Nhập</a>
                            </span>
                        <?php endif; ?>
                    </li>
                </div>
            </div>
        </div>

        <div class="boxlogo">
            <img src="<?php echo BASE_URL . "public/images/logo.png"; ?>" alt="">
        </div>

        <div class="boxmenu">
            <div class="boxcenter">
                <ul>
                    <li><a href="<?php echo BASE_URL . 'Home'; ?>">TRANG CHỦ</a></li>
                    <li><a href="<?php echo BASE_URL . 'Home/adProduct'; ?>">SẢN PHẨM</a>
                        <!-- <ul>
                            <?php
                                if (!empty($data["products"])) {
                                    foreach ($data["products"] as $product) {
                                        echo "<li><a class='a-header' href='#'>" . $product['Ten_loaisp'] . "</a></li>";
                                    }
                                } 
                                   
                            ?>
                        </ul> -->
                    </li>
                    <li><a href="<?php echo BASE_URL . 'TinTuc'; ?>">Tin tức</a></li>
                    <li><a href="<?php echo BASE_URL . 'GopY/themGopY'; ?>">Góp ý</a></li>
                    <li><a href="<?php echo BASE_URL . 'DonHang'; ?>">Đơn hàng</a></li>
                    <li><a href="<?php echo BASE_URL . 'DonHang/lichsumuahang'; ?>">Lịch sử mua hàng</a></li>
                    <li><a href="<?php echo BASE_URL . 'GioHang'; ?>">Giỏ hàng</a></li>

                </ul>        
        </div>
</div>

