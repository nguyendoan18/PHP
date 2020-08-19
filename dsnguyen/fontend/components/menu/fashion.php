<?php
    include('../admin/ketnoi.php');
    $sql = "SELECT * FROM dsnguyen_tintuc where dsnguyen_loaitin = 5 ORDER BY dsnguyen_id DESC limit 1";
    $ketqua = mysqli_query($ketnoi, $sql);
?>    
    
    <!-- Fashion -->
    <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
        <div class="how2 how2-cl6 flex-sb-c m-b-35">
            <h3 class="f1-m-2 cl18 tab01-title">
                Fashion 
            </h3>


            <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                View all
                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
            </a>
        </div>

        <!-- Main Item post -->	
        <?php
        $row = mysqli_fetch_array($ketqua);
        echo "<div class=\"m-b-30\">";
            echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"wrap-pic-w hov1 trans-03\">";
            echo "<img src=\"../images/".$row[1]."\" alt=\"IMG\">";
            echo "</a>";

            echo "<div class=\"p-t-20\">";
                echo "<h5 class=\"p-b-5\">";
                    echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-m-3 cl2 hov-cl10 trans-03\">";
                        echo $row[2];
                    echo "</a>";
                echo "</h5>";

                echo "<span class=\"cl8\">";
                    echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-6 cl8 hov-cl10 trans-03\">";
                        echo date('d', strtotime($row[3]))." / ";
                        echo date('m', strtotime($row[3]))." / ";
                        echo date('Y', strtotime($row[3]));
                    echo "</a>";
                echo "</span>";
            echo "</div>";
        echo "</div>";
        include('fashion1.php');
        ?>
    </div>