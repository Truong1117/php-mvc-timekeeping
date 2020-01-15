<?php
class Phongban extends db
{
    public function ListAll()
    {
        $qr = "SELECT * FROM phongban";
        return mysqli_query($this->conn, $qr);
    }

    public function Delete($id)
    {
        $qr = "DELETE FROM phongban WHERE id = $id";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }
        return json_encode($rs);
    }
    public function Add($MaPB, $TenPB, $SDT)
    {
        $qr = "INSERT INTO phongban() VALUES('','$MaPB','$TenPB','$SDT');";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }
        return json_encode($rs);
    }

    public function Edit_phongban($MaPB, $SDT)
    {
        $qr = "UPDATE phongban SET SDT='$SDT' WHERE MaPB='$MaPB'";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }
        return json_encode($rs);
    }
}
