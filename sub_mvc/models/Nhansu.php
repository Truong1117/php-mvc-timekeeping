<?php
class Nhansu extends db
{
    public function Change_password($username, $pass_old, $pass_new,$pass_new_rp)
    {
        $kq = false;
        if ($pass_new != $pass_new_rp) {
            $kq = false;
        }else{
            $pass_new_md5 = md5($pass_new);
            $pass_old_md5 = md5($pass_old);
            $qr = "UPDATE users SET password='$pass_new_md5' WHERE username='$username' AND password='$pass_old_md5'";
            if (mysqli_query($this->conn, $qr)) {
                $kq = true;
            }
        }

        return json_encode($kq);
    }

    public function ListAll()
    {
        $qr = "SELECT * FROM nhansu";
        return mysqli_query($this->conn, $qr);
    }

    public function Delete($id)
    {
        $qr_nhansu = "DELETE FROM nhansu WHERE id = $id";
        $rs = false;
        if (mysqli_query($this->conn, $qr_nhansu)) {
            $qr_user = "DELETE FROM users WHERE id = $id";
            mysqli_query($this->conn, $qr_user);
            $rs = true;
        }
        return json_encode($rs);
    }

    // public function Add($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh,$Dantoc,$SDT,$MaPB,$MaCV,$Mucluong)
    // {
    //     $qr = "INSERT INTO nhansu() VALUES('','$MaNV','$TenNV','','$Ngaysinh','$Quequan','$Gioitinh','$Dantoc','$SDT','$MaPB','$MaCV','$Mucluong')";
    //     $rs = false;
    //     if (mysqli_query($this->conn, $qr)) {
    //         $rs = true;
    //     }
    //     return json_encode($rs);
    // }
    public function Add($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT, $MaPB, $MaCV, $Mucluong)
    {
        $qr = "INSERT INTO nhansu() VALUES('','$MaNV','$TenNV','','$Ngaysinh','$Quequan','$Gioitinh','$Dantoc','$SDT','$MaPB','$MaCV','$Mucluong')";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $qr_sl = "SELECT * FROM nhansu WHERE TenNV = '$TenNV'";
            $result = mysqli_fetch_assoc($this->conn->query($qr_sl));

            $id_user = $result["id"];
            $qr_insert = "INSERT INTO users(id,username,password,role) VALUES('$id_user','$MaNV','1','2')";
            $this->conn->query($qr_insert);
            $rs = true;
        }
        return json_encode($rs);
    }

    //Show user
    public function get_information_user($username)
    {
        $qr = "SELECT * FROM nhansu 
        JOIN phongban ON nhansu.MaPB=phongban.MaPB 
        JOIN chucvu ON nhansu.MaCV = chucvu.MaCV
        WHERE MaNV = '$username'";
        return mysqli_query($this->conn, $qr);
    }

    //Edit user
    public function edit_infor($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT)
    {
        $qr = "UPDATE nhansu 
                SET TenNV = '$TenNV', Ngaysinh = '$Ngaysinh', Quequan='$Quequan',Gioitinh='$Gioitinh',Dantoc='$Dantoc',SDT='$SDT'
                WHERE MaNV='$MaNV'";
        return mysqli_query($this->conn, $qr);
    }

    //Edit usere equal admin
    public function edit_nhansu($MaNV, $TenNV, $Ngaysinh, $Quequan, $Gioitinh, $Dantoc, $SDT, $MaPB, $MaCV, $Mucluong)
    {
        $qr = "UPDATE nhansu 
                SET TenNV = '$TenNV', Ngaysinh = '$Ngaysinh', Quequan='$Quequan',Gioitinh='$Gioitinh',Dantoc='$Dantoc',SDT='$SDT',MaPB='$MaPB',MaCV='$MaCV',Mucluong='$Mucluong'
                WHERE MaNV='$MaNV'";
        return mysqli_query($this->conn, $qr);
    }
}
