<div class="content">
        <h1>Danh Sách Đánh Giá Của Khách Hàng</h1>
        <table class="admin-table">
            <tr>
                <th>Mã hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Nội dung đánh giá</th>
                <th>Số sao</th>
                <th>Ngày góp ý</th>
                <th>Xóa</th>
            </tr>
            <tr>
                <?php if (!empty($data['allDanhGia'])): ?>
                    <?php foreach ($data['allDanhGia'] as $danhgia): ?>
                        <div class="feedback-item">
                            <tr>
                                <td><?php echo $danhgia["mahd"] ?></td>
                                <td><?php echo $danhgia["makh"] ?></td>
                                <td><?php echo $danhgia["tenkhachhang"] ?></td>
                                <td><?php echo $danhgia["danh_gia"] ?></td>
                                <td><?php echo $danhgia["sao"] ?></td>
                                <td><?php echo $danhgia["ngay_danh_gia"] ?></td>
                                <td>
                                    <a class="ti-trash" href="<?php echo BASE_URL . 'DanhGiaSanPham/delete/'. $danhgia["id"] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa đánh giá này không?');"></a>
                                </td>
                            </tr>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Chưa có góp ý nào từ khách hàng.</p>
                <?php endif; ?>
            </tr>  
        </table>
    </div>

