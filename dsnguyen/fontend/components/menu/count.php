<div class="col-sm-6 col-lg-4 p-b-20">
    <div class="size-h-3 flex-s-c">
        <h5 class="f1-m-7 cl0">
            Loại tin
        </h5>
    </div>
    
    <ul class="m-t--12">
    <?php
        include('../admin/ketnoi.php');
        include('components/menu/ham.php');
        $sql = "SELECT * FROM dsnguyen_loaitin";
        $ketqua = mysqli_query($ketnoi, $sql);
        while($row = mysqli_fetch_array($ketqua)){
            echo "<li><a href=\"#\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>".$row[1]." (".countLoaiTin($ketnoi, $row[0]).")</a></li>";
        }
    ?>

    </ul>
</div>