@extends("layouts.template")
@section('content')
<style type="text/css">
.top-80{
	margin-top: 80px;
}
.detail-feed{
	background: white;
	border-radius: 8px;
	/*width: 100%; */
	margin:10px 10px 15px 10px;
    border: 1px solid #ddd;
}
.myslide{
	background: white;
	border-radius: 8px;
	/*width: 100%; */
	margin:10px 10px 15px 10px;
}
.owl-carousel .owl-item img {
	/*width: 200px;*/
	border-radius: 5px;
}
.title-detail{
	font-size: 25px;
    font-weight: bold;
}
.star{
	color: #1e90ff;
	display: inline-block;
}
.title{
	margin : 10px 30px 10px 30px;
}
.feature{
	margin : 10px 30px 40px 30px;
}
.img-feed{
	width: 280px;
	border-radius: 5px;
	margin: 10px;
}
.title-kamar{
	font-size: 25px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
<div class="container top-80">
	<div class="row detail-feed" >
		<div class="myslide">
			<div id="slide_img" class="owl-carousel owl-theme">
            	<img src="/asset/img/hotel/padma.jpg">  
            	<img src="/asset/img/hotel/padma.jpg">  
            	<img src="/asset/img/hotel/padma.jpg">        
            </div>
            
		</div>
	</div>
	<div class="row detail-feed">
		<div class="title">
			<div class="title-detail">
			Hotel Padma
			</div>
			<div class="star-box">
				<div class="fs1 star" aria-hidden="true" data-icon="&#xe033"></div>
				<div class="fs1 star" aria-hidden="true" data-icon="&#xe033"></div>
			</div>
			<div class="body-detail">
				Address: Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia
			</div>
		</div>
		
		<div class="feature">
			<div class="title-detail">
			Feature
			</div>
			<div class="body-detail">
				<div class="col-md-2">Kolam Renang</div>
				<div class="col-md-2">Restoran</div>
				<div class="col-md-2">WiFi</div>
			</div>
		</div>
	</div>
	<div class="row detail-feed">
		<div class="row">
	        		<div class="col-md-4 col-xs-6"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
	        		<div class="col-md-8 col-xs-6">
	        			<div class="title-kamar">
	        				Family Room
	        			</div>
	        			<div class="body">
	        				<div class="col-md-12">
	        					Info Kamar
	        				</div>
	        				<div class="col-md-12">
	        					Layanan Gratis
	        				</div>
	        				<div class="col-md-12">
	        					IDR 1.258.400/kamar/malam
	        					
	        				</div>
	        				<div class="col-md-12"><button class="btn btn-primary">Book Now</button></div>
	        			</div>
	        		</div>
	        	</div>
	</div>
	<div class="row detail-feed">
		<div class="row">
	        		<div class="col-md-4 col-xs-6"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
	        		<div class="col-md-8 col-xs-6">
	        			<div class="title-kamar">
	        				Family Room
	        			</div>
	        			<div class="body">
	        				<div class="col-md-12">
	        					Info Kamar
	        				</div>
	        				<div class="col-md-12">
	        					Layanan Gratis
	        				</div>
	        				<div class="col-md-12">
	        					IDR 1.258.400/kamar/malam
	        					
	        				</div>
	        				<div class="col-md-12"><button class="btn btn-primary">Book Now</button></div>
	        			</div>
	        		</div>
	        	</div>
	</div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="/asset/css/owl.carousel.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="/asset/css/owl.theme.default.css"> -->
<script type="text/javascript">
	$('#slide_img').owlCarousel({
    items:3,
        loop:false,
        // center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash'
})
</script>
<script type="text/javascript">
	result = <?php print_r($result); ?>;
	console.log(result)
</script>
@endsection