<?php
    include('../admin/ketnoi.php');
    $sql = "SELECT a.dsnguyen_id, dsnguyen_hinh, dsnguyen_tieude, dsnguyen_ngaydang, dsnguyen_tacgia, dsnguyen_noidung, dsnguyen_loaitin, dsnguyen_view, b.dsnguyen_tenloai FROM `dsnguyen_tintuc` a, dsnguyen_loaitin b WHERE a.dsnguyen_loaitin = b.dsnguyen_id ORDER BY dsnguyen_view DESC limit 6";
	$ketqua = mysqli_query($ketnoi, $sql);
	
?>



<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">
			<?php
			while($row = mysqli_fetch_array($ketqua)){
				echo "<div class=\"col-sm-6 col-lg-4 p-rl-1 p-b-2\">";
				echo "<div class=\"bg-img1 size-a-12 how1 pos-relative\" style=\"background-image: url(../images/".$row['dsnguyen_hinh'].")\">";
					echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"dis-block how1-child1 trans-03\"></a>";

					echo "<div class=\"flex-col-e-s s-full p-rl-25 p-tb-11\">";
						echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2\">";
							echo $row[2];
						echo "</a>";

						echo "<h3 class=\"how1-child2 m-t-10\">";
							echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-m-1 cl0 hov-cl10 trans-03\">";
								echo $row['dsnguyen_tenloai'];
							echo "</a>";
						echo "</h3>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			}
			
			?>
			
		</div>
	</div>
</section>