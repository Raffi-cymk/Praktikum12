<?php
class Database {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Koneksi gagal");
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }
}
