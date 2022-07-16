<?php
require_once './vendor/autoload.php';

use App\Controllers\HomeController;
use App\Models\NhanVien;

$a = new NhanVien("NV01", "Nguyễn Minh Đức", "28/09/2001", "Hà Nội", "0839551901", "namtvph13226@fpt.edu.vn", 8300000, 2021);
$b = new NhanVien("NV02", "Nguyễn Minh Đức", "28/09/2001", "Hà Nội", "0839551901", "namtvph13226@fpt.edu.vn", 2500000, 2021);
$c = new NhanVien("NV03", "Nguyễn Minh Đức", "28/09/2001", "Hà Nội", "0839551901", "namtvph13226@fpt.edu.vn", 6000000, 2021);
$d = new NhanVien("NV04", "Nguyễn Minh Đức", "28/09/2001", "Hà Nội", "0839551901", "namtvph13226@fpt.edu.vn", 1100000, 2021);
$e = new NhanVien("NV05", "Nguyễn Minh Đức", "28/09/2001", "Hà Nội", "0839551901", "namtvph13226@fpt.edu.vn", 2000000, 2021);

$arr_nv = [$a, $b, $c, $d, $e];

$tb = $a->trungBinhLuong($arr_nv);
$tong = $a->tongLuong($arr_nv);
echo "<pre>";
var_dump($a, $b, $c, $d, $e);

var_dump($tb . " VNĐ");
echo "<br>";
var_dump($tong . " VNĐ");
?>