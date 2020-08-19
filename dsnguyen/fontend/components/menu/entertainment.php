<?php
    include('../admin/ketnoi.php');
    $sql = "SELECT * FROM dsnguyen_tintuc where dsnguyen_loaitin = 1 ORDER BY dsnguyen_id DESC limit 1";
	$ketqua = mysqli_query($ketnoi, $sql);
	$row = mysqli_fetch_array($ketqua);
?>



<div class="p-b-20">
	<div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
		<h3 class="f1-m-2 cl12 tab01-title">
			Entertainment
		</h3>


		<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
			View all
			<i class="fs-12 m-l-5 fa fa-caret-right"></i>
		</a>
	</div>

	<div class="row p-t-35">
		<div class="col-sm-6 p-r-25 p-r-15-sr991">
			<!-- Item post -->
			<div class="m-b-30">
			<?php echo"<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"wrap-pic-w hov1 trans-03\">";
					echo"<img src=\"../images/".$row[1]."\" alt=\"IMG\">"; ?>
				</a>

				<div class="p-t-20">
					<h5 class="p-b-5">
						<?php echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-m-3 cl2 hov-cl10 trans-03\">";
							 echo $row[2]; ?> 
						</a>
					</h5>

					<div class="blog_date">
						<?php echo "<a href= \"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-4 cl8 hov-cl10 trans-03\">";?>
							<?php echo date('d', strtotime($row[3]))." /"; ?>
							<?php echo date('m', strtotime($row[3]))." /"; ?>
							<?php echo date('Y', strtotime($row[3])); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php
			include('entertainment1.php');
		?>
		
	</div>
</div>