<?php
 class Chucvu extends db
 {
     public function ListAll()
    {
        $qr = "SELECT * FROM chucvu";
        return mysqli_query($this->conn,$qr);
    }

    public function Delete($id){
        $qr = "DELETE FROM chucvu WHERE id = $id";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }
        return json_encode($rs);
    }

    public function Add($MaCV, $TenCV){
        $qr = "INSERT INTO chucvu() VALUES('','$MaCV','$TenCV');";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }
        return json_encode($rs);
    }

 }
?>