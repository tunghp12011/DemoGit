<?php
//nhận dữ liệu từ form
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];
$id = $_POST['sid'];

//kết nối csdl
require_once 'ketnoi.php';

//viết lệnh sql để thêm dữ liệu
$updatesql = "UPDATE sinhvien SET masv='$masv',hoten='$ht',lop='$lop' WHERE id=$id";
//echo $updatesql; exit;kiểm tra

//thực thi câu lệnh thêm
if (mysqli_query($conn, $updatesql))
{
    //in thông báo thành công
    //echo "<h1> Thêm thành công</h1>";
    //trở về trang liệt kê
    header("Location: lietke.php");
}