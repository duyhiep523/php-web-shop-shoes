<?php 
class BaseRepository {

    protected $conn;

    protected $table;

    protected $primaryKey;


    public function _construct() {
        $connection = null;
        try {
            $connection = mysqli_connect("localhost", "root", "123456", "student");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->conn = $connection;
    }

}