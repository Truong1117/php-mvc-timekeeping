<?php 
    class Ajax extends Controller{
        public $UserModel;      
        public function __construct(){
            $this->UserModel = $this->model("UserModel");
        }
        public function checkUsername(){
            $MaNV_check = $_POST['MaNV_check'];
            $res = $this->UserModel->checkUsername($MaNV_check);
            if($res == 'true')
            {
                echo "Tài khoản này đã có người sử dụng";
            }
        }
    }
?>