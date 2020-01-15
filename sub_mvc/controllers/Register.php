<?php

class Register extends Controller
{

    public $CategoryModel;
    public $AdsModel;
    public $UserModel;

    public function __construct()
    {
        //Model
        $this->UserModel = $this->model("UserModel");
    }
    public function GetView()
    {
        $this->view("master_log", [
            "page" => "register",
            "url" => "./",
        ]);
    }

    public function register_user()
    {
        //1.Get DATA USER INSERT
        if (isset($_POST['btnRegister'])) {
            $username = $_POST['username_reg'];
            $password = $_POST['password'];
            $role = 2;

            //check Username ton tai hay khong ton tai
            $checkUsername = $this->UserModel->checkUsername($username);
            if ($checkUsername == 'true') {
                header("Location:../Register");
            } else {
                // 2.INSERT DATA EQUAL USERS
                $rs = $this->UserModel->InserNewUser($username,$password,$role);
                // 3.SHOW OK/FAILS ON SCREENS
                header("Location:../Login");
            }
        }
    }
}
