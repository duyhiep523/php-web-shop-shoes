<?php 
include "./services/UserService.php";
include "./models/Response.php";
include "./common/ResponseCode.php";
include "./common/ResponseMessage.php";

class UserController {

    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function login() {
        $response = new Response();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = $this->userService->getUserByUsernameAndPassword($username, $password);
        if ($user) {
            $response->setResponseCode(ResponseCode::$SUCCESS);
            $response->setResponseMessage(sprintf(ResponseMessage::$SUCCESS, "Login"));
        } else {
            //fail
        }
        echo json_encode($response);
    }
    
}