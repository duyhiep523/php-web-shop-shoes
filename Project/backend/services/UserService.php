<?php 
include "./repositories/UserRepository.php";
include "./models/User.php";
class UserService {


    private $userRepo;

    public function __construct() {
        $this->userRepo = new UserRepository();
    }

    /**
     * function returns user by username and password
     *
     * @param string $username
     * @param string $password
     * @return User
     */
    public function getUserByUsernameAndPassword($username, $password) {
        return $this->userRepo->getUserByUsernameAndPassword($username, $password);
    }
    
}