<?php
class Home_user extends Controller
{
    public $Phongban;
    public $Chucvu;

    public function __construct()
    {
        $this->Phongban = $this->model("Phongban");
        $this->Chucvu = $this->model("Chucvu");
        $this->Nhansu = $this->model("Nhansu");
        $this->Chamcong = $this->model("Chamcong");
    }
    public function GetView()
    {
        //Check user had timekeeping or hadn't
        $username = $_SESSION['username'];
        //Model
        
        $rs = $this->Chamcong->check_user_timekeeping($username);
        $this->view("master_page", [
            "page" => "home",
            "url" => "./",
            "stt" => $rs,
        ]);
        
    }

    //Show information of username
    public function information_user()
    {
        //Model
        $username = $_SESSION['username'];
        $rs = $this->Nhansu->get_information_user($username);
        if ($rs) {
            $this->view("master_page", [
                "page" => "information_user",
                "url" => "../",
                "info_user" => $rs,
                "phongban" => $this->Phongban->ListAll(),
                "chucvu" => $this->Chucvu->ListAll(),

            ]);
        }
    }

    //edit information user
    public function edit_infor($MaNV_url)
    {

        if (isset($_POST["edit_infor"])) {
            $TenNV = $_POST["TenNV"];
            $Ngaysinh = $_POST["Ngaysinh"];
            $Quequan = $_POST["Quequan"];
            $Gioitinh = $_POST["Gioitinh"];
            $Dantoc = $_POST["Dantoc"];
            $SDT = $_POST["SDT"];

            $rs = $this->Nhansu->edit_infor($MaNV_url, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT);

            if ($rs) {
                header("Location:../information_user");
            }
        }
    }

    public function Timekeeping()
    {
        $username = $_SESSION['username'];
        //Model
        $rs = $this->Chamcong->check_user_timekeeping($username);
        if ($rs == 'true') {
            header("Location:../Home_user");
        } else {
            $this->view("master_page", [
                "page" => "timekeeping",
                "url" => "../",
                "username" => $username,
                "phongban" => $this->Phongban->ListAll(),
                "chucvu" => $this->Chucvu->ListAll(),
            ]);
        }
    }

    
    public function insert_Timekeeping($MaNV)
    {
        //Model
        if (isset($_POST["timekeeping"])) {
            $day = $_POST["dtoday"];
            $times = $_POST["times"];
            if ($this->Chamcong->insert_Timekeeping($MaNV, $day, $times)) {
                header("Location:../Timekeeping");
            }
        }
    }

    public function Calendar()
    {
        //Model 
        $username = $_SESSION["username"];
        $check_today_timekeeping = $this->Chamcong->check_user_timekeeping($username);
        $list_timekeeping = $this->Chamcong->get_timekeeping_user($username);

        $this->view("master_page", [
            "page" => "calendar",
            "url" => "../",
            "check_today_timekeeping"=>$check_today_timekeeping,
            "list_timekeeping"=>$list_timekeeping,
        ]);
    }

    public function Change_password()
    {
        //Model 
        $username = $_SESSION["username"];
        $this->view("master_page", [
            "page" => "change_pass",
            "url" => "../",
            "username"=>$username,
        ]);
    }

    public function Active_change_password($MaNV){
        //Model
        $username = $_SESSION["username"];
        $pass_old = $_POST["pass_old"];
        $pass_new = $_POST["pass_new"];
        $pass_new_rp = $_POST["pass_new_rp"];    
        $rs = $this->Nhansu->Change_password($MaNV,$pass_old,$pass_new,$pass_new_rp);    
        $_SESSION["rs_chang_pass"] = $rs;
            header("Location:../Change_password");
    }
}
