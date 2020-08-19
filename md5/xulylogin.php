<?php
    session_start();
    $connect = mysqli_connect("localhost","root","","mahoamd5");
    if(!$connect){
        exit("Kết nối thất bại");
    }

    $username = $_POST['uname'];
    $password = md5(md5($_POST['psw']));

    $sql = "SELECT * FROM user where user = '$username' and password = '$password'";
    $ketqua = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($ketqua);

    if(mysqli_num_rows($ketqua)>0){
        $_SESSION['user'] = $row['user'];
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