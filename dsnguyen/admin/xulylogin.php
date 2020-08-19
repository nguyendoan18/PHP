<?php
    session_start();
    include('ketnoi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM dsnguyen_user where dsnguyen_taikhoan = '$username' and dsnguyen_matkhau = '$password'";
    $ketqua = mysqli_query($ketnoi, $sql);
    $row = mysqli_fetch_array($ketqua);

    if(mysqli_num_rows($ketqua)>0){
        $_SESSION['dsnguyen_hoten'] = $row['dsnguyen_hoten'];
        echo "<script>";
            echo "window.location = 'index.php'";
        echo "</script>";
    }else{
        echo "<script>";
            echo "alert(\"Đăng nhập không thành công\");";
            echo "window.location = 'login.php'";
        echo "</script>";
    }
?>