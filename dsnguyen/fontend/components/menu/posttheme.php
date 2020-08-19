<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- Entertainment  -->
						<?php
						include('entertainment.php');
						include('business.php');
						include('travel.php');
						?>
						<!-- Other Business -->

						<!-- Travel  -->

					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Stay Connected -->
						<div class="p-b-35">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Phản hồi
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fa fa-thumbs-up"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											<?php
												include '../admin/ketnoi.php';
												$dislike = "SELECT SUM(dsnguyen_likes) FROM dsnguyen_tintuc";
												$kq3 = mysqli_query($ketnoi, $dislike);
												$row_dislike = mysqli_fetch_array($kq3);
												echo $row_dislike[0]." Tổng lượt like";
											?>
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fa fa-thumbs-down"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											<?php
												include '../admin/ketnoi.php';
												$like = "SELECT SUM(dsnguyen_dislikes) FROM dsnguyen_tintuc";
												$kq = mysqli_query($ketnoi, $like);
												$row_like = mysqli_fetch_array($kq);
												echo $row_like[0]." Tổng lượt like";
											?>
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Dislike
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fas fa-comments"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
										<?php
												include '../admin/ketnoi.php';
												$cmt = "SELECT COUNT(dsnguyen_id) FROM dsnguyen_binhluan";
												$kq1 = mysqli_query($ketnoi, $cmt);
												$row_cmt = mysqli_fetch_array($kq1);
												echo $row_cmt[0]." Tổng số bình luận";
											?>
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Bình luận
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fas fa-eye"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
										<?php
												include '../admin/ketnoi.php';
												$eye = "SELECT SUM(dsnguyen_view) FROM dsnguyen_tintuc";
												$kq2 = mysqli_query($ketnoi, $eye);
												$row_eye = mysqli_fetch_array($kq2);
												echo $row_eye[0]." Tổng lượt View";
											?>
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											View
										</a>
									</div>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<?php include 'mostpopular.php';?>

						<!--  -->
						<div class="flex-c-s p-t-8 p-b-65">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									Featured Video
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="images/video-01.jpg" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Music lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<span class="cl15">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								Subscribe
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>
						
						<!-- Tag -->
							<?php include 'components/menu/tags.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</section>