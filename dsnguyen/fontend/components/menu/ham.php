<?php
    function addView($ketnoi, $id){
        $sql_view = "UPDATE dsnguyen_tintuc set dsnguyen_view=dsnguyen_view+1 where dsnguyen_id=$id";
        mysqli_query($ketnoi, $sql_view);
    }
    function countLoaiTin($ketnoi, $id){
        $sql1 = "SELECT COUNT(dsnguyen_id) FROM dsnguyen_tintuc where dsnguyen_loaitin = $id";
        $ketqua1 = mysqli_query($ketnoi, $sql1);
        $count = mysqli_fetch_array($ketqua1);
        return $count[0];
    }
?>