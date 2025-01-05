<?php
class DB {
    protected  $con;

    public function __construct(){
        $host = "localhost";
        $dbname = "phukiengiangday";
        $username = "root";
        $password = "";

        try {
            // Cập nhật chuỗi kết nối để sử dụng UTF-8
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $this->con = new PDO($dsn, $username, $password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
