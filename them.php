<?php
//nhận dữ liệu từ form
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];

//kết nối csdl
require_once 'ketnoi.php';

//viết lệnh sql để thêm dữ liệu
$themsql = "INSERT INTO sinhvien(masv, hoten, lop) VALUE ('$masv','$ht','$lop')";
// echo $themsql; exit; test xem lỗi ở đâu

//thực thi câu lệnh thêm
if (mysqli_query($conn, $themsql))
{
    //in thông báo thành công
    //echo "<h1> Thêm thành công</h1>";
    //trở về trang liệt kêasdasdassadjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
    header("Location: lietke.php");
}