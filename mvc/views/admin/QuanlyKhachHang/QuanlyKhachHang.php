<body>
    <div class="content">
    <h2>Quản Lý Khách Hàng</h2>
    <a href="<?php echo BASE_URL . 'QuanlyKhachHang/add'; ?>" class="details-button">Thêm mới</a> <!-- Thêm một nút để thêm sản phẩm mới -->

        <form action="<?php echo BASE_URL . 'QuanlyKhachHang/add'; ?>"  method="post">
            <table class="admin-table">
                <tr>
                    <th>STT</th>
                    <th>Tên Khách Hàng</th>
                    <th>Tên Đăng Nhập</th>
                    <th>Mật Khẩu</th>
                    <th>Giới Tính</th>
                    <th>Quốc Tịch</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Hình Ảnh</th>
                    <th>Sở Thích</th>
                    <th>Level</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                <?php if (!empty($data["QuanlyKhachHang"])): ?>
                    <?php $i = 0; ?> <!-- Khởi tạo biến STT ở đây -->
                    <?php foreach ($data["QuanlyKhachHang"] as $r): ?>
                        <tr>
                            <td><?php echo ++$i; ?></td> <!-- Tăng giá trị của $i trước khi hiển thị -->
                            <td><?php echo $r['FullName']; ?></td>
                            <td><?php echo $r['UserName']; ?></td>
                            <td><?php echo $r['PassWord']; ?></td>
                            <td><?php echo $r['Email']; ?></td>
                            <td><?php echo $r['DienThoai']; ?></td>
                            <td><?php echo $r['GioiTinh']; ?></td>
                            <td><?php echo $r['QuocTich']; ?></td>
                            <td><?php echo $r['DiaChi']; ?></td>
                            <td><img src="./public/images/<?php echo $r['HinhAnh']; ?>" width="50" height="50"></td> <!-- Sửa lại cú pháp -->
                            <td><?php echo $r['SoThich']; ?></td>
                            <td><?php echo $r['Level']; ?></td>
                            <td>
                                <a class="ti-trash" href="<?php echo BASE_URL . 'QuanlyKhachHang/delete/' . $r['UserName']; ?>" 
                                onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?');"></a>
                            </td>
                            <td><a class="ti-pencil" href="<?php echo BASE_URL . 'QuanlyKhachHang/edit/' . $r['UserName']; ?>"></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="14">Không có sản phẩm nào.</td> <!-- Thông báo nếu không có dữ liệu -->
                    </tr>
                <?php endif; ?>
            </table>
        </form>
        <a href="../Admin" class="details-button">Quay lại</a>
    </div>
</body>

