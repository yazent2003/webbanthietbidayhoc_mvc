<?php
class DanhGiaSanPhamModel extends DB {
    public function AllDanhGia() : array {
        $sql = "SELECT * FROM danhgiasanpham";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } 

    public function deleteDanhGia($id) {
        $sql = "DELETE FROM danhgiasanpham WHERE id  = :id";
        $stm = $this->con->prepare($sql);
        $stm->bindParam(':id', $id);
        return $stm->execute();
    }

}

?>