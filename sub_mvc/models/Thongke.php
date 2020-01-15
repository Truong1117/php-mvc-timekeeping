<?php
class Thongke extends db
{
    public function ListAll()
    {
        $qr = "SELECT * FROM thongke ORDER BY NamTK DESC";
        $rs = mysqli_query($this->conn, $qr);

        return $rs;
    }

    public function ListAll_json_year()
    {
        $Year = date("Y");
        $qr = "SELECT * FROM thongke WHERE NamTK='$Year'";
        $rows = mysqli_query($this->conn, $qr);
            while($row = mysqli_fetch_assoc($rows)){
                    $arr_year[] += $row["Tong_KCC"];
            }
        return json_encode($arr_year);
    }
    public function ListAll_json_year_old()
    {
        $Year_old = date("Y")-1;
        $qr = "SELECT * FROM thongke WHERE NamTK='$Year_old'";
        $rows = mysqli_query($this->conn, $qr);
            while($row = mysqli_fetch_assoc($rows)){
                $arr_old[] += $row["Tong_KCC"];
            }
        return json_encode($arr_old);
    }

    public function thongke_chitiet()
    {
        $qr_sl = "SELECT MaNV,Count(*) as Tong_CC, Month(Ngay_CC) as Month, Year(Ngay_CC) as Year FROM chamcong GROUP BY YEAR(Ngay_CC), Month(Ngay_CC), MaNV ORDER BY Ngay_CC DESC";
        $rs = mysqli_query($this->conn, $qr_sl);
        return $rs;
    }

    public function thongke_tong()
    {
        $kq = false;
        //SELECT dem toan bo nhan vien trong cong ty
        $qr_sl_user = "SELECT COUNT(*) as Tong_NV FROM nhansu WHERE MaNV like 'NV%';";
        $rs_sl_user = mysqli_fetch_assoc(mysqli_query($this->conn, $qr_sl_user));
        $Tong_NV = $rs_sl_user["Tong_NV"];

        //SELECT Tong Cham cong
        $qr_sl = "SELECT Count(*) as Tong_CC, Month(Ngay_CC) as Month, Year(Ngay_CC) as Year FROM chamcong GROUP BY YEAR(Ngay_CC), Month(Ngay_CC)";
        if ($rs = mysqli_query($this->conn, $qr_sl)) {
            while ($row = mysqli_fetch_assoc($rs)) {
                $Tong_CC = $row["Tong_CC"] * $Tong_NV;
                $Month = $row["Month"];
                $Year = $row["Year"];
                $Tong_KCC = cal_days_in_month(CAL_GREGORIAN, $Month, $Year) * $Tong_NV - $Tong_CC;
                //Check Month && Year had or hadn't in table thongke
                $qr_sl_check_had = "SELECT * FROM thongke WHERE ThangTK = '$Month' AND NamTK = '$Year';";
                if (mysqli_num_rows(mysqli_query($this->conn, $qr_sl_check_had)) > 0) {
                    $kq = false;
                } else {
                    $qr_ins = "INSERT INTO thongke VALUES('','','$Month','$Year','$Tong_NV','$Tong_KCC')";
                    if ($rs_ins = mysqli_query($this->conn, $qr_ins)) {
                        $kq = true;
                    }
                }
            }
        }
        return $kq;
    }
}
