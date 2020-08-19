<?php
    include('../admin/ketnoi.php');
	$sql = "SELECT dsnguyen_id,	dsnguyen_hinh, dsnguyen_tieude, dsnguyen_ngaydang, dsnguyen_tacgia, LEFT(dsnguyen_noidung,150) as noidung, dsnguyen_loaitin FROM dsnguyen_tintuc  ORDER BY dsnguyen_id DESC limit 7";
	$ketqua = mysqli_query($ketnoi, $sql);

?>

<section class="bg0 p-t-50 p-b-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-50">
					<div class="p-r-10 p-r-0-sr991">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Tin mới nhất
							</h3>
						</div>

						<div class="p-b-40">
							<!-- Item post -->
							<?php
							while($row = mysqli_fetch_array($ketqua)){
								echo "<div class=\"flex-wr-sb-s p-t-40 p-b-15 how-bor2\">";
								echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25\">";
									echo "<img src=\"../images/".$row[1]."\" alt=\"IMG\">";
								echo "</a>";

								echo "<div class=\"size-w-9 w-full-sr575 m-b-25\">";
									echo "<h5 class=\"p-b-12\">";
										echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-l-1 cl2 hov-cl10 trans-03 respon2\">";
											echo $row[2];
										echo "</a>";
									echo "</h5>";

									echo "<div class=\"cl8 p-b-18\">";
										echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-4 cl8 hov-cl10 trans-03\">";
											echo "by ".$row[4];
										echo "</a>";

										echo "<span class=\"f1-s-3 m-rl-3\">";
											echo "-";
											echo date('d',strtotime($row[3]))." / ";
											echo date('m', strtotime($row[3]))." / ";
											echo date('Y', strtotime($row[3]));
										echo "</span>";
									echo "</div>";

									echo "<p class=\"f1-s-1 cl6 p-b-24\">";
										echo "<p style=\"font-size: 10px;\">".$row['noidung']."</p>"."<a  href=\"blog-detail-01.php?id=".$row[0]."\">(xem thêm)</a>";
									echo "</p>";

									echo "<a href=\"blog-detail-01.php?id=".$row[0]."\" class=\"f1-s-1 cl9 hov-cl10 trans-03\">";
										echo "Read More";
										echo "<i class=\"m-l-2 fa fa-long-arrow-alt-right\"></i>";
									echo "</a>";
								echo "</div>";
							echo "</div>";
							}
							
							?>
							
						</div>

						<a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
							Load More
						</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-50">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Banner -->
						<div class="flex-c-s">
							<a href="#">
								<img class="max-w-full" src="images/banner-03.jpg" alt="IMG">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>