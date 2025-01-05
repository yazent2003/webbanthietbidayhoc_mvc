<div class="content">
    <div class="admin-header">
        <h2>Thêm Chương Trình Khuyến Mại</h2>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="tenKM">Tên Khuyến Mại:</label>
            <input type="text" name="tenKM" id="tenKM" required class="form-control">
        </div>
       
        <div class="form-group">
            <label for="moTa">Mô Tả:</label>
            <textarea name="moTa" id="moTa" rows="4" required class="form-control"></textarea>
        </div>
        
        <div class="form-group">
            <label for="giamGia">Giảm Giá (%):</label>
            <input type="number" name="giamGia" id="giamGia" required class="form-control" min="0" max="100">
        </div>

        <div class="form-group">
            <label for="ngayBD">Ngày Bắt Đầu:</label>
            <input type="date" name="ngayBD" id="ngayBD" required class="form-control">
        </div>

        <div class="form-group">
            <label for="ngayKT">Ngày Kết Thúc:</label>
            <input type="date" name="ngayKT" id="ngayKT" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Thêm Khuyến Mại</button>
    </form>
</div>
