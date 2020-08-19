<?php 
    include('../admin/ketnoi.php');
    $id_tintuc = $_POST['id'];
    $hoten = $_POST['hoten'];
    $ngaybinhluan = date("Y-m-d");
    $noidung = $_POST['noidung'];
    $email = $_POST['email'];

    $sql = "INSERT INTO dsnguyen_binhluan(dsnguyen_hoten, dsnguyen_ngaybinhluan, dsnguyen_noidung, dsnguyen_idtintuc, dsnguyen_email) ";
    $sql.="values('$hoten', '$ngaybinhluan', '$noidung', $id_tintuc, '$email')";
    $ketqua = mysqli_query($ketnoi, $sql);
    echo "<script>";
        // if($ketqua){
        //     echo "alert('Thêm thành công.');";
        // }else{
        //     echo "alert('Thêm không thành công.');";
        // }
        echo "window.location = 'blog-detail-01.php?id=$id_tintuc'";
    echo "</script>";

    // $sql1 = "SELECT * from dsnguyen_binhluan where dsnguyen_idtintuc = $id_tintuc";
    // $ketqua1 = mysqli_query($ketnoi, $sql1);
    // $row = mysqli_fetch_array($ketqua1);
    // echo $row[0];
?>