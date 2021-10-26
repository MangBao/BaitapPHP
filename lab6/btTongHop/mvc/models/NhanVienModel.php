<?php
class NhanVienModel extends DataBase {

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

    public function getNhanVienById($id) {
        $qr = "SELECT * FROM nhanvien nv, phongban pb, loainv cv WHERE nv.maphong = pb.maphong AND nv.maloai = cv.maloai AND manv = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function insert($manv, $honv, $tennv, $gioitinh, $ngaysinh, $diachi, $anh, $phongban, $chucvu) {
        $qr = "INSERT INTO nhanvien (manv, honv, tennv, ngaysinh, gioitinh, diachi, anh, maloai, maphong)
                VALUES 
                ('".$manv."', '".$honv."', '".$tennv."', CAST('".$ngaysinh."T00:00:00.000' AS DateTime), '".$gioitinh."', '".$diachi."', '".$anh."', '".$chucvu."', '".$phongban."')";
        return mysqli_query($this->con, $qr);
    }

    public function update($id, $honv, $tennv, $gioitinh, $ngaysinh, $diachi, $phongban, $chucvu) {
        $qr = "UPDATE nhanvien SET honv = '$honv', tennv = '$tennv', gioitinh = '$gioitinh',
                ngaysinh = '$ngaysinh', diachi = '$diachi', maphong = '$phongban', maloai = '$chucvu' WHERE manv = '$id'";        
        return mysqli_query($this->con, $qr);
    }

    public function delete($id) {
        $qr = "DELETE FROM nhanvien WHERE manv = '".$id."'";
        return mysqli_query($this->con, $qr);
    }
}
?>