<body>
    <div class="content">
        <h1>Áp dụng giảm giá</h1>

        <?php if (!empty($data["error"])): ?>
            <div class="error-message">
                <?php echo $data["error"]; ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($_SESSION['success'])): ?>
            <div class="success-message">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php elseif (!empty($_SESSION['error'])): ?>
            <div class="error-message">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <!-- Form gửi về trang KhuyenMai -->
        <form action="<?php echo BASE_URL . 'KhuyenMai/ApDungKhuyenMai'; ?>" method="POST">
        <div class="form-group">
            <label for="txt_loaisp">Sản Phẩm:</label>
            <select name="txt_loaisp" id="txt_loaisp" required>
                <option value="" disabled selected>-- Chọn sản phẩm --</option>
                <?php if (!empty($data["allProduct"])): ?>
                    <?php foreach ($data["allProduct"] as $product): ?>
                        <option value="<?php echo htmlspecialchars($product['ma_sp']); ?>">
                            <?php echo htmlspecialchars($product['ma_sp']) . " - " . htmlspecialchars($product['Ten_loaisp']); ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option value="">Không có loại sản phẩm</option>
                <?php endif; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="txt_khuyenmai">Chương trình khuyến mại:</label>
            <select name="txt_khuyenmai" id="txt_khuyenmai" required>
                <option value="" disabled selected>-- Chọn chương trình khuyến mại --</option>
                <?php if (!empty($data["allKhuyenMai"])): ?>
                    <?php foreach ($data["allKhuyenMai"] as $khuyenmai): ?>
                        <option value="<?php echo htmlspecialchars($khuyenmai['giamGia']); ?>">
                            <?php echo htmlspecialchars($khuyenmai['tenKM']) . " - giảm giá " . htmlspecialchars($khuyenmai['giamGia']) . "%"; ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option value="">Không có chương trình khuyến mại</option>
                <?php endif; ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit">Áp dụng</button>
        </div>
    </form>

    </div>
    <a href="<?php echo BASE_URL . 'KhuyenMai'; ?>" class="details-button">Quay lại</a>
</body>
