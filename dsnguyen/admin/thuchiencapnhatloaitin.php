<?php
include('ketnoi.php');

$id =$_POST['id'];
$ten = $_POST['ten'];
$ghichu = $_POST['ghichu'];


$sql = "UPDATE dsnguyen_loaitin";
$sql.=" SET dsnguyen_tenloai = '$ten', dsnguyen_ghichu='$ghichu'";
$sql.=" where dsnguyen_id=$id";
$ketqua = mysqli_query($ketnoi,$sql);
echo "<script>";
    if($ketqua){
        echo "alert(\"Cập nhật thành công\");";    
    }else{
        echo "alert(\"Cập nhật không thành công\");";     
    }
    echo "window.location = \"index.php\"; ";
echo "</script>";

?>