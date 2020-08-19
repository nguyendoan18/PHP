<?php
    include('../admin/ketnoi.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM dsnguyen_tintuc where dsnguyen_id=$id";
    

		
	
  
	$ketqua = mysqli_query($ketnoi, $sql);
    $row = mysqli_fetch_array($ketqua);
	
	// lượt view
	$view = "UPDATE dsnguyen_tintuc set dsnguyen_view = dsnguyen_view+1 where dsnguyen_id = $row[0]";
	$kq_view = mysqli_query($ketnoi, $view);

	// bình luận
	$sql_bl = "SELECT * FROM dsnguyen_binhluan where dsnguyen_idtintuc = $row[0]";
	$kq_bl = mysqli_query($ketnoi, $sql_bl);
	
	
	// lấy tên loại
	$sql_tl = "SELECT * FROM dsnguyen_loaitin a, dsnguyen_tintuc b where b.dsnguyen_id = $row[0] and dsnguyen_loaitin = a.dsnguyen_id";
	$kq_tl = mysqli_query($ketnoi, $sql_tl);
	$row_tl = mysqli_fetch_array($kq_tl);

	//đếm số cmt
	$sql_cmt = "SELECT count(dsnguyen_id) FROM `dsnguyen_binhluan` WHERE dsnguyen_idtintuc = $row[0]";
	$kq_cmt = mysqli_query($ketnoi, $sql_cmt);
	$row_cmt = mysqli_fetch_array($kq_cmt);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Detail With Sidebar</title>
	<meta charset="UTF-8">
    <?php
		include('components/linkcss.php');
	?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
        <?php
		include('components/header.php');
	?>
	</header>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<a href="blog-list-01.html" class="breadcrumb-item f1-s-3 cl9">
					Blog 
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					 Nulla non interdum metus non laoreet nisi tellus eget aliquam lorem pellentesque
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								<?php echo $row_tl['dsnguyen_tenloai']; ?>
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								<?php echo $row['dsnguyen_tieude']; ?>
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										<?php echo "by ".$row['dsnguyen_tacgia']; ?>
									</a>

									<span class="m-rl-3">-</span>

									<span>
										<?php echo date('d',strtotime($row['dsnguyen_ngaydang']))." / ";
										echo date('m', strtotime($row['dsnguyen_ngaydang']))." / ";
										echo date('Y', strtotime($row['dsnguyen_ngaydang'])); ?>
									</span>
								</span>

								<span class="f1-s-3 cl8 m-r-15">
									<?php echo $row['dsnguyen_view']." Views"; ?>
								</span>

								<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
									<?php echo $row_cmt[0]; ?> Comment
								</a>

								<!-- <a style="margin-left: 5px" href="likes.php?id=<?php echo $row[0]; ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i>  <?php echo $row[8]; ?></a>
                            	<a style="margin-left: 15px" href="dislikes.php?id=<?php echo $row[0]; ?>"> <i class="fa fa-thumbs-down" aria-hidden="true"></i>  <?php echo $row[9]; ?></a> -->
								
								<a style="margin-left: 5px" onclick="likes(<?php echo $row[0]; ?>)" id="likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $row[8]; ?></a>
								<a style="margin-left: 15px" onclick="dislikes(<?php echo $row[0]; ?>)" id="dislikes"><i class="fa fa-thumbs-down" aria-hidden="true"></i><?php echo $row[9]; ?></a>

							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="<?php echo "../images/$row[1]"; ?>" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
								<?php echo $row['dsnguyen_noidung']; ?>
							</p>

							

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Streetstyle
									</a>

									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Crafts
									</a>
								</div>
							</div>

							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div>
						</div>

						<!-- Leave a comment -->
						<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								Binh luận:
							</h4>
							<?php
                        while($row_bl = mysqli_fetch_array($kq_bl)){

								?>
								<br>
								<div class="comment_area">
									<div class="media">
										
										<div class="media-left">
											<a href="#">
												<img style="width: 50px; height: 50px; margin-right: 20px;" class="media-object" src="../images/banner-01.jpg" alt="">
											</a>
										</div>
										
										<div class="media-body">
											<a class="media-heading" href="#"><?php echo $row_bl[1]." - ".$row_bl[5]; ?></a>
											<p><?php echo $row_bl[3];?></p>
											
											<a class="reply" href="#"><?php echo $row_bl[2];?> - Reply   -  Phản hồi</a>
										</div>
									</div>
								</div>
								<?php 
									}
								?>
							<form action="guibinhluan.php" method="POST">
								<h4>Nội dung:</h4>
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="noidung" placeholder="Bình luận..."></textarea>
								<h4>Họ tên:</h4>
								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="hoten" placeholder="Họ tên...">
								<h4>Email:</h4>
								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email...">
								<input type="hidden" value="<?php echo $row[0] ?>" name="id">
								<button type="submit" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
									Gửi bình luận
								</button>
							</form>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Fashion
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Beauty
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Street Style
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Life Style
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										DIY & Crafts
									</a>
								</li>
							</ul>
						</div>

						<!-- Archive -->
						<div class="p-b-37">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Archive
								</h3>
							</div>

							<ul class="p-t-32">
								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											July 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											June 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											May 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											April  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											March 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											February 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											January 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Popular Post
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-04.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Music
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-05.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Game
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 16
											</span>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-06.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Celebrity
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 12
											</span>
										</span>
									</div>
								</li>
							</ul>
						</div>

						<!-- Tag -->
						<?php include 'components/menu/tags.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php
		include('components/footer.php');
	?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>


    <?php
		include('components/linkjs.php');
	?>

</body>
</html>