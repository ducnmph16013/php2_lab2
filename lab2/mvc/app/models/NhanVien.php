<?php

namespace App\Models;

class NhanVien {
    public $manv;
    public $tennv;
    public $ngaysinh;
    public $diachi;
    public $phonenumber;
    public $email;
    public $luong;
    public $namcongtac;

    public function __construct($manv, $tennv, $ngaysinh, $diachi, $phonenumber, $email, $luong, $namcongtac)
    {
        $this->manv = $manv;
        $this->tennv = $tennv;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->phonenumber = $phonenumber;
        $this->email = $email;
        $this->luong = $luong;
        $this->namcongtac = $namcongtac;
    }

    public function trungBinhLuong($arr_nv){
        $tong = 0;
        foreach($arr_nv as $nv) {
            $tong += $nv->luong;
        }
        return "Trung bình lương của " . count($arr_nv) . " nhân viên: " . ($tong/count($arr_nv));
    }

    public function tongLuong($arr_nv){
        $tong = 0;
        foreach($arr_nv as $nv) {
            $tong += $nv->luong;
        }
        return "Tổng lương của " . count($arr_nv) . " nhân viên: $tong";
}
}

?>