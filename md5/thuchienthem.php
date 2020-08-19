<?php
    $connect = mysqli_connect("localhost","root","","mahoamd5");
    if(!$connect){
        exit("Kết nối thất bại");
    }
    $user = $_POST['user'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $enterpass = $_POST['enterthepassword'];

    if($pass==$enterpass && $user!=null && $name!=null && $email!=null){
        $passmd5 = md5(md5($pass));
        $sql = "INSERT INTO `user`(`user`, `name`, `email`, `password`) VALUES ('$user','$name','$email','$passmd5')";
        $ketqua = mysqli_query($connect, $sql);
        echo "<script>";
            if($ketqua){
                echo "alert(\"Thêm thành công\");";    
            }else{
                echo "alert(\"Thêm không thành công\");";     
            }
            echo "window.location = \"index.php\"; ";
        echo "</script>";
    }else{
        echo "<script>";
            echo "alert(\"Mật khẩu không chính xác\");";  
            echo "window.location = \"index.php\"; ";
        echo "</script>";
    }
?>