<?php 
include "BaseRepository.php";

class UserRepository extends BaseRepository {

    var $table = "users";

    public function getUserByUsernameAndPassword($username, $password) {
        $sql = "SELECT * FROM $this->table WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        $this->conn->close();
        return $user;
    }

}