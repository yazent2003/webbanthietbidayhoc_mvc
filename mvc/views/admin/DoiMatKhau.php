<div class="content">
<form action="" method="POST" class="change-password-form">
    <h2>Đổi Mật Khẩu</h2>

    <table class="admin-table">
        <tr>
            <td><label for="MatKhauCu">Mật khẩu cũ:</label></td>
            <td><input type="password" name="MatKhauCu" id="MatKhauCu" required></td>
        </tr>
        <tr>
            <td><label for="MatKhauMoi">Mật khẩu mới:</label></td>
            <td><input type="password" name="MatKhauMoi" id="MatKhauMoi" required></td>
        </tr>
        <tr>
            <td><label for="MatKhauMoiNhapLai">Nhập lại mật khẩu mới:</label></td>
            <td><input type="password" name="MatKhauMoiNhapLai" id="MatKhauMoiNhapLai" required></td>
        </tr>
    </table>

    <button type="submit" class="details-button">Đổi mật khẩu</button>
</form>
<a href="<?php echo BASE_URL . 'Admin'; ?>" class="details-button">Quay lại</a>

</div>

