<?php

class NhanVien extends Controller
{

    public $nvModel;

    public function __construct()
    {
        $this->nvModel = $this->model("NhanVienModel");

        if (!isset($_SESSION["user"])) {
            $this->redirectTo("Login", "Index");
        }
    }

    public function Index()
    {
        $listnv = json_decode($this->nvModel->listNhanVien(), true);
        // $listCTHD = json_decode($this->dhModel->listAll(), true);

        $this->view("layoutAdmin", [
            'page' => 'nhanvien/index',
            'listnv' => $listnv
            // 'listCTHD' => $listCTHD
        ]);
    }

    public function Create()
    {
        $pb = json_decode($this->nvModel->listPhongBan(), true);
        $cv = json_decode($this->nvModel->listChucVu(), true);
        $listnv = json_decode($this->nvModel->listNhanVien(), true);

        $dem = count($listnv);
        $manv = "NV";

        if ($dem < 10) {
            $manv .= "0" . ($dem + 1);
        } else if ($dem >= 10) {
            $manv .= ($dem + 1);
        }

        // echo $manv;

        $this->view("layoutAdmin", [
            'page' => 'nhanvien/create',
            'cv' => $cv,
            'pb' => $pb,
            'manv' => $manv
            // 'listCTHD' => $listCTHD
        ]);
    }

    function SaveCreate()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["manv"])) {
                $manv = $_POST['manv'];
            }
            if (isset($_POST["honv"])) {
                $honv = $_POST['honv'];
            }
            if (isset($_POST["tennv"])) {
                $tennv = $_POST['tennv'];
            }
            if (isset($_POST["gioitinh"])) {
                $gioitinh = $_POST['gioitinh'];
            }
            if (isset($_POST["ngaysinh"])) {
                $ngaysinh = $_POST['ngaysinh'];
            }
            if (isset($_POST["diachi"])) {
                $diachi = $_POST['diachi'];
            }
            if (isset($_POST["phongban"])) {
                $phongban = $_POST['phongban'];
            }
            if (isset($_POST["chucvu"])) {
                $chucvu = $_POST['chucvu'];
            }
            if (isset($_FILES["anh"])) {
                $anh = $_FILES["anh"]['name'];
            }
            if($_FILES['anh']['name']!= NULL)
            {
                move_uploaded_file($_FILES["anh"]["tmp_name"], "public/home/img/staf/".$_FILES["anh"]["name"]);
                // echo "<h3>Upload thành công</h3>";
                // echo "Name: " .$_FILES["anh"]["name"]."<br>";
                // echo "Type: " .$_FILES["anh"]["type"]."<br>";
                // echo "Size: " .($_FILES["anh"]["size"]/1024)."Kb<br>";
                // echo "Temp. Stored in: ".$_FILES["anh"]["tmp_name"];
            }

        }
        $this->nvModel->insert($manv, $honv, $tennv, $gioitinh, $ngaysinh, $diachi, $anh, $phongban, $chucvu);

        return $this->redirectTo("NhanVien", "Success");
    }

    public function Edit($id)
    {
        $nv = json_decode($this->nvModel->getNhanVienById($id), true);
        $pb = json_decode($this->nvModel->listPhongBan(), true);
        $cv = json_decode($this->nvModel->listChucVu(), true);
        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'nhanvien/edit',
            'nv' => $nv[0],
            'cv' => $cv,
            'pb' => $pb,
        ]);
    }

    public function Save($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["honv"])) {
                $honv = $_POST['honv'];
            }
            if (isset($_POST["tennv"])) {
                $tennv = $_POST['tennv'];
            }
            if (isset($_POST["gioitinh"])) {
                $gioitinh = $_POST['gioitinh'];
            }
            if (isset($_POST["ngaysinh"])) {
                $ngaysinh = $_POST['ngaysinh'];
            }
            if (isset($_POST["diachi"])) {
                $diachi = $_POST['diachi'];
            }
            if (isset($_POST["phongban"])) {
                $phongban = $_POST['phongban'];
            }
            if (isset($_POST["chucvu"])) {
                $chucvu = $_POST['chucvu'];
            }

            $save = $this->model("NhanVienModel");
            $save->update($id, $honv, $tennv, $gioitinh, $ngaysinh, $diachi, $phongban, $chucvu);
        }
        return $this->redirectTo("NhanVien", "Success");
    }

    public function Details($id)
    {
        $nv = json_decode($this->nvModel->getNhanVienById($id), true);
        $pb = json_decode($this->nvModel->listPhongBan(), true);
        $cv = json_decode($this->nvModel->listChucVu(), true);
        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'nhanvien/details',
            'nv' => $nv[0],
            'cv' => $cv,
            'pb' => $pb,
        ]);
    }

    public function Delete($id)
    {
        $nv = json_decode($this->nvModel->getNhanVienById($id), true);
        $pb = json_decode($this->nvModel->listPhongBan(), true);
        $cv = json_decode($this->nvModel->listChucVu(), true);
        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'nhanvien/delete',
            'nv' => $nv[0],
            'cv' => $cv,
            'pb' => $pb,
        ]);
    }

    public function Confirm($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $confirm = $this->model("NhanVienModel");
            $this->nvModel->delete($id);
        }
        return $this->redirectTo("NhanVien", "Success");
    }

    public function Success()
    {
        $this->view("layoutAdmin", [
            'page' => 'nhanvien/success'
            // 'listCTHD' => $listCTHD
        ]);
    }
}
