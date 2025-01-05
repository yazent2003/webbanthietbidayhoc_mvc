<body>
    <div class="content">
        <h1>Sửa Tin Tức</h1>

        <?php if (!empty($data['error'])): ?>
            <div class="error-message">
                <?php echo $data['error']; ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo BASE_URL . 'tintuc/edit/' . $data['new']['id']; ?>" method="POST">
            <div class="form-group">
                <label for="txt_tieude">Tiêu Đề:</label>
                <input type="text" name="txt_tieude" id="txt_tieude" value="<?php echo isset($data['new']['tieude']) ? htmlspecialchars($data['new']['tieude']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="txt_noidung">Nội Dung:</label>
                <textarea name="txt_noidung" id="txt_noidung" rows="5" required><?php echo isset($data['new']['noidung']) ? htmlspecialchars($data['new']['noidung']) : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label for="txt_ngaytao">Ngày Tạo:</label>
                <input type="date" name="txt_ngaytao" id="txt_ngaytao" value="<?php echo isset($data['ngaytao']) ? $data['ngaytao'] : ''; ?>" required>
                </div>

            <div class="form-group">
                <button type="submit">Cập Nhật Tin Tức</button>
            </div>
        </form>
    </div>
    <a href="<?php echo BASE_URL . 'tintuc/quanLyTinTuc'; ?>" class="details-button">Quay lại</a>
</body>