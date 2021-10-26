<?php
class ChucVuModel extends DataBase {

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

    public function checkCVNVById($id) {
        $qr = "SELECT * FROM nhanvien nv, loainv cv WHERE nv.maloai = cv.maloai AND cv.maloai = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function getChucVuById($id) {
        $qr = "SELECT * FROM loainv WHERE maloai = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function insert($maloai, $tenloai) {
        $qr = "INSERT INTO loainv (maloai, tenloai)
                VALUES ('".$maloai."', '".$tenloai."')";
        return mysqli_query($this->con, $qr);
    }

    public function update($id, $tenloai) {
        $qr = "UPDATE loainv SET tenloai = '$tenloai' WHERE maloai = '$id'";        
        return mysqli_query($this->con, $qr);
    }

    public function delete($id) {
        $qr = "DELETE FROM loainv WHERE maloai = '".$id."'";
        return mysqli_query($this->con, $qr);
    }
}
?>