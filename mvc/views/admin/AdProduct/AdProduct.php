<body>
    <div class="content">
        <h2>Quản Lý Danh Mục Sản Phẩm</h2>
        <a href="<?php echo BASE_URL . 'AdProduct/add'; ?>" class="details-button">Thêm mới</a> <!-- Thêm một nút để thêm sản phẩm mới -->

        <table class="admin-table">
                <tr>
                    <th>Mã loại sp</th>
                    <th>Mã sp</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá nhập</th>
                    <th>Giá xuất</th>
                    <th>Số lượng</th>
                    <th>Khuyến mãi</th>
                    <th>Mô tả</th>
                    <th>Ngày nhập</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                <?php if (!empty($data["Adproduct"])): ?>
                    <?php foreach ($data["Adproduct"] as $r): ?>
                        <tr>
                            <td><?php echo $r['Ma_loaisp']; ?></td>
                            <td><?php echo $r['ma_sp']; ?></td>
                            <td><?php echo $r['Ten_loaisp']; ?></td>
                            <td><img src="./public/images/<?php echo $r['hinhanh']; ?>" width="50" height="50"></td> <!-- Sửa lại cú pháp -->
                            <td><?php echo $r['gianhap']; ?></td>
                            <td><?php echo $r['giaxuat']; ?></td>
                            <td><?php echo $r['soluong']; ?></td>
                            <td><?php echo $r['khuyenmai']; ?>%</td>
                            <td><?php echo $r['Mota_loaisp']; ?></td>
                            <td><?php echo $r['create_date']; ?></td>
                            <td>
                                <a class="ti-trash" href="<?php echo BASE_URL . 'Adproduct/delete/' . $r['ma_sp']; ?>" 
                                onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');"></a>
                            </td>
                            <td><a class="ti-pencil" href="<?php echo BASE_URL . 'Adproduct/edit/' . $r['ma_sp']; ?>"></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="12">Không có sản phẩm nào.</td> <!-- Thông báo nếu không có dữ liệu -->
                    </tr>
                <?php endif; ?>
        </table>
        <a href="<?php echo BASE_URL?>./AdProductType" class="btn">Quay lại</a>
    </div>
</body>


