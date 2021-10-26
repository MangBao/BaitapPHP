<?php

class PhongBan extends Controller{

    public $pbModel;

    public function __construct()
    {
        $this->pbModel = $this->model("PhongBanModel");

        if (!isset($_SESSION["user"])) {
            $this->redirectTo("Login", "Index");
        }
    }

    public function Index()
    {
        $listpb = json_decode($this->pbModel->listPhongBan(), true);
        // $listCTHD = json_decode($this->dhModel->listAll(), true);

        $this->view("layoutAdmin", [
            'page' => 'phongban/index',
            'listpb' => $listpb
            // 'listCTHD' => $listCTHD
        ]);
    }

    public function Create()
    {
        $pb = json_decode($this->pbModel->listPhongBan(), true);
        // $cv = json_decode($this->nvModel->listChucVu(), true);
        // $listnv = json_decode($this->nvModel->listNhanVien(), true);

        $dem = count($pb);
        $mapb = "PB";
        
        if($dem < 10){
            $mapb .= "0".($dem + 1);
        } else if($dem >= 10) {
            $mapb .= ($dem + 1);
        } 
        
        // echo $manv;

        $this->view("layoutAdmin", [
            'page' => 'phongban/create',
            // 'cv' => $cv,
            'pb' => $pb,
            'mapb' => $mapb
            // 'listCTHD' => $listCTHD
        ]);
    }

    function SaveCreate()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["maphong"])) {
                $maphong = $_POST['maphong'];
            }
            if (isset($_POST["tenphong"])) {
                $tenphong = $_POST['tenphong'];
            }
            
        }
        $this->pbModel->insert($maphong, $tenphong);

        return $this->redirectTo("PhongBan", "Success");
    }

    public function Edit($id)
    {
        $pb = json_decode($this->pbModel->getPhongBanById($id), true);

        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'phongban/edit',
            
            'pb' => $pb[0],
        ]);
    }

    public function Save($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["tenphong"])) {
                $tenphong = $_POST['tenphong'];
            }

            $save = $this->model("PhongBanModel");
            $save->update($id, $tenphong);
        }
        return $this->redirectTo("PhongBan", "Success");
    }

    public function Details($id)
    {
        $pb = json_decode($this->pbModel->getPhongBanById($id), true);
        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'phongban/details',
            'pb' => $pb[0],
        ]);
    }

    public function Delete($id)
    {
        $pb = json_decode($this->pbModel->getPhongBanById($id), true);
        $check = json_decode($this->pbModel->checkPBNVById($id), true);
        // var_dump($listDH[0]['TinhTrang']);

        if(count($check) == 0){
            $this->view("layoutAdmin", [
                'page' => 'phongban/delete',
                'pb' => $pb[0],
            ]);
        } else {            
            $this->view("layoutAdmin", [
                'page' => 'phongban/lockdelete'
            ]);
        }
        
    }

    public function Confirm($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $confirm = $this->model("NhanVienModel");
            $this->pbModel->delete($id);
        }
        return $this->redirectTo("PhongBan", "Success");
    }

    public function Success()
    {
        $this->view("layoutAdmin", [
            'page' => 'phongban/success'
            // 'listCTHD' => $listCTHD
        ]);
    }
}
?>