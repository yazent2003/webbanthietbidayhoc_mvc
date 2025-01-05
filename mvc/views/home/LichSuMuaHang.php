<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    // Thực hiện các hành động với $user
} else {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập hoặc thông báo
    header("Location: " . BASE_URL . "Login/checkLogin");
    exit;
}

?>
    
<div class="main">
    <title>Lịch Sử Mua Hàng</title>
    <h1>Lịch Sử Mua Hàng</h1>
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
                <th>Đánh giá sản phẩm</th>
            </tr>
            <?php foreach($data["order"] as $r): ?>
            <tr>
                <td><?php echo $r["mahd"]; ?></td>
                <td><?php echo $r["tenkh"]; ?></td>
                <td><?php echo $r["tongtien"]; ?></td>
                <td><?php echo $r["create_date"]; ?></td>
                <td><?php echo $r["trangthai"]; ?></td>
                <td><a class="details-button" href="<?php echo BASE_URL . 'DonHang/orderdetail/' . $r['mahd']; ?>">Chi tiết</a></td>
                <td><a class="details-button" href="<?php echo BASE_URL . 'DonHang/danhgia/' . $r['mahd']; ?>">Đánh giá</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <div>
            <p>Không có đơn hàng nào</p>
        </div>
        <?php endif; ?>
    </form>
    <a href="<?php echo BASE_URL . 'DonHang/lichsumuahang'; ?>" class="details-button">Quay lại</a>
    </div>  
