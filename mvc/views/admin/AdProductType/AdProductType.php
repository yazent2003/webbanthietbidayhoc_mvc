<body>
    <div class="content">
    <h1>Quản lý loại sản phẩm</h1>

    <a href="<?php echo BASE_URL . 'AdProductType/add'; ?>" class="details-button">Thêm mới</a> 
            
            <form action="<?php echo BASE_URL . 'AdProductType/add'; ?>" method="post">
                <?php if (isset($data['error'])): ?>
                    <div class="error-message" style="color: red;">
                        <?php echo $data['error']; ?>
                    </div>
                <?php endif; ?>
            </table>
            </form>

            <!-- Bảng thông tin sản phẩm -->
            <table class="admin-table">
                <tr>
                    <th>Mã loại sản phẩm</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Mô tả loại sản phẩm</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                <?php if (!empty($data["Adproducttype"])): ?>
                    <?php foreach ($data["Adproducttype"] as $r): ?>
                        <tr>
                            <td><?php echo $r['Ma_loaisp']; ?></td>
                            <td><?php echo $r['Ten_loaisp']; ?></td>
                            <td><?php echo $r['Mota_loaisp']; ?></td>
                            <td>
                                <a class="ti-trash" href="<?php echo BASE_URL . 'AdProductType/delete/' . $r['Ma_loaisp']; ?>" 
                                onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này không?');"></a>
                            </td>
                            <td><a class="ti-pencil" href="<?php echo BASE_URL . 'AdProductType/edit/' . $r['Ma_loaisp']; ?>"></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
    </div>
</body>

