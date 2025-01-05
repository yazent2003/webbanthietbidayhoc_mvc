<body>
    <div class="content">
        <h1>Danh Sách Tin Tức</h1>

        <a href="<?php echo BASE_URL . 'tintuc/create'; ?>" class="details-button">Thêm Tin Tức</a>

        <?php if (!empty($data['tintuc'])): ?>
        <table class="admin-table"> 
            <tr>
                <th>Tiêu Đề</th>
                <th>Nội Dung</th>
                <th>Ngày Tạo</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php foreach ($data['tintuc'] as $tin): ?>
            <tr>
                <td><?php echo htmlspecialchars($tin['tieude']); ?></td>
                <td><?php echo htmlspecialchars($tin['noidung']); ?></td>
                <td><?php echo isset($tin['ngaytao']) ? (new DateTime($tin['ngaytao']))->format('d/m/Y') : ''; ?></td>
                <td>
                    <a href="<?php echo BASE_URL . 'tintuc/edit/'; ?><?php echo $tin['id']; ?>" class="ti-pencil"></a>
                </td>
                <td>
                <a href="<?php echo BASE_URL . 'tintuc/delete/'; ?><?php echo $tin['id']; ?>" class="ti-trash" onclick="return confirm('Bạn có chắc muốn xóa tin tức này?');"></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <div>
            <p>Không có tin tức nào</p>
        </div>
        <?php endif; ?>
    </div>
</body>