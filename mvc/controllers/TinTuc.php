<?php
class TinTuc extends Controller {
    public function getShow(){
        $page = "TinTuc";
        $model = $this->model("TintucModel");
        $AllTinTuc = $model->getAllNews();
        // Truyền dữ liệu đơn hàng vào view
        $this->view("HomeView", [
            "page" => $page,
            "tintuc" => $AllTinTuc
        ]);
    }

    public function chitiet($id){
        $page = "ChiTietTinTuc";
        $tintucModel = $this->model("TintucModel");
        $new = $tintucModel->getNewsById($id);

        // Truyền dữ liệu đơn hàng vào view
        $this->view("HomeView", [
            "page" => $page,
            "tintuc" => $new
        ]);
    }

    public function quanLyTinTuc(){
        $page = "TinTuc/TinTuc";
        $model = $this->model("TintucModel");
        $AllTinTuc = $model->getAllNews();
        // Truyền dữ liệu đơn hàng vào view
        $this->view("AdminView", [
            "page" => $page,
            "tintuc" => $AllTinTuc
        ]);
    }

    public function create(){
        $page = "TinTuc/ThemTinTuc";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $txt_tieude = $_POST['txt_tieude'];
            $txt_noidung = $_POST['txt_noidung'];
            $txt_ngaytao = $_POST['txt_ngaytao'];
            // Khởi tạo biến $data để lưu trữ thông tin
            if (empty($txt_tieude) || empty($txt_noidung) || empty($txt_ngaytao)){
                $data["error"] = "Các trường không được để trống.";
                $this->view("AdminView",  ["page" => $page,
                            "error" => "Các trường không được để trống."
                        ]);
            }
            else {
                $tintucModel = $this->model("TintucModel");
                $add = $tintucModel->addNews($txt_tieude, $txt_noidung, $txt_ngaytao);
                echo "<script>alert('Thêm tin tức thành công.'); window.location.href='" . BASE_URL . "TinTuc/quanLyTinTuc';</script>";
            } 
        }
        else {
            // Truyền dữ liệu đơn hàng vào view
            $this->view("AdminView", [
                "page" => $page
            ]);
        } 
    }

    public function edit($id) {
        $page = "TinTuc/SuaTinTuc";
        $tintucModel = $this->model("TintucModel");
        $new = $tintucModel->getNewsById($id);
    
        // Kiểm tra và định dạng ngày tháng năm trước khi gửi đến view
        if (isset($new['ngaytao'])) {
            $date = new DateTime($new['ngaytao']);
            $new['ngaytao'] = $date->format('Y-m-d'); // Chỉ lấy phần ngày tháng năm
        }
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $txt_tieude = $_POST['txt_tieude'];
            $txt_noidung = $_POST['txt_noidung'];
            $txt_ngaytao = $_POST['txt_ngaytao'];
    
            if (empty($txt_tieude) || empty($txt_noidung) || empty($txt_ngaytao)) {
                $data["error"] = "Các trường không được để trống.";
                $this->view("AdminView", [
                    "page" => $page,
                    "error" => "Các trường không được để trống."
                ]);
            } else {
                $editNew = $tintucModel->updateNews($id, $txt_tieude, $txt_noidung, $txt_ngaytao);
                echo "<script>alert('Cập nhật tin tức thành công.'); window.location.href='" . BASE_URL . "TinTuc/quanLyTinTuc';</script>";
            }
        } else {
            // Gửi dữ liệu tin tức đã chỉnh sửa đến view
            $this->view("AdminView", [
                "page" => $page,
                "new" => $new
            ]);
        }
    }
    

    public function delete($id){
        $tintucModel = $this->model("TintucModel");
        $tintucModel->deleteNews($id);
        $this->quanLyTinTuc();
    }
}



?>