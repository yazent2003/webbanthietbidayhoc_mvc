<div class="content">
    <h2>Danh Sách Chương Trình Khuyến Mại</h2>

    <a href="<?php echo BASE_URL ?>KhuyenMai/add" class="details-button">Thêm Khuyến Mại</a>
    <table class="admin-table">
        <tr>
            <th>STT</th>
            <th>Tên Khuyến Mại</th>
            <th>Mô Tả</th>
            <th>Giảm Giá</th>
            <th>Ngày Bắt Đầu</th>
            <th>Ngày Kết Thúc</th>
            <th>Sửa</th>
            <th>Xóa</th>
            <th>Áp dụng</th>
        </tr>
        <?php if (!empty($data["khuyenmai"])): ?>
            <?php $i = 0; ?>
            <?php foreach ($data["khuyenmai"] as $km): ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $km['tenKM']; ?></td>
                    <td><?php echo $km['moTa']; ?></td>
                    <td><?php echo $km['giamGia']; ?>%</td>
                    <td><?php echo $km['ngayBD']; ?></td>
                    <td><?php echo $km['ngayKT']; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL . 'KhuyenMai/update/' . $km['id']; ?>" class="ti-pencil"></a>
                    </td>
                    <td>
                        <a href="<?php echo BASE_URL . 'KhuyenMai/delete/' . $km['id']; ?>" class="ti-trash"></a>
                    </td>
                    <td>
                    <a href="<?php echo BASE_URL . 'KhuyenMai/ApDungKhuyenMai/'. $km['id']?>" class="ti-settings icon"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">Không có chương trình khuyến mại nào.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

<script>
    document.querySelectorAll('.details-button').forEach(button => {
    button.addEventListener('click', function(event) {
        if (this.textContent.trim() === 'Xóa' && !confirm('Bạn có chắc muốn xóa?')) {
            event.preventDefault();
        }
    });
});

</script>
