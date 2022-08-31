<?php include 'header.php';?>
<?php include 'layout/menu-top.php';?>
<main>
	<section class="box-banner">
		<div class="slide-banner">
			<div class="item-slide">
				<div class="item-banner"><img src="images/banner.jpg" class="img-fluid w-100" alt=""></div>
			</div>
			<div class="item-slide">
				<div class="item-banner"><img src="images/banner.jpg" class="img-fluid w-100" alt=""></div>
			</div>
			<div class="item-slide">
				<div class="item-banner"><img src="images/banner.jpg" class="img-fluid w-100" alt=""></div>
			</div>
		</div>
	</section>
	<section class="box-card-top">
		<div class="container">
			<ul>
				<li><a href="javascript:void(0)"><img src="images/card-1.png" class="img-fluid" alt=""><span>Đề xuất cho <br>riêng bạn</span></a></li>
				<li><a href="javascript:void(0)"><img src="images/card-2.png" class="img-fluid" alt=""><span>Lấy mã <br>giới thiệu</span></a></li>
				<li><a href="javascript:void(0)" class="clc-checkout"><img src="images/card-3.png" class="img-fluid" alt=""><span>Nạp tiền <br>vào ví</span></a></li>
				<li><a href="javascript:void(0)" class="clc-data-list"><img src="images/card-4.png" class="img-fluid" alt=""><span>Kho tư liệu <br>mật công ty</span></a></li>
			</ul>
		</div>
	</section>
	<section class="box-product"> 
		<div class="container">
			<div class="title">
				<div class="left"><h2><span>Ảnh đại diện</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2></div>
				<div class="right">
					<a href="javascript:void(0)" class="clc-detail-temp">Chi tiết ></a>
				</div>
			</div>
			<div class="list-avarta-top">
				<div class="slide-avarta">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/av-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-product">
		<div class="container">
			<div class="title">
				<h2><span>Ảnh bìa trang cá nhân</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
			</div>
			<div class="list-avarta-top">
				<div class="slide-product">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/prd-2.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-product">
		<div class="container">
			<div class="title">
				<h2><span>Banner Livestream</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
			</div>
			<div class="list-avarta-top">
				<div class="slide-product">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/prd-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-product">
		<div class="container">
			<div class="title">
				<h2><span>Thư mời</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
			</div>
			<div class="list-avarta-top">
				<div class="slide-product">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/prd-2.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-product">
		<div class="container">
			<div class="title">
				<h2><span>Banner chào đón</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
			</div>
			<div class="list-avarta-top">
				<div class="slide-product">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/prd-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-product">
		<div class="container">
			<div class="title">
				<h2><span>Banner vinh danh</span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
			</div>
			<div class="list-avarta-top">
				<div class="slide-product">
					<?php
						for ($x = 0; $x <= 4; $x++) { ?>
						  <div class="item-slide">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/prd-2.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="box-data-pol">
		<div class="container">
			<div class="title">
				<h2><span>TƯ LIỆU CÔNG TY DR.LACIR ></span></h2>
			</div>
			<div class="list-prd">
				<div class="row">
					<?php
						for ($x = 0; $x <= 7; $x++) { ?>
						  <div class="col-md-6 col-6 col-sm-6">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/av-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="box-detail-product">
		<div class="container">
			<div class="avar-thumb"><img src="images/thumb.png" class="img-fluid w-100" alt=""></div>
			<div class="info-thumb">
				<h1 class="text-uppercase text-center">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</h1>
				<div class="content-thumb-info">
					<div class="price">
						<del>đ159.000</del>
						<span>đ35.000</span>
					</div>
					<div class="vote-heart">
						<div class="star">
							<ul>
								<li><img src="images/star-1.png" class="img-fluid" alt=""></li>
								<li><img src="images/star-1.png" class="img-fluid" alt=""></li>
								<li><img src="images/star-1.png" class="img-fluid" alt=""></li>
								<li><img src="images/star-1.png" class="img-fluid" alt=""></li>
								<li><img src="images/star-1-o.png" class="img-fluid" alt=""></li>
								<li><span>Đã bán 20 mẫu</span></li>
							</ul>
						</div>
						<div class="heart">
							<a href="javascript:void(0)"><img src="images/heart-1-o.png" class="img-fluid img-o" alt=""><img src="images/heart-1.png" class="img-fluid img-f" alt=""></a>
						</div>
					</div>
					<div class="btn-thumbs">
						<ul>
							<li><a href="javascript:void(0)" class="creat-layout"><img src="images/mau.png" class="img-fluid" alt=""><span>Tạo mẫu</span></a></li>
							<li><a href="javascript:void(0)" class="clc-buy">Mua ngay</a></li>
						</ul>  
					</div>
				</div>
				<div class="info-confirm text-center">
					<p>Xác nhận mua thiết kế?</p>
					<ul>
						<li><a href="javascript:void(0)" class="no-confirm">HỦY</a></li>
						<li><a href="javascript:void(0)" class="yes-confirm">XÁC NHẬN</a></li>
					</ul>
				</div>
				<div class="line"></div>
			</div>
			<div class="list-prd">
				<div class="row">
					<?php
						for ($x = 0; $x <= 3; $x++) { ?>
						  <div class="col-md-6 col-6 col-sm-6">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/av-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="box-detail-template">
		<div class="container">
			<div class="detail-temp">
				<div class="title">
					<h2><span>Ảnh đại diện </span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
				</div>
				<div class="desc-detail">
					<ul>
						<li>
							<p>Nhà cung cấp:</p>
							<p>Mantan</p>
						</li>
						<li>
							<p>Ngày phát hành:</p>
							<p>29/08/2022</p>
						</li>
						<li>
							<p>Cập nhật vào:</p>
							<p>29/08/2022</p>
						</li>
						<li>
							<p>Kích thước:</p>
							<p>4:3</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="list-prd">
				<div class="title">
					<h2><span>Template trong kho </span><img src="images/arrow-right.png" class="img-fluid" alt=""></h2>
				</div>
				<div class="row">
					<?php
						for ($x = 0; $x <= 3; $x++) { ?>
						  <div class="col-md-6 col-6 col-sm-6">
							<div class="item-avarta-top">
								<div class="avarta"><a href="javascript:void(0)"><img src="images/av-1.png" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<h3 class="text-uppercase text-center"><a href="javascript:void(0)">AVATAR ẤN TƯỢNG ĐEN GOLD (A001)</a></h3>
									<div class="price">
										<del>đ159.000</del>
										<span>đ35.000</span> 
									</div>
									<div class="bot-avr">
										<div class="left">
											<div class="heart"><img src="images/heart.png" class="img-fluid" alt=""></div>
										</div>
										<div class="right">
											<div class="star">
												<ul>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star.png" class="img-fluid" alt=""></li>
													<li><img src="images/star-o.png" class="img-fluid" alt=""></li>
													<li><span>Đã bán 20 mẫu</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="box-detail-edit">
		<div class="teop">
			<div class="container">
				<div class="avar-thumb"><img src="images/thumb.png" class="img-fluid w-100" alt=""></div>
				<div class="btn-method-layer">
					<ul>
						<li><a href="javascript:void(0)" class="clc_layer layer-1">Layer</a></li>
						<li><a href="javascript:void(0)" class="clc_layer layer-2">Setting</a></li>
					</ul>
				</div>
				<div class="line"></div>
			</div>
		</div>
		<div class="container">
			<div class="info-thumb info-txt-tb">
				<div class="txt-method-edit text-center">Chọn <strong>Layer</strong> hoặc <strong>Setting</strong></div>
			</div>
			<div class="active-event">
				<div class="choose-top">
					<ul>
						<li><a href="javascript:void(0)" data-tab="tab-1" data-lock="lock-1" class="draggable active"><span>Layer 1</span></a></li>
						<li><a href="javascript:void(0)" data-tab="tab-2" data-lock="lock-2" class="draggable"><span>Text 2</span></a></li>
						<li><a href="javascript:void(0)" data-tab="tab-3" data-lock="lock-3" class="draggable"><span>Layer 3</span></a></li>
						<li><a href="javascript:void(0)" data-tab="tab-4" data-lock="lock-4" class="draggable"><span>Layer 4</span></a></li>
						<li><a href="javascript:void(0)" data-tab="tab-5" data-lock="lock-5" class="draggable"><span>Layer 5</span></a></li>
					</ul>
					<div id="console" class="d-none"></div>
				</div>
				<div class="content-tab-choose active" id="tab-1">
					<div class="top">
						<div class="left">
							<div class="lock-layer">
								<a href="javascript:void(0)" id="lock-1"></a>
							</div>
						</div>
						<div class="right">
							<ul>
								<li><a href="javascript:void(0)" class="clc-copy"><img src="images/copy.png" class="img-fluid" alt=""></a></li>
								<li><a href="javascript:void(0)" class="clc-remove"><img src="images/remove.png" class="img-fluid" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="frm-layer">
						<div class="item flex-1">
							<div class="i-flx">
								<span>Ảnh:</span>
								<input type="file" id="1001">
								<label for="1001"><img src="images/upload.png" class="img-fluid" alt=""></label>
							</div>
						</div>
						<div class="item flex-3">
							<div class="i-flx">
								<span>Kiểu:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Viền:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Màu viền:</span>
								<input type="text">
							</div>	
						</div>
						<div class="item flex-2">
							<div class="i-flx">
								<span>X:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Y:</span>
								<input type="text">
							</div>	
						</div>
						<div class="item flex-2">
							<div class="i-flx">
								<span>W:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>H:</span>
								<input type="text">
							</div>	
						</div>
					</div>
				</div>
				<div class="content-tab-choose" id="tab-2">
					<div class="top">
						<div class="left">
							<div class="lock-layer">
								<a href="javascript:void(0)" id="lock-2"></a>
							</div>
						</div>
						<div class="right">
							<ul>
								<li><a href="javascript:void(0)" class="clc-copy"><img src="images/copy.png" class="img-fluid" alt=""></a></li>
								<li><a href="javascript:void(0)" class="clc-remove"><img src="images/remove.png" class="img-fluid" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="frm-layer">
						<div class="item flex-2">
							<div class="i-flx">
								<span>Text:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Font:</span>
								<input type="text">
							</div>	
						</div>
						<div class="item flex-3">
							<div class="i-flx">
								<span>Cỡ:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Căn:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Màu:</span>
								<input type="text">
							</div>	
						</div>
						<div class="item flex-2">
							<div class="i-flx">
								<span>X:</span>
								<input type="text">
							</div>	
							<div class="i-flx">
								<span>Y:</span>
								<input type="text">
							</div>	
						</div>
						<div class="item flex-2">
							<div class="i-flx">
								<span>W:</span>
								<input type="text">
							</div>	 
							<div class="i-flx">
								<span>H:</span>
								<input type="text">
							</div>	
						</div>
					</div>
				</div>
				<div class="content-tab-choose" id="tab-3">
					<div class="frm-layer frm-layer-kt">
						<div class="item flex-1">
							<div class="i-flx d-block">
								<span style="display: block">Chiều dài:</span>
								<input type="text" class="txt_fx">
							</div>		
						</div>
						<div class="item flex-1">
							<div class="i-flx d-block">
								<span style="display: block">Độ cao:</span>
								<input type="text" class="txt_fx">
							</div>		
						</div>
						<div class="item flex-1">
							<div class="i-flx d-block">
								<span style="display: block">Màu nền:</span>
								<input type="text" class="txt_fx">
							</div>		
						</div>
						<div class="item flex-1">
							<div class="i-flx d-block">
								<span>Demo ảnh:</span>
								<input type="file" id="1001">
								<label for="1001"><img src="images/upload.png" class="img-fluid" alt=""></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="box-money">
		<div class="btn-back-card"><a href="javascript:void(0)"><img src="images/arrow-black.png" class="img-fluid" alt=""></a></div>
		<div class="btn-back-card-home"><a href="javascript:void(0)"><img src="images/arrow-black.png" class="img-fluid" alt=""></a></div>
		<div class="home-card-box home-1">
			<div class="user-card text-center">
				<div class="avar-card"><img src="images/avarta.png" class="img-fluid" alt=""></div>
				<div class="name-card">Nguyễn Minh Tuấn</div>
			</div>
			<div class="contnet-home-card">
				<div class="home-card">
					<div class="container">
						<div class="top">
							<ul>
								<li><div class="icon"><img src="images/p-1-1.png" class="img-fluid" alt=""></div><span>Đề xuất cho <br>riêng bạn</span></li>
								<li><div class="icon"><img src="images/p-1-2.png" class="img-fluid" alt=""></div><span>Lấy mã <br>giới thiệu</span></li>
								<li class="recharge"><div class="icon"><img src="images/p-1-3.png" class="img-fluid" alt=""></div><span>Nạp tiền <br>vào ví</span></li>
								<li class="clc-data-list"><div class="icon"><img src="images/p-1-4.png" class="img-fluid" alt=""></div><span>Kho tư liệu <br>mật công ty</span></li>
							</ul>
						</div>
						<div class="box-link">
							<div class="top-link">
								<ul>
									<li><a href="javascript:void(0)"><img src="images/link-1.png" class="img-fluid" alt=""><span>Order mẫu thiết kế độc quyền</span></a></li>
									<li><a href="javascript:void(0)"><img src="images/link-2.png" class="img-fluid" alt=""><span>Thông báo của bạn</span></a></li>
									<li><a href="javascript:void(0)"><img src="images/link-3.png" class="img-fluid" alt=""><span>Mẫu thiết kế yêu thích</span></a></li>
									<li><a href="javascript:void(0)"><img src="images/link-4.png" class="img-fluid" alt=""><span>Lịch sử mua hàng</span></a></li>
									<li><a href="javascript:void(0)"><img src="images/link-5.png" class="img-fluid" alt=""><span>Chia sẻ kiến thức KDOL</span></a></li>
								</ul>
							</div>
							<div class="bot-link">
								<ul>
									<li><a href="javascript:void(0)" class="change-pass"><img src="images/link-6.png" class="img-fluid" alt=""><span>Đổi mật khẩu</span></a></li>
									<li><a href=""><img src="images/link-7.png" class="img-fluid" alt=""><span>Đăng xuất</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="box-password">
					<div class="container">
						<div class="title text-center">
							<h2>Đổi mật khẩu</h2>
						</div>
						<div class="content-frm-pass">
							<div class="frm-pass checkpass">
								<div class="item-frm">
									<label>Mật khẩu cũ</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm tem-frm-pass mb-0">
									<input type="submit" class="btn_field btn-checkpass" value="Tiếp tục">
								</div>
							</div>
							<div class="frm-pass newpass">
								<div class="item-frm">
									<label>Mật khẩu mới</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm">
									<label>Xác nhận mật khẩu mới</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm tem-frm-pass mb-0">
									<input type="submit" class="btn_field" value="Tiếp tục">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-card-box home-2">
			<div class="user-card text-center">
				<p>
					<span>Số dư trong ví</span>
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.31328 10.1866C6.18661 10.1866 6.05995 10.1399 5.95995 10.0399C5.41328 9.49327 5.11328 8.7666 5.11328 7.99993C5.11328 6.40661 6.40661 5.11328 7.99993 5.11328C8.7666 5.11328 9.49327 5.41328 10.0399 5.95995C10.1333 6.05328 10.1866 6.17995 10.1866 6.31328C10.1866 6.44661 10.1333 6.57328 10.0399 6.66661L6.66661 10.0399C6.56661 10.1399 6.43995 10.1866 6.31328 10.1866ZM7.99993 6.11328C6.95993 6.11328 6.11328 6.95993 6.11328 7.99993C6.11328 8.33327 6.19995 8.65327 6.35995 8.93327L8.93327 6.35995C8.65327 6.19995 8.33327 6.11328 7.99993 6.11328Z" fill="black"/>
						<path d="M3.73323 12.3399C3.6199 12.3399 3.4999 12.2999 3.40656 12.2199C2.69323 11.6133 2.05323 10.8666 1.50656 9.99992C0.799896 8.89992 0.799896 7.10659 1.50656 5.99991C3.13323 3.45324 5.4999 1.98657 7.99987 1.98657C9.46654 1.98657 10.9132 2.49324 12.1799 3.44657C12.3999 3.61324 12.4465 3.92657 12.2799 4.14657C12.1132 4.36657 11.7999 4.41324 11.5799 4.24657C10.4865 3.41991 9.24654 2.98657 7.99987 2.98657C5.84656 2.98657 3.78656 4.27991 2.34656 6.53991C1.84656 7.31992 1.84656 8.67992 2.34656 9.45992C2.84656 10.2399 3.4199 10.9133 4.05323 11.4599C4.2599 11.6399 4.28656 11.9533 4.10656 12.1666C4.01323 12.2799 3.87323 12.3399 3.73323 12.3399Z" fill="black"/>
						<path d="M7.99904 14.0134C7.11238 14.0134 6.24571 13.8334 5.41238 13.4801C5.15904 13.3734 5.03904 13.0801 5.14571 12.8267C5.25238 12.5734 5.54571 12.4534 5.79904 12.5601C6.50571 12.8601 7.24571 13.0134 7.99238 13.0134C10.1457 13.0134 12.2057 11.7201 13.6457 9.46008C14.1457 8.68008 14.1457 7.32008 13.6457 6.54008C13.439 6.21341 13.2124 5.90008 12.9724 5.60675C12.799 5.39341 12.8324 5.08008 13.0457 4.90008C13.259 4.72675 13.5724 4.75341 13.7524 4.97341C14.0124 5.29341 14.2657 5.64008 14.4924 6.00008C15.199 7.10008 15.199 8.89341 14.4924 10.0001C12.8657 12.5467 10.499 14.0134 7.99904 14.0134Z" fill="black"/>
						<path d="M8.45973 10.8467C8.22639 10.8467 8.01306 10.68 7.96639 10.44C7.91306 10.1667 8.09306 9.90665 8.36639 9.85999C9.09973 9.72665 9.71306 9.11332 9.84639 8.37999C9.89973 8.10665 10.1597 7.93332 10.4331 7.97999C10.7064 8.03332 10.8864 8.29332 10.8331 8.56665C10.6197 9.71999 9.69973 10.6333 8.55306 10.8467C8.51973 10.84 8.49306 10.8467 8.45973 10.8467Z" fill="black"/>
						<path class="hide-money" d="M1.33299 15.1666C1.20632 15.1666 1.07966 15.1199 0.979656 15.0199C0.786322 14.8266 0.786322 14.5066 0.979656 14.3132L5.95966 9.33323C6.15299 9.1399 6.47299 9.1399 6.66632 9.33323C6.85969 9.52657 6.85969 9.84657 6.66632 10.0399L1.68632 15.0199C1.58632 15.1199 1.45966 15.1666 1.33299 15.1666Z" fill="black"/>
						<path class="hide-money" d="M9.68583 6.81327C9.55916 6.81327 9.43256 6.7666 9.33256 6.66663C9.13923 6.47329 9.13923 6.15329 9.33256 5.95996L14.3125 0.979961C14.5058 0.786628 14.8259 0.786628 15.0192 0.979961C15.2126 1.17329 15.2126 1.49329 15.0192 1.68663L10.0392 6.66663C9.93923 6.7666 9.81249 6.81327 9.68583 6.81327Z" fill="black"/>
					</svg>
				</p>
				<div class="total-money">
					<div class="hide-mn">*****</div>
					<div class="numb-mn">123.456.789 đ</div> 
				</div>

				<div class="btn-back-card"><a href="javascript:void(0)"><img src="images/arrow-black.png" class="img-fluid" alt=""></a></div>
			</div>
			<div class="contnet-home-card">
				<div class="home-card">
					<div class="container">
						<div class="top" style="margin-bottom: 30px">
							<ul style="padding: 0 30px;">
								<li><div class="icon"><img src="images/p-1-3.png" class="img-fluid" alt=""></div><span>Nạp tiền</span></li>
								<li><div class="icon"><img src="images/p-1-2.png" class="img-fluid" alt=""></div><span>Rút tiền</span></li>
								
								<li class="clc-data-list"><div class="icon"><img src="images/p-1-4.png" class="img-fluid" alt=""></div><span>Lịch sử <br>giao dịch</span></li>
							</ul>
						</div>
						<div class="box-payment">
							<div class="item-pay">
								<p>NẠP TIỀN</p>
								<input type="text" placeholder="0đ" class="txt_field">
							</div>
							<div class="item-pay">
								<p>NGUỒN TIỀN</p>
								<ul>
									<li>
										<div class="item-method active">
											<div class="icon"><img src="images/pay-1.png" class="img-fluid" alt=""></div>
											<div class="info">
												<h6>Ví điện tử Momo</h6>
												<label>Miễn phí nạp tiền</label>
											</div>
										</div>
									</li>
									<li>
										<div class="item-method">
											<div class="icon"><img src="images/pay-2.png" class="img-fluid" alt=""></div>
											<div class="info">
												<h6>Ngân hàng BIDV</h6>
												<label>Miễn phí nạp tiền</label>
											</div>
										</div>
									</li>
									<li>
										<div class="item-method">
											<div class="icon"><img src="images/pay-3.png" class="img-fluid" alt=""></div>
											<div class="info">
												<h6>Thêm ngân hàng nội địa/ quốc tế</h6>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="item-pay"> 
								<div class="policy">
									<div class="icon"><img src="images/khien.png" class="img-fluid" alt=""></div>
									<div class="desc">
										Mọi thông tin khách hàng đều được mã hóa để bảo mật thông tin khách hàng. <a href="">Tìm hiểu thêm</a>
									</div>
								</div>
							</div>
							<div class="item-pay text-center"> 
								<input type="submit" value="NẠP TIỀN" class="btn_pay" data-toggle="modal" data-target="#myModal">
							</div>
						</div>
					</div>
				</div>
				<div class="box-password">
					<div class="container">
						<div class="title text-center">
							<h2>Đổi mật khẩu</h2>
						</div>
						<div class="content-frm-pass">
							<div class="frm-pass checkpass">
								<div class="item-frm"> 
									<label>Mật khẩu cũ</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm tem-frm-pass mb-0">
									<input type="submit" class="btn_field btn-checkpass" value="Tiếp tục">
								</div>
							</div>
							<div class="frm-pass newpass">
								<div class="item-frm">
									<label>Mật khẩu mới</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm">
									<label>Xác nhận mật khẩu mới</label>
									<input type="text" class="txt_field" placeholder="Nhập mật khẩu">
								</div>
								<div class="item-frm tem-frm-pass mb-0">
									<input type="submit" class="btn_field" value="Tiếp tục">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="myModal">
		<div class="modal-dialog dialog-pay">
		    <div class="modal-content">
		    	<div class="modal-body">
		        	<div class="content-popup text-center">
		        		<p>Nạp tiền thành công!</p>
		        		<a href="javascript:void(0)" data-dismiss="modal">Tiếp tục</a>
		        	</div>
		    	</div>
		    </div>
		</div>
	</div>
</main>
<?php include 'layout/menu.php';?>
<?php include 'footer.php';?>