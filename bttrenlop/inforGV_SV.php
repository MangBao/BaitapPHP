<?php

// use Nguoi as GlobalNguoi;
class Nguoi
{
    protected $name, $address, $sex;

    public function __construct($name, $address, $sex)
    {
        $this->name = $name;
        $this->address = $address;
        $this->sex = $sex;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getSex()
    {
        return $this->sex;
    }
}

class SinhVien extends Nguoi
{
    private $lop, $nganh;

    public function setLop($val)
    {
        $this->lop = $val;
    }

    public function getLop()
    {
        return $this->lop;
    }

    public function setNganh($val)
    {
        $this->nganh = $val;
    }

    public function getNganh()
    {
        return $this->nganh;
    }

    public function tinhDiemThuong()
    {
        if ($this->nganh == "cntt") {
            return 1;
        } else if ($this->nganh == "kinhte") {
            return 1.5;
        } else {
            return 0;
        }
    }

    
}

class GiangVien extends Nguoi
{
    private $trinhdo;
    private const luongcb = 1500000;

    public function setTrinhDo($val)
    {
        $this->trinhdo = $val;
    }

    public function getTrinhDo()
    {
        return $this->trinhdo;
    }

    public function tinhLuong()
    {
        if ($this->trinhdo == "cunhan") {
            return self::luongcb * 2.34;
        } else if ($this->trinhdo == "thacsi") {
            return self::luongcb * 3.67;
        } else if ($this->trinhdo == "tiensi") {
            return self::luongcb * 5.66;
        }
    }
}


?>