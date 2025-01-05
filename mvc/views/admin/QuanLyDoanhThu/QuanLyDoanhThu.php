<div class="content">
    <h1>Quản Lý Doanh Thu</h1>
    <form id="main-form" action="<?php echo BASE_URL; ?>QuanLyDoanhThu" method="POST" style="display: flex;">
        <select style="width: 20%;" id="search-type" name="search-type" onchange="toggleDateForm()">
            <option value="all">Tất cả</option>
            <option value="day">Theo Ngày</option>
            <option value="date_range">Từ Ngày - Đến Ngày</option>
            <option value="year">Theo Năm</option>
        </select>
        <button class="details-button" style="width: 10%;" type="submit">Tìm kiếm</button>
    </form>

    <!-- Form chọn ngày chỉ hiển thị khi chọn "Theo Ngày" -->
    <div id="date-form" style="display: none; margin-top: 20px;">
        <form action="<?php echo BASE_URL; ?>QuanLyDoanhThu/getDoanhThuTheoNgay" method="POST">
            <label for="date">Chọn Ngày:</label>
            <input type="date" id="date" name="date" required>
            <button class="details-button"  type="submit">Gửi</button>
        </form>
    </div>

    <!-- Form chọn ngày từ đến -->
    <div id="date-range-form" style="display: none; margin-top: 20px;">
        <form action="<?php echo BASE_URL; ?>QuanLyDoanhThu/getDoanhThuTheoKhoangThoiGian" method="POST">
            <label for="start_date">Từ Ngày:</label>
            <input type="date" id="start_date" name="start_date" required>
            <label for="end_date">Đến Ngày:</label>
            <input type="date" id="end_date" name="end_date" required>
            <button type="submit">Gửi</button>
        </form>
    </div>

    <!-- Form chọn năm chỉ hiển thị khi chọn "Theo Năm" -->
    <div id="year-form" style="display: none; margin-top: 20px;">
        <form action="<?php echo BASE_URL; ?>QuanLyDoanhThu/getDoanhThuTheoNam" method="POST">
            <label for="year">Chọn Năm:</label>
            <select id="year" name="year" required>
                <?php for ($i = 2021; $i <= date('Y'); $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
            <button type="submit">Gửi</button>
        </form>
    </div>

    <?php if (!empty($data['danhSachDonHang'])): ?>
        <table style="margin-top: 20px;" class="admin-table">
            <?php if (isset($data["startDate"]) && isset($data["endDate"])): ?>
                <h2>Các đơn hàng từ ngày <?php echo htmlspecialchars($data["startDate"]); ?> đến ngày <?php echo htmlspecialchars($data["endDate"]); ?></h2>
            <?php endif; ?>

            <?php if (isset($data["date"])): ?>
                <h2>Các đơn hàng ngày <?php echo htmlspecialchars($data["date"]); ?></h2>
            <?php endif; ?>
            
            <?php if (isset($data["year"])): ?>
                <h2>Các đơn hàng năm <?php echo htmlspecialchars($data["year"]); ?></h2>
            <?php endif; ?>

            <?php $tongDoanhThu = 0 ?>
            <thead>
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Số Điện thoại</th>
                    <th>Địa Chỉ Giao Hàng</th>
                    <th>Địa Chỉ Hóa Đơn</th>
                    <th>Tổng Tiền</th>
                    <th>Ngày Tạo</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['danhSachDonHang'] as $donhang): ?>
                    <tr>
                        <?php $tongDoanhThu += $donhang['tongtien']?>
                        <td><?php echo htmlspecialchars($donhang['mahd']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['makh']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['tenkh']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['phone']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['diachilh']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['diachigh']); ?></td>
                        <td><?php echo number_format($donhang['tongtien'], 0, ',', '.'); ?> VNĐ</td>
                        <td><?php echo htmlspecialchars($donhang['create_date']); ?></td>
                        <td><?php echo htmlspecialchars($donhang['trangthai']); ?></td>
                        <td><a class="ti-eye icon" href="<?php echo BASE_URL . 'QuanLyDoanhThu/ChiTiet/'. $donhang["mahd"] ?>"></a></td>
                    </tr>
                <?php endforeach; ?>
                <td style="text-align: center;" colspan="10"><?php echo "Tổng doanh thu: ". number_format($tongDoanhThu, 0, ',', '.') ?> VNĐ</td>
            </tbody>
        </table>
    <?php else: ?>
        <p>Chưa có đơn hàng nào.</p>
    <?php endif; ?>
</div>

<script>
        function toggleDateForm() {
            const searchType = document.getElementById('search-type').value;
            const mainForm = document.getElementById('main-form');
            const dateForm = document.getElementById('date-form');
            const dateRangeForm = document.getElementById('date-range-form');
            const yearForm = document.getElementById('year-form');

            // Ẩn tất cả các form
            dateForm.style.display = 'none';
            dateRangeForm.style.display = 'none';
            yearForm.style.display = 'none';

            // Hiện form hoặc gửi yêu cầu lấy tất cả sản phẩm
            switch (searchType) {
                case 'all':
                    mainForm.action = "<?php echo BASE_URL; ?>QuanLyDoanhThu";
                    mainForm.submit();
                    break;
                case 'day':
                    dateForm.style.display = 'block';
                    break;
                case 'date_range':
                    dateRangeForm.style.display = 'block';
                    break;
                case 'year':
                    yearForm.style.display = 'block';
                    break;
            }
        }
    </script>
