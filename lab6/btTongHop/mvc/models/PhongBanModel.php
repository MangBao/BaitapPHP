<?php
class PhongBanModel extends DataBase {

    public function listNhanVien()
    {
        $qr = "SELECT * FROM nhanvien";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function listPhongBan()
    {
        $qr = "SELECT * FROM phongban";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function listChucVu()
    {
        $qr = "SELECT * FROM loainv";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function getPhongBanById($id) {
        $qr = "SELECT * FROM phongban WHERE maphong = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function checkPBNVById($id) {
        $qr = "SELECT * FROM nhanvien nv, phongban pb WHERE pb.maphong = nv.maphong AND pb.maphong = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function insert($maphong, $tenphong) {
        $qr = "INSERT INTO phongban (maphong, tenphong)
                VALUES ('".$maphong."', '".$tenphong."')";
        return mysqli_query($this->con, $qr);
    }

    public function update($id, $tenphong) {
        $qr = "UPDATE phongban SET tenphong = '$tenphong' WHERE maphong = '$id'";        
        return mysqli_query($this->con, $qr);
    }

    public function delete($id) {
        $qr = "DELETE FROM phongban WHERE maphong = '".$id."'";
        return mysqli_query($this->con, $qr);
    }
}
?>