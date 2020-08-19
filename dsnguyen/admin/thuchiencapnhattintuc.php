<?php
include('ketnoi.php');

$id =$_POST['id'];
$hinh = $_POST['hinh'];
$tieude = $_POST['tieude'];
$ngayday = date("Y-m-d");
$tacgia =$_POST['tacgia'];
$noidung = $_POST['noidung'];
$loaitin = $_POST['loaitin'];


$sql = "UPDATE dsnguyen_tintuc";
$sql.=" SET dsnguyen_hinh = '$hinh', dsnguyen_tieude='$tieude', dsnguyen_ngaydang='$ngayday', dsnguyen_tacgia = '$tacgia', dsnguyen_noidung='$noidung', dsnguyen_loaitin=$loaitin";
$sql.=" where dsnguyen_id=$id";
$ketqua = mysqli_query($ketnoi,$sql);
echo "<script>";
    if($ketqua){
        echo "alert(\"Cập nhật thành công\");";    
    }else{
        echo "alert(\"Cập nhật không thành công\");";     
    }
    echo "window.location = \"tintuc.php\"; ";
echo "</script>";

?>