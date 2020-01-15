<?php
error_reporting(0);
 class Chamcong extends db
 {
     public function ListAll()
    {
        $qr = "SELECT * FROM chamcong ORDER BY Ngay_CC DESC";
        return mysqli_query($this->conn,$qr);

        // $qr = "SELECT * FROM category";
        // $rows = mysqli_query($this->conn, $qr);
        // $arr = array();
        // while($row = mysqli_fetch_array($rows))
        // {
        //     $arr[] = $row;
        // }
        // return json_encode($arr);
    }

    public function insert_Timekeeping($MaNV,$day,$times){
        $qr = "INSERT INTO chamcong() VALUES('','$day','$MaNV','$times','1')";
        return mysqli_query($this->conn,$qr);
    }

    public function check_user_timekeeping($MaNV){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $day = date("Y/m/d");
        $kq = false;
        $qr = "SELECT * FROM chamcong WHERE MaNV = '$MaNV' AND Status = '1' AND Ngay_CC = '$day'";
        if(mysqli_fetch_assoc(mysqli_query($this->conn,$qr)) > 0){
            $kq = true;
        }
        return json_encode($kq);
    }

    public function get_timekeeping_user($MaNV){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $name_today = date("y");
        $month_today = date("m");
        $qr = "SELECT * FROM chamcong WHERE MaNV = '$MaNV' AND Status='1' AND Ngay_CC like '$name_today%$month_today%'";
        if($kq = mysqli_query($this->conn,$qr)){
            while($row = mysqli_fetch_assoc($kq)){
                $list_timekeeping[] = $row;
            }
            return $list_timekeeping;  
        }    
    }
 }
