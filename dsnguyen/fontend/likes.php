<?php
    include('../admin/ketnoi.php');
    $id_tintuc = $_GET['id'];
    $sql = "UPDATE dsnguyen_tintuc set dsnguyen_likes = dsnguyen_likes+1 where dsnguyen_id = $id_tintuc";
    mysqli_query($ketnoi, $sql);
    // echo "<script>";
    //     echo "window.location = 'blog-detail-01.php?id=$id_tintuc'";
    // echo "</script>";

    $sql1 = "SELECT dsnguyen_likes from dsnguyen_tintuc where dsnguyen_id = $id_tintuc";
    $ketqua = mysqli_query($ketnoi, $sql1);
    $row = mysqli_fetch_array($ketqua);
    echo $row[0];
?>