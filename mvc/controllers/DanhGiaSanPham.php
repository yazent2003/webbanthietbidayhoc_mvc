<?php
class DanhGiaSanPham extends Controller {
    public function getShow(){
        $model = $this->model("DanhGiaSanPhamModel");

        $this->view( "AdminView",[
            "page" => "DanhGiaSanPham/DanhGiaSanPham",
            "allDanhGia" => $model->AllDanhGia()
        ]);
    }

    public function delete($id){
        $Model = $this->model("DanhGiaSanPhamModel");
        $check = $Model->deleteDanhGia($id);
        $this->getShow();
    }
}

?>