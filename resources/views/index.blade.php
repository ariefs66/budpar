@extends('layouts.template')
@section('content')
<style>
	.no-padding {
		padding: 0px;
	}

	.no-margin {
		margin: 0px
	}

	.img_wrapper_grid {
		margin-bottom:0px;
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
	}

	.img_container {
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
	}

	.img_container_grid {
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
	}

	.img_container_grid img {
		opacity: 1;
	}
</style>

<!-- SubHeader =============================================== -->
<section class="parallax_window_in header-image" id="head_home" data-parallax="scroll" data-image-src="/asset/img/bch2.jpg" data-natural-width="1250" data-natural-height="800">
    <div id="sub_content_in">
        <h1 style="text-transform:none">When Travel Meets <!--<strong style="text-transform:uppercase">LANDSCAPE TO ESCAPE, FOOD LOVE TO EAT, CULTURE TO UNDERSTANDS</strong>-->
        <strong id="js-rotating" style="text-transform:uppercase">LANDSCAPE TO ESCAPE, FOOD LOVE TO EAT, CULTURE TO UNDERSTANDS</strong></h1>
        <p>"All what needs to Discover Bandung"</p>
    </div>
    <!-- End sub_content -->
</section>
<!-- End section -->
<!-- End SubHeader ============================================ -->

<div class="pattern_dots">
    <div class="container margin_60_45">
        <div class="main_title">
            <h2><strong>Popular</strong> Places</h2>
            <p>
            Ideas for Things to do in Bandung, called the 'Paris of Java' and a great place for a mix of culture and the outdoors adventures   
			</p>
            <span><em></em></span>
        </div>
        <!-- End main_title -->

        <div class="row">
            <div class="col-md-8 no-padding no-margin">
                <div class="img_wrapper_grid">
                    <div class="ribbon">
                        <span>Popular</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container" style="height: 544px;">
					    <div class="img_container_grid">
							<a href="#">
								<img src="/asset/img/kawahputih2.jpg" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Destination</strong></small>
									<h3>Kawah Putih Ciwidey</h3>
									<em>Popular Destination</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
                </div>
                <!-- End img_wrapper_grid -->
            </div>
            <div class="col-md-4 no-padding no-margin">
                <div class="img_wrapper_grid">
                    <div class="ribbon">
                        <span>Popular</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/kidsfam.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Destination</strong></small>
									<h3>Farm House Lembang</h3>
									<em>Easy Kid Friendly Holiday</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>

					</div>
                </div>
                <!-- End img_wrapper_grid -->
                <div class="img_wrapper_grid">
                    <div class="ribbon">
                        <span>Popular</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/tophotel.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Luxurious Hotel</strong></small>
									<h3>GH Universal</h3>
									<em>From Rp 900.000</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>

					</div>
                </div>
                <!-- End img_wrapper_grid -->
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-4 no-padding no-margin">
                <div class="img_wrapper_grid">
                    <div class="ribbon top">
                        <span>Top rated</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="#">
								<img src="/asset/img/topresto.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Authentic Restaurant</strong></small>
									<h3>Dusun Bambu</h3>
									<em>Authentic Bandung culinary, delicious and good price</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>

					</div>

                </div>
                <!-- End img_wrapper_grid -->
            </div>
            <div class="col-md-4 no-padding no-margin">
                <div class="img_wrapper_grid">
                    <div class="ribbon top">
                        <span>Top rated</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="#">
								<img src="/asset/img/angklung.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Culture Attraction</strong></small>
									<h3>Saung Angklung Udjo</h3>
									<em>One of pupular Indonesian music</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>

					</div>

                </div>
                <!-- End img_wrapper_grid -->
            </div>
            <div class="col-md-4 no-padding no-margin">
                <div class="img_wrapper_grid">
                    <div class="ribbon top">
                        <span>Top rated</span>
                    </div>
                    <div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
                        <div class="wishlist">
                            <a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
                                <div class="tooltip-content">Bookmark</div>
                            </a>
                        </div>
                    </div>
                    <!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="#">
								<img src="/asset/img/cibaduyut.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Shopping</strong></small>
									<h3>Cibaduyut Leather</h3>
									<em>Cibaduyut is one of most popular fashion spots</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>

					</div>
                </div>
                <!-- End img_wrapper_grid -->
            </div>
        </div>
    </div>
    <!-- End container -->
</div>
<!-- End pattern dots -->
<div class="pattern_dots">
	<div class="container margin_60_45">
		<div class="main_title">
			<h2><strong>Event</strong> of Bandung</h2>
			<p>
				The top event that will be held soon in Bandung.
			</p>
			<span><em></em></span>
		</div>
		<!-- End main_title -->

		<div class="row">
			<div class="col-md-8 no-padding no-margin">
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 544px;">
							<a href="/event-project/event-detail/' . $hEvents[0]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[0]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em></em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr= class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="/event-project/event-detail/' . $hEvents[1]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[1]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em></em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr= class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="/event-project/event-detail/' . $hEvents[2]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[2]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em></em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
		</div>
		<!-- End row -->
		<div class="row">
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr= class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="/event-project/event-detail/' . $hEvents[3]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[3]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em></em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>

				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr= class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="/event-project/event-detail/' . $hEvents[4]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[4]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em><</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr= class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container">
							<a href="/event-project/event-detail/' . $hEvents[5]->seo_title">
								<img src="/asset/uploads/events/' . $hEvents[5]->event_img_banner)?>" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Event</strong></small>
									<h3></h3>
									<em></em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="row">
			<div class="col-md-4 pull-right">
				<br>
				<a href="/event-project')?>" class="btn btn-warning pull-right">View More</a>
			</div>
		</div>
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</div>
<!-- End pattern dots -->
<div class="pattern_dots">
	<div class="container margin_60_45">
		<div class="main_title">
			<h2><strong>Cultures</strong> of Bandung</h2>
			<p>
				Ideas for Things to do in Bandung, called the 'Paris of Java' and a great place.
			</p>
			<span><em></em></span>
		</div>
		<!-- End main_title -->

		<div class="row">
			<div class="col-md-8 no-padding no-margin">
				<div class="img_wrapper_grid">
					<div class="ribbon">
						<span>Popular</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/1.jpg" width="800" height="480" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>Asia Africa Carnival</h3>
									<em>Carnival</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					<div class="ribbon">
						<span>Popular</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/7.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>Studio Rosid</h3>
									<em>Gallery</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
				<div class="img_wrapper_grid">
					<div class="ribbon">
						<span>Popular</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/3.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>BCH Studio</h3>
									<em>Music</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
		</div>
		<!-- End row -->
		<div class="row">
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					<div class="ribbon top">
						<span>Top rated</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/4.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>Geologi Museum</h3>
									<em>Museum</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					<div class="ribbon top">
						<span>Top rated</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/5.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>Taman Sejarah</h3>
									<em>Taman</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
			<div class="col-md-4 no-padding no-margin">
				<div class="img_wrapper_grid">
					<div class="ribbon top">
						<span>Top rated</span>
					</div>
					<div class="tools_i">
						<div class="directions_list">
							<a href="http://maps.google.com/maps?daddr=43.773460, 11.255985" class="tooltip_styled tooltip-effect-4" target="_blank">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Directions</span>
							</a>
						</div>
						<div class="wishlist">
							<a class="tooltip_styled tooltip-effect-4"><span class="tooltip-item"></span>
								<div class="tooltip-content">Bookmark</div>
							</a>
						</div>
					</div>
					<!-- End tools i-->
					<div class="img_container_grid">
						<div class="img_container" style="height: 100%;">
							<a href="#">
								<img src="/asset/img/cultures/6.jpg" width="800" height="468" class="img-responsive" alt="">
								<div class="short_info_grid">
									<small><strong>Top Culture</strong></small>
									<h3>Udjo Bandung</h3>
									<em>Art</em>
									<p>
										Read more
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End img_wrapper_grid -->
			</div>
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</div>
<!-- End pattern dots -->
<div id="map_home">
</div>
<!-- End map_home -->
<div class="container margin_60_30 fix_mobile">
	<div class="main_title">
		<h2><strong>Explore</strong> what's interesting</h2>
		<p>
			West Java's capital not only offers stunning architecture but also offers unrivaled culinary delights. We have created some itineraries and suggestions to make your exploration of Bandung even more enjoyable.</p>
		<span><em></em></span>
	</div>

	<div class="row box_cat">
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>24</span>
				<i class=" icon_set_1_icon-1"></i>
				<h3>Must see</h3>
				<p>
					Check these incredible destinations off your bucket list, amazing places to see around
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="/eventproject/event')?>">
				<span>34</span>
				<i class="icon_set_1_icon-41"></i>
				<h3>Events</h3>
				<p>
					Check out secret Bandung, our favourite attractions or discover events happening right now
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>12</span>
				<i class="icon_set_1_icon-6"></i>
				<h3>Hotels </h3>
				<p>
					Bandung has it all. Grand deluxe hotels, stylish boutique hotels, and more
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>43</span>
				<i class="icon_set_1_icon-58"></i>
				<h3>Restaurants</h3>
				<p>
					Here is some delicious inspiration for more or less serious foodies, authentic cuisine
				</p>
			</a>
		</div>
	</div>
	<!-- End row -->

	<div class="row box_cat">
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>24</span>
				<i class="icon_set_1_icon-3"></i>
				<h3>Attractions</h3>
				<p>
					A tourist attraction is a place of interest, its inherent or a exhibited natural or cultural value
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>34</span>
				<i class="icon_set_1_icon-50"></i>
				<h3>Shops</h3>
				<p>
					The city offers a variety of shopping malls, street markets and vintage shops
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>43</span>
				<i class="icon_set_1_icon-25"></i>
				<h3>Transport</h3>
				<p>
					Travelling within Bandung by public transport is straightforward and convenient
				</p>
			</a>
		</div>
		<div class="col-md-3 col-sm-6">
			<a href="#">
				<span>12</span>
				<i class="icon_set_1_icon-54"></i>
				<h3>Tourism Package & Deal</h3>
				<p>
					Offers best deals on tour packages, Fast & easy booking to lock your ticket
				</p>
			</a>
		</div>
	</div>
	<!-- End row -->
</div>
<!-- End container -->
<section class="margin_60_30">
    <div class="container">
        <div class="main_title">
            <h3>Other <strong>Popular</strong> from TravelGuide</h3>
            <p>
                Ne his postulant posidonium adversarium. Ius tollit tamquam indoctum ea, cu quo equidem perfecto adipiscing. Eu mel aliquid delenit. Recteque laboramus ea est, te qui eirmod similique.
            </p>
            <span><em></em></span>
        </div>
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="#section-1"><span>Suggested</span></a>
                    </li>
                    <li><a href="#section-2"><span>Top Viewed</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <section id="section-1">
                    <div class="row list_tabs">
                        <div class="col-md-4 col-sm-4">
                            <h2>Must see and Events</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/Runpocari.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Run Ready Get Sweat</h3>
                                            <small>Event - Annual Sport</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/Jazzb.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Bandung Jazz Festival 2018</h3>
                                            <small>Event - Music</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/boss.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Bosscha Observatory</h3>
                                            <small>Destination - Technology</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/floatingmarket.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Floating Market Lembang</h3>
                                            <small>Destinastion - Family Leisure Park</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Eat and Drink</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/icecream.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>56 Degress - Meringue Ice Cream</h3>
                                            <small>Culinary - Modern Cafe</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/alasdaun.jpg" alt="" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Alas Daun</h3>
                                            <small>Culinary - Sundanese</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/igabakar.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3> Iga Bakar Si Jangkung</h3>
                                            <small>Culinary - Authentic Food</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/burger.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Imamobs - Buffalo Steak Sandwich</h3>
                                            <small>Culinary - Western</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Tourism Package & Deal</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/citytour.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Bus City Tour IDR 50K</h3>
                                            <small>Tourism Package - City Tour</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/dreampark.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Dago Dream Park All In IDR 80K</h3>
                                            <small>Tourism Package - Family Adventure</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/transtudio.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Trans Studio Buy 1 Get 1</h3>
                                            <small>Tourism Package - Family Adventure</small>
                                        </a>
                                    </div>
                                </li>
<li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/localarif.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Stay at Home as Family</h3>
                                            <small>Tourism Package - Local Wisdom</small>
                                        </a>
                                    </div>
                                </li>								
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="section-2">
                    <div class="row list_tabs">
                        <div class="col-md-4 col-sm-4">
                            <h2>Must see and Events</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_12.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Michelangelo Sculpture</h3>
                                            <small>Architectural Buildings</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_13.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Michelangelo Sculpture</h3>
                                            <small>Museum - Attractions</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_14.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Museum Free Entrance</h3>
                                            <small>Museums - Events</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_15.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Flea Market</h3>
                                            <small>Attractions - Events</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Eat and Drink</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_16.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Da Alfredo</h3>
                                            <small>Pizza - Italian</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_17.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>La Bruschetteria</h3>
                                            <small>International - Italian</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_18.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Domenico Bar</h3>
                                            <small>Cocktails Bar</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_19.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Francis Bar</h3>
                                            <small>Pub</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Shops</h2>
                            <ul>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_20.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Florence Boutique</h3>
                                            <small>Men - Women</small>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#">
                                            <figure><img src="/asset/img/thumb_tabs_21.jpg" alt="thumb" class="img-rounded" width="60" height="60">
                                            </figure>
                                            <h3>Victoria Secrets</h3>
                                            <small>Men - Children</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!--  End content -->
        </div>
        <!-- End tabs -->
    </div>
</section>
<!--  End section white -->

<section class="parallax_window_home bright">
    <div class="container">
        <div class="main_title">
            <h3>How TravelGuide <strong>Works</strong></h3>
        </div>
        <div class="row features add_bottom_45">
            <div class="col-sm-4">
                <div id="feat_2">
                    <a href="#" class="bt_info">Read more</a>
                    <h3>Find places</h3>
                    <p>
                        The most interesting place close to you. Attractions, Museums, Restaurant...
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="feat_1">
                    <a href="#" class="bt_info">Read more</a>
                    <h3>Get info&amp;tips</h3>
                    <p>
                        The most important tips on your Mobile during a visit....online and offline.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="feat_3">
                    <a href="#" class="bt_info">Read more</a>
                    <h3>Read and listen</h3>
                    <p>
                        The most important info about a place reviewed by Quality Authors.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
    <div class="text-center">
        <a href="#0" class="button_2">Start Explore</a>
    </div>
</section>
<!-- End section -->


<!-- SPECIFIC SCRIPTS -->
<script src="/asset/js/morphext.min.js"></script>
<script>
	'use strict';
	$("#js-rotating").Morphext({
		animation: "fadeIn", // Overrides default "bounceIn"
		separator: ",", // Overrides default ","
		speed: 2300, // Overrides default 2000
		complete: function () {
			// Overrides default empty function
		}
	});
	// Tabs
	new CBPFWTabs(document.getElementById('tabs'));
</script>s

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBatJCkTGXjFKJO2XY71SFfC-2I_Sx9aWw"></script>
<script src="/asset/js/map_home.js"></script>
<script src="/asset/js/infobox.js"></script>
@endsection