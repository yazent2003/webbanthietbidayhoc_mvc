<?php
class AdProductType extends Controller {

    public function getShow() {
        $page = "AdProductType/AdProductType";
        $adProductTypeModel = $this->model("AdProductTypeModel");
        $data["Adproducttype"] = $adProductTypeModel->showAdProductType();
        $this->view("AdminView", ["page" => $page, 
                                "Adproducttype" => $data["Adproducttype"]]
        );  
    }


    public function add() {
        $page = "AdProductType/Add_AdproductType"; // Xác định view cần load
        $data = []; // Khởi tạo mảng $data để lưu trữ thông tin
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $maloaisp = trim($_POST['txt_maloaisp']);
            $name = trim($_POST['txt_tenloaisp']);
            $description = trim($_POST['txt_motaloaisp']);
            
            // Kiểm tra các trường không được để trống
            if (empty($maloaisp) || empty($name) || empty($description)) {
                $data['error'] = "Tất cả các trường không được để trống.";
            } else {
                $adProductTypeModel = $this->model("AdProductTypeModel");
    
                try {
                    // Thêm loại sản phẩm vào cơ sở dữ liệu
                    $adProductTypeModel->addAdProductType($maloaisp, $name, $description);
                    echo "<script>alert('Thêm loại sản phẩm thành công.'); window.location.href='" . BASE_URL . "Adproducttype';</script>";
                } catch (Exception $e) {
                    // Lưu thông báo lỗi vào biến để hiển thị trên giao diện
                    $data['error'] = $e->getMessage();
                }
            }
        }
        else {
            $adProductTypeModel = $this->model("AdProductTypeModel");
            // Nếu không phải là yêu cầu POST, hiển thị form thêm sản phẩm
            $this->view("AdminView", [
                "page" => $page,
                "Ma_loaisp" => "",
                "ma_sp" => "",
                "Ten_loaisp" => "",
                "error" => ""
            ]);
        }
    }
    
    

    public function edit($id) {
        $page = "AdProductType/Edit_AdProductType"; // Xác định view cần load
        $adProductTypeModel = $this->model("AdProductTypeModel");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['txt_tenloaisp'];
            $description = $_POST['txt_motaloaisp'];
            $adProductTypeModel->updateAdProductType($id, $name, $description);
            echo "<script>alert('Sửa lại sản phẩm thành công.'); window.location.href='" . BASE_URL . "AdProductType';</script>";
        } else {
            $data["Adproducttype"] = $adProductTypeModel->getAdProductTypeById($id);
            $this->view("AdminView", [
                "page" => $page,
                "Adproducttype" => $data["Adproducttype"]
            ]);
        }
    }

    public function delete($id) {
        $adProductTypeModel = $this->model("AdProductTypeModel");
        $adProductTypeModel->deleteAdProductType($id);
        $this->getShow();
    }
}
