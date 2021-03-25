<?php

include_once __DIR__. "/../../../common/src/Service/SecurityService.php";
include_once __DIR__. "/../../../common/src/Service/UserService.php";
include_once __DIR__. "/../../../common/src/Model/User.php";

class AuthController{
    private $securityService;

    public function __construct(){
        $this->securityService = new SecurityService();
    }
    public function check(){
     
       $email = htmlspecialchars($_POST['login']);
       $password = htmlspecialchars($_POST['password']);

       $user = (new User())->getByEmail($email);

       if(!$this->securityService->checkPassword($user, $password)){
        throw new Exception('Incorrerct login or password', 403);
       }

       UserService::seveUserData([
           'id'=>$user['id'],
           'login'=>$user['email'],
           'role'=>json_decode($user['roles'], true)
       ]);

       SecurityService::redirectToStartPage();
    }

    public function logout(){
        UserService::clear();

        SecurityService::redirectToLoginPage();
    }
}