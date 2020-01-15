<?php
class Home extends Controller
{

    public $CategoryModel;
    public $AdsModel;

    public function __construct()
    {
        // Model

        $this->Phongban = $this->model("Phongban");
        $this->Chucvu = $this->model("Chucvu");
        $this->Nhansu = $this->model("Nhansu");
        $this->Chamcong = $this->model("Chamcong");
        $this->Thongke = $this->model("Thongke");
        $this->AdsModel = $this->model("AdsModel");
    }
    public function GetView()
    {
        if ($_SESSION["role"] == 1) {
            $this->view("master_page", [
                "page" => "home_admin",
                "url" => "./",
            ]);
        } else {
            $this->view("master_page", [
                "page" => "home",
                "url" => "./",
                "ads" => $this->AdsModel->ListAll(),
            ]);
        }
    }

    public function Phongban()
    {
        $this->view("master_page", [
            "page" => "phongban",
            "url" => "../",
            "phongban" => $this->Phongban->ListAll(),
        ]);
    }

    public function Chucvu()
    {
        $this->view("master_page", [
            "page" => "chucvu",
            "url" => "../",
            "chucvu" => $this->Chucvu->ListAll(),
        ]);
    }

    public function Nhansu()
    {
        $this->view("master_page", [
            "page" => "nhansu",
            "url" => "../",
            "phongban" => $this->Phongban->ListAll(),
            "chucvu" => $this->Chucvu->ListAll(),
            "nhansu" => $this->Nhansu->ListAll(),
        ]);
    }
    public function Chamcong()
    {
        $this->view("master_page", [
            "page" => "chamcong",
            "url" => "../",
            "chamcong" => $this->Chamcong->ListAll(),
        ]);
    }

    public function Thongke_chitiet()
    {
        $rs = $this->Thongke->thongke_chitiet();
        $this->view("master_page", [
            "page" => "thongke_chitiet",
            "url" => "../",
            "thongke" => $rs,
        ]);
    }

    public function Thongke()
    {
        if(isset($_POST["thongke"])){
            $rs = $this->Thongke->thongke_tong();
            header("Location:Thongke");
        }else{
            $rs = $this->Thongke->ListAll();
            $this->view("master_page", [
                "page" => "thongke",
                "url" => "../",
                "thongke" => $rs,
            ]);
        }
        
    }

    public function Bieudo_Thongke()
    {
        $rs_year = $this->Thongke->ListAll_json_year();
        $rs_year_old = $this->Thongke->ListAll_json_year_old();
        $this->view("master_page", [
            "page" => "bieudo_thongke",
            "url" => "../",
            "thongke_year" => $rs_year,
            "thongke_year_old" => $rs_year_old,
        ]);
    }

    //Delete Data 
    public function Delete_phongban($id)
    {
        //Model
        if ($this->Phongban->Delete($id)) {
            //Views
            header("Location:../Phongban");
        }
    }

    public function Delete_chucvu($id)
    {
        //Model
        if ($this->Chucvu->Delete($id)) {
            //Views
            header("Location:../Chucvu");
        }
    }

    public function Delete_nhansu($id)
    {
        //Model

        if ($this->Nhansu->Delete($id)) {
            //Views
            header("Location:../Nhansu");
        }
    }

    //Add Data
    public function Add_chucvu()
    {
        $MaCV = $_POST["macv"];
        $TenCV = $_POST["tencv"];
        if ($this->Chucvu->Add($MaCV, $TenCV)) {
            //Views
            header("Location:./Chucvu");
        }
    }
    public function Add_phongban()
    {
        $MaPB = $_POST["mapb"];
        $TenPB = $_POST["tenpb"];
        $SDT = $_POST["SDT"];
        if ($this->Phongban->Add($MaPB, $TenPB, $SDT)) {
            //Views
            header("Location:./Phongban");
        }
    }

    public function Add_nhansu()
    {
        $MaNV = $_POST["MaNV"];
        $TenNV = $_POST["TenNV"];
        $Ngaysinh = $_POST["Ngaysinh"];
        $Quequan = $_POST["Quequan"];
        $Gioitinh = $_POST["Gioitinh"];
        $Dantoc = $_POST["Dantoc"];
        $SDT = $_POST["SDT"];
        $MaPB = $_POST["MaPB"];
        $MaCV = $_POST["MaCV"];
        $Mucluong = $_POST["Mucluong"];
        if ($this->Nhansu->Add($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT, $MaPB, $MaCV, $Mucluong)) {
            //Views
            header("Location:./Nhansu");
        }
    }

    public function Get_info_user($MaNV)
    {
        //Model
        $rs = $this->Nhansu->get_information_user($MaNV);

        if ($rs) {
            $this->view("master_page", [
                "page" => "chinhsuanhansu",
                "url" => "../../",
                "info_user" => $rs,
                "phongban" => $this->Phongban->ListAll(),
                "chucvu" => $this->Chucvu->ListAll(),
            ]);
        }
    }
    public function Edit_nhansu($MaNV)
    {
        if (isset($_POST["edit_nhansu"])) {
            $TenNV = $_POST["TenNV"];
            $Ngaysinh = $_POST["Ngaysinh"];
            $Quequan = $_POST["Quequan"];
            $Gioitinh = $_POST["Gioitinh"];
            $Dantoc = $_POST["Dantoc"];
            $SDT = $_POST["SDT"];
            $MaPB = $_POST["MaPB"];
            $MaCV = $_POST["MaCV"];
            $Mucluong = $_POST["Mucluong"];
            if ($this->Nhansu->edit_nhansu($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT, $MaPB, $MaCV, $Mucluong)) {
                //Views
                header("Location:../Nhansu");
            }
        }
    }

    public function Edit_phongban($MaPB)
    {
        if (isset($_POST["edit_phongban"])) {
            $SDT = $_POST["update_SDT"];
            if ($this->Phongban->Edit_phongban($MaPB, $SDT)) {
                //Views
                header("Location:../Phongban");
            }
        }
    }

}
