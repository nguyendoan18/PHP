<?php
    include('../admin/ketnoi.php');
    $sql = "SELECT dsnguyen_id, dsnguyen_hinh, dsnguyen_tieude, dsnguyen_ngaydang, dsnguyen_tacgia, LEFT(dsnguyen_noidung, 150), dsnguyen_loaitin, dsnguyen_view, dsnguyen_view, dsnguyen_likes, dsnguyen_dislikes FROM dsnguyen_tintuc where dsnguyen_loaitin = 6 ORDER BY dsnguyen_id DESC limit 1";
	$ketqua = mysqli_query($ketnoi, $sql);
	$row = mysqli_fetch_array($ketqua);
?>


<div class="p-b-25 p-r-10 p-r-0-sr991">
    <div class="how2 how2-cl3 flex-s-c">
        <h3 class="f1-m-2 cl14 tab01-title">
            Travel
        </h3>
    </div>

    <div class="flex-wr-sb-s p-t-35">
        <?php
        echo "<div class=\"size-w-6 w-full-sr575\">";
            
            echo "<div class=\"m-b-30\">";
                echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"wrap-pic-w hov1 trans-03\">";
                echo "<img src=\"../images/".$row[1]."\" alt=\"IMG\">";
                echo "</a>";

                echo "<div class=\"p-t-25\">";
                    echo "<h5 class=\"p-b-5\">";
                        echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-m-3 cl2 hov-cl10 trans-03\">";
                        echo $row[2];
                        echo "</a>";
                    echo "</h5>";

                    echo "<div class=\"blog_date\">";
						echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-4 cl8 hov-cl10 trans-03\">";
							echo date('d', strtotime($row[3]))." /";
							echo date('m', strtotime($row[3]))." /";
							echo date('Y', strtotime($row[3])); 
						echo "</a>";
					echo "</div>";
                    
                    echo "<p class=\"f1-s-1 cl6 p-t-18\">";
                       echo $row[5];
                    echo "</p>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
       
        ?>

        <div class="size-w-7 w-full-sr575">
            <?php include('travel1.php'); ?>
        </div>
    </div>
</div>