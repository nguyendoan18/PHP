<?php
  session_start();
  if(!isset($_SESSION['dsnguyen_hoten'])){
    header("location:login.php");
  }else{
        include 'ketnoi.php';
        $id = $_GET['id'];
        $query="DELETE FROM dsnguyen_loaitin where dsnguyen_id = '$id'";
        $kq = mysqli_query($ketnoi, $query);
        echo "<script>";
            if($kq){
                echo "alert('Xóa thành công');";
            }else{
                echo "alert('Xóa không thành công');";
            }
        echo "window.location = 'index.php'";
        echo "</script>";
  }
?>