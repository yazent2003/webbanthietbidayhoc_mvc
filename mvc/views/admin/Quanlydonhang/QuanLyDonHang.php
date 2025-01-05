<div class="content">
    <title>Đơn hàng</title>
    <h1>Danh Sách Đơn Hàng</h1>
    <form action="" method="POST">
        <?php if(!empty($data["order"])): ?>
        <table class="admin-table">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt hàng</th>
                <th>Trạng thái đơn hàng</th>
                <th>Chi tiết đơn hàng</th>
                <th>Chỉnh sửa trạng thái</th>
            </tr>
            <?php foreach($data["order"] as $r): ?>
            <tr>
                <td><?php echo $r["mahd"]; ?></td>
                <td><?php echo $r["tenkh"]; ?></td>
                <td><?php echo $r["tongtien"]; ?></td>
                <td><?php echo $r["create_date"]; ?></td>
                <td><?php echo $r["trangthai"]; ?></td>
                <td><a class="ti-eye icon" href="<?php echo BASE_URL . 'Quanlydonhang/ChiTiet/' . $r['mahd']; ?>"></a></td>
                <td><a class="ti-pencil" href="<?php echo BASE_URL . 'Quanlydonhang/chinhSua/' . $r['mahd']; ?>"></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <div>
            <p>Không có đơn hàng nào</p>
        </div>
        <?php endif; ?>
    </form>
    <a href="<?php echo BASE_URL?>./AdProductType" class="details-button">Quay lại</a>
</div>
