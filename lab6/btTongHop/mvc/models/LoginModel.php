<?php
    class LoginModel extends DataBase{
        
        public function login($email){
            $sql = "SELECT * FROM nhanvien nv, users us WHERE nv.manv = us.manv AND usernames='".$email."'";
            return mysqli_query($this->con,$sql);
        }
    }
?>