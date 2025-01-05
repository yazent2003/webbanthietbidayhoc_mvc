<body>
    <!-- Icon Giỏ Hàng -->
    <div class="cart-icon">
        <a href="<?php echo BASE_URL . 'GioHang'; ?>">
        <img src="<?php echo BASE_URL . 'public/images/th - Copy.jpg'; ?>" alt="Giỏ hàng">
        <br/>
        </a>
    </div>

    <!-- Form tìm kiếm -->
    <form action="<?php echo BASE_URL . 'Home'; ?>" method="post" class="search-form">
        <input type="text" name="txt_search" placeholder="Tìm kiếm theo tên hoặc mã sản phẩm" />
        <select name="category">
            <option value="">Tất cả</option>
            <option value="discounted">Sản phẩm giảm giá</option>
            <?php
            $categories = array_unique(array_column($data['productTypes'], 'Ten_loaisp'));
            foreach ($categories as $category) {
                echo "<option value='" . $category . "'>" . $category . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="search" value="Tìm kiếm" />
    </form>

    <!-- Danh sách sản phẩm -->
    <div class="products">
        <?php if (!empty($data['products'])): ?>
            <?php foreach ($data['products'] as $product): ?>
                <?php
                $gia_xuat = $product['giaxuat'];
                $khuyenmai = $product['khuyenmai'];
                $gia_ban = $gia_xuat - ($gia_xuat * $khuyenmai / 100);
                ?>
                <div>
                    <img src="./public/images/<?php echo $product['hinhanh']; ?>" alt="<?php echo $product['Ten_loaisp']; ?>">
                    <h2><?php echo $product['Ten_loaisp']; ?></h2>

                    <?php if ($khuyenmai > 0): ?>
                        <p><strong style="font-weight: bold;">Giá bán:</strong> <del><?php echo $gia_xuat; ?> VND</del></p>
                        <p><strong style="font-weight: bold;">Khuyến mãi:</strong> <?php echo $khuyenmai; ?>%</p>
                        <p><strong style="font-weight: bold;">Giảm giá còn:</strong> <?php echo $gia_ban; ?> VND</p>
                    <?php else: ?>
                        <p><strong style="font-weight: bold;">Giá bán:</strong> <?php echo $gia_xuat; ?> VND</p>
                    <?php endif; ?>

                    <div class="hover-overlay">
                        <a href="<?php echo BASE_URL . 'Home/getDetailsProduct/' . $product['ma_sp']; ?>">Xem chi tiết</a>
                        <a href="<?php echo BASE_URL . 'GioHang/add/' . $product['ma_sp']; ?>">Thêm vào giỏ</a>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p>Không có sản phẩm nào.</p>
        <?php endif; ?>
    </div>

    <!-- Nút lên đầu trang -->
    <button id="scrollTopBtn" title="Lên đầu trang">⬆</button>

    <script>
    // Hiển thị nút lên đầu trang khi cuộn xuống
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    window.onscroll = function () {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollTopBtn.style.display = 'block';
        } else {
            scrollTopBtn.style.display = 'none';
        }
    };

    // Di chuyển lên đầu trang khi nút được click
    scrollTopBtn.onclick = function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
</body>

