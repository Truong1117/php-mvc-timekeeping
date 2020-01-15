<?php

class Login extends Controller
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
        if (isset($_SESSION['username'])) {
            header("Location:Home");
            exit();
        }
    
        $this->view("master_log", [
            "page" => "login",
            "url" => "./",
        ]);
    }

    public function login_user()
    {
        //1.Get DATA USER INSERT
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_md5 = md5($password);
            
            // 2.INSERT DATA EQUAL USERS
            $rs = $this->UserModel->checkLogin($username, $password_md5);
            if ($rs["status"] == 0) {
                // 3.SHOW OK/FAILS   ON SCREENS
                $this->view("master_log", [
                    "url" => "../",
                    "page" => "login",
                    "result" => $rs,
                ]);
            } else {
                if ($_SESSION["role"] == 1) {
                    // $this->view("master_page", [
                    //     "page" => "home_admin",
                    //     "url" => "../",
                    // ]);
                    header("Location:../Home");
                } else {
                    // $this->view("master_page", [
                    //     "username" => $username,
                    //     "page" => "home",
                    //     "url" => "../",
                    // ]);
                    header("Location:../Home_user");
                }
            }
        }
    }

    public function logout_user()
    {
        session_destroy();
        header("Location:../Login");
    }
}
