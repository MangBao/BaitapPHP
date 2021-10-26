<?php

class ChucVu extends Controller{

    public $cvModel;

    public function __construct()
    {
        $this->cvModel = $this->model("ChucVuModel");

        if (!isset($_SESSION["user"])) {
            $this->redirectTo("Login", "Index");
        }
    }

    public function Index()
    {
        $listcv = json_decode($this->cvModel->listChucVu(), true);
        // $listCTHD = json_decode($this->dhModel->listAll(), true);

        $this->view("layoutAdmin", [
            'page' => 'chucvu/index',
            'listcv' => $listcv
            // 'listCTHD' => $listCTHD
        ]);
    }

    public function Create()
    {
        // $pb = json_decode($this->cvModel->listPhongBan(), true);
        $cv = json_decode($this->cvModel->listChucVu(), true);
        // $listcv = json_decode($this->cvModel->listNhanVien(), true);

        $dem = count($cv);
        $macv = "LNV";
        
        if($dem < 10){
            $macv .= "0".($dem + 1);
        } else if($dem >= 10) {
            $macv .= ($dem + 1);
        } 
        
        // echo $manv;

        $this->view("layoutAdmin", [
            'page' => 'chucvu/create',
            'cv' => $cv,
            // 'pb' => $pb,
            'macv' => $macv
            // 'listCTHD' => $listCTHD
        ]);
    }

    function SaveCreate()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["macv"])) {
                $maloai = $_POST['macv'];
            }
            if (isset($_POST["tencv"])) {
                $tenloai = $_POST['tencv'];
            }
            
        }
        $this->cvModel->insert($maloai, $tenloai);

        return $this->redirectTo("ChucVu", "Success");
    }

    public function Edit($id)
    {
        $cv = json_decode($this->cvModel->getChucVuById($id), true);

        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'chucvu/edit',
            
            'cv' => $cv[0],
        ]);
    }

    public function Save($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["tenloai"])) {
                $tenloai = $_POST['tenloai'];
            }

            $save = $this->model("ChucVuModel");
            $save->update($id, $tenloai);
        }
        return $this->redirectTo("ChucVu", "Success");
    }

    public function Details($id)
    {
        $cv = json_decode($this->cvModel->getChucVuById($id), true);

        // var_dump($listDH[0]['TinhTrang']);

        $this->view("layoutAdmin", [
            'page' => 'chucvu/details',
            
            'cv' => $cv[0],
        ]);
    }

    public function Delete($id)
    {
        $cv = json_decode($this->cvModel->getChucVuById($id), true);
        $check = json_decode($this->cvModel->checkCVNVById($id), true);
        
        // var_dump($listDH[0]['TinhTrang']);

        if(count($check) == 0){            
            $this->view("layoutAdmin", [
                'page' => 'chucvu/delete',            
                'cv' => $cv[0],
            ]);
        } else {
            $this->view("layoutAdmin", [
                'page' => 'chucvu/lockdelete'
            ]);
        }
        
    }

    public function Confirm($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $confirm = $this->model("NhanVienModel");
            $this->cvModel->delete($id);
        }
        return $this->redirectTo("ChucVu", "Success");
    }

    public function Success()
    {
        $this->view("layoutAdmin", [
            'page' => 'chucvu/success'
            // 'listCTHD' => $listCTHD
        ]);
    }

    public function checkNV($id)
    {
        
    }
}
?>