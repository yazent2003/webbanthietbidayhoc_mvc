<?php
// Model: TintucModel.php
class TintucModel extends DB {
    public function getAllNews() {
        $sql = "SELECT * FROM tintuc ORDER BY ngaytao DESC";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id) {
        $sql = "SELECT * FROM tintuc WHERE id = :id";
        $stm = $this->con->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function addNews($tieude, $noidung, $ngaytao) {
        $sql = "INSERT INTO tintuc (tieude, noidung, ngaytao) VALUES (:tieude, :noidung, :ngaytao)";
        $stm = $this->con->prepare($sql);
        $stm->bindParam(':tieude', $tieude);
        $stm->bindParam(':noidung', $noidung);
        $stm->bindParam(':ngaytao', $ngaytao);
        $stm->execute();
    }

    public function deleteNews($id) {
        $sql = "DELETE FROM tintuc WHERE id = :id";
        $stm = $this->con->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
    }

    public function updateNews($id, $tieude, $noidung, $ngaytao) {
        $sql = "UPDATE tintuc SET tieude = :tieude, noidung = :noidung, ngaytao = :ngaytao WHERE id = :id";
        $stm = $this->con->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->bindParam(':tieude', $tieude);
        $stm->bindParam(':noidung', $noidung);
        $stm->bindParam(':ngaytao', $ngaytao);
        $stm->execute();
    }
}

