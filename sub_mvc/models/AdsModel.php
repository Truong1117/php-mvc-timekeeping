<?php
 class AdsModel extends db
 {
     public function ListAll()
    {
        $qr = "SELECT * FROM ads";
        return mysqli_query($this->conn,$qr);
    }
 }
?>