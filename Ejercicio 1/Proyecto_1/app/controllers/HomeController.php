<?php


class HomeController {
    public function index() {
        
        require_once '../app/models/UserModel.php';

        $userModel = new UserModel();

      
        $users = $userModel->getUsers();

        
        require_once '../app/views/home.php';
    }
}