<?php
    include('../admin/ketnoi.php');
    $sql = "SELECT * FROM dsnguyen_tintuc where dsnguyen_loaitin = 6 and dsnguyen_id NOT IN( SELECT MAX(dsnguyen_id) FROM dsnguyen_tintuc WHERE dsnguyen_loaitin = 6) ORDER BY dsnguyen_id DESC limit 2";
    $ketqua = mysqli_query($ketnoi, $sql);
?>


    <!-- Item post -->	
    <?php
    while($row = mysqli_fetch_array($ketqua)){
        echo "<div class=\"m-b-30\">";
            echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"wrap-pic-w hov1 trans-03\">";
                echo "<img src=\"../images/".$row[1]."\" alt=\"IMG\">";
            echo "</a>";

            echo "<div class=\"p-t-10\">";
                echo "<h5 class=\"p-b-5\">";
                    echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-5 cl3 hov-cl10 trans-03\">";
                        echo $row[2];
                    echo "</a>";
                echo "</h5>";

                echo "<span class=\"cl8\">";
                    echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-6 cl8 hov-cl10 trans-03\">";
                    echo date('d',strtotime($row[3]))." / ";
                    echo date('m', strtotime($row[3]))." / ";
                    echo date('Y', strtotime($row[3]));
                    echo "</a>";
                echo "</span>";
            echo "</div>";
        echo "</div>";
    }
    ?>