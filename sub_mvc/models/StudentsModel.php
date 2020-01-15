<?php
 class StudentsModel extends db
 {
     public function GetStudents()
    {
        //connect DB
        return "Dong Van Truong hoc gi zay";
    }

    public function Sum($n,$m)
    {
        return $n + $m;
    }

    public function SinhVien()
    {
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->conn, $qr);
    }
 }
?>