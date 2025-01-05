<body>
    <div class="content">
        <h2>Danh Sách Nhà Cung Cấp</h2>
        <a href="<?php echo BASE_URL . 'NhaCungCap/themNhaCungCap'; ?>" class="details-button">Thêm Mới</a>
        
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Mã NCC</th>
                    <th>Tên NCC</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Người Liên Hệ</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['nhacungcap'] as $ncc): ?>
                    <tr>
                        <td><?php echo $ncc['MaNCC']; ?></td>
                        <td><?php echo $ncc['TenNCC']; ?></td>
                        <td><?php echo $ncc['DiaChi']; ?></td>
                        <td><?php echo $ncc['SoDienThoai']; ?></td>
                        <td><?php echo $ncc['Email']; ?></td>
                        <td><?php echo $ncc['NguoiLienHe']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL . 'NhaCungCap/suaNhaCungCap/' . $ncc['MaNCC']; ?>" class="ti-pencil"></a> 
                        </td>
                        <td>
                            <a href="<?php echo BASE_URL . 'NhaCungCap/xoaNhaCungCap/' . $ncc['MaNCC']; ?>" class="ti-trash" onclick="return confirm('Bạn có chắc chắn muốn xóa?');"></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>


