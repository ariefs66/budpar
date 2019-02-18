@extends("layouts.template")
@section('content')
<style type="text/css">
.top-80{
	margin-top: 80px;
}
.top-160{
	margin-top: 140px;
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
	margin-left: 2px;
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
    margin-left: 10px;
}
.body-detail > div > i {
	color : #0ea598;
	font-size: 30px;
}
.i-name{
	font-weight: bold;
	vertical-align: super;
}
.price {
	font-size: 20px;
	font-weight: bold;
}
.buy{
	margin-top: 70px;
}
@media only screen and (max-width: 600px){
	.img-feed{
		width: 200px;
		border-radius: 5px;
		margin: 10px;
	}
	.buy{
		margin-top: 0px;
		margin-bottom: 20px;
	}
}
</style>
@include('pages.navbar-hotel')
<div class="container top-160">
	<div class="row detail-feed" >
		<div class="myslide">
			<div id="slide_img" class="owl-carousel owl-theme">
            	<img src="/asset/img/tophotel.jpg">  
            	<!-- <img src="/asset/img/hotel/padma.jpg">  
            	<img src="/asset/img/hotel/padma.jpg">    
            	<img src="/asset/img/hotel/padma.jpg">    -->     
            </div>
            
		</div>
	</div>
	<div id="hotel" class="row detail-feed">
		<div class="title">
			<div class="title-detail">
			Hotel Padma
			</div>
			<div class="star-box">
				<!-- <div class="fs1 star" aria-hidden="true" data-icon="&#xe033"></div> -->
				<!-- <div class="fs1 star" aria-hidden="true" data-icon="&#xe033"></div> -->
			</div>
			<div class="body-detail">
				
			</div>
		</div>
		
		<div class="feature">
			<div class="title-detail">
			Feature
			</div>
			<div class="body-detail">
				<!-- <div class="col-md-2"><i class="icon-swimming"></i><span class="i-name">Kolam Renang</span></div>
				<div class="col-md-2"><i class="icon_set_1_icon-58"></i><span class="i-name">Restoran</span></div>
				<div class="col-md-2"><i class="icon_set_1_icon-86"></i><span class="i-name">WiFi</span></div> -->
			</div>
		</div>
	</div>
	<div id="kamar">
		<!-- <div class="row detail-feed">
			<div class="row">
		        	<div class="col-md-4 col-xs-4"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
		        		<div class="col-md-4 col-xs-4">
		        			<div class="title-kamar">
		        				Family Room
		        			</div>
		        		<div class="body">
		        			<div class="col-md-6">
		        					<b>Info Kamar</b>
		        					<div class="col-md-12">
		        						Maks 2 Tamu
		        					</div>
		        			</div>
		        			<div class="col-md-6">
		        					<b> Layanan Gratis</b>
		        					<div class="col-md-12">Sarapan</div>
		        					<div class="col-md-12">Freewifi</div>
		        			</div>
		        		</div>
		        	</div>
		        	<div class="col-md-4 col-xs-4" style="top:70px;">
		        		<div class="col-md-12 ">
		        			<span class="price">IDR 1.258.400</span>
		        				 /kamar/malam
		        		</div>
		        		<div class="col-md-12"><button class="btn btn-primary">Book Now</button></div>
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
		</div> -->
	</div>
	
</div>
<!-- <link rel="stylesheet" type="text/css" href="/asset/css/owl.carousel.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="/asset/css/owl.theme.default.css"> -->
<script type="text/javascript">
</script>
<!-- hotel -->
<script type="text/javascript">
	result = <?php print_r($result); ?>;
	console.log(result)

	$(document).ready(function(){
		
		for (var i = 0; i < result.hotel.img.length; i++) {
			t = result.hotel.img[i];
			var img="";
			img += "<img src=\"\/asset\/img\/hotel\/"+t+"\"> ";
			$("#slide_img").append(img)
		}
		for (var i = 0; i < result.hotel.fasilitas.length; i++) {
			t =  result.hotel.fasilitas[i] 
			var feature="";
			feature += "<div class=\"col-md-2\"><i class=\" icon-ok-circle-1\"><\/i><span class=\"i-name\">"+t+"<\/span><\/div>";
			$("#hotel > .feature .body-detail").append(feature)
		}
		$('#slide_img').owlCarousel({
		    // items:3,
		        loop:false,
		        // center:true,
		        margin:10,
		        responsive:{
	        		0:{
	            		items:1
	        		},
	        		600:{
	            		items:3
	        		},
	        		1000:{
	            		items:3
	        		}
	    		}
		})
		$("#hotel > .title .title-detail").html(result.hotel.nama)
		$(".loc > a").html(result.hotel.nama)
		$("#hotel > .title .body-detail").html(result.hotel.alamat)
		for (var i = 0; i < result.hotel.star; i++) {
			var star="";
			star += "<div class=\"fs1 star\" aria-hidden=\"true\" data-icon=\"&#xe033\"><\/div>";
			$("#hotel > .title .star-box").append(star)
		}
	})
</script>
<!-- kamar -->
<script type="text/javascript">
$(document).ready(function(){
	for (var i = 0; i < result.kamar.length; i++) {
		t = result.kamar[i];
		k = result.hotel.id;
		var tmp="";
		var link = "?guest="+tamu+"&room="+kamar+"&hotel="+hotel+"&night="+night+"&room_id="+t.id;
		tmp += "<div class=\"row detail-feed\">";
		tmp += "			<div class=\"row\">";
		tmp += "		        	<div class=\"col-md-4 col-xs-12\"><img class=\"img-feed\" src=\"\/asset\/img\/hotel\/padma.jpg\"><\/div>";
		tmp += "		        		<div class=\"col-md-4 col-xs-12\">";
		tmp += "		        			<div class=\"title-kamar\">";
		tmp += t.nama;
		tmp += "		        			<\/div>";
		tmp += "		        		<div class=\"body\">";
		tmp += "		        			<div class=\"col-md-6\">";
		tmp += "		        					<b>Info Kamar<\/b>";
		tmp += "		        					<div class=\"col-md-12\">";
		tmp += "		        						Maks "+t.tamu+" Tamu";
		tmp += "		        					<\/div>";
		tmp += "		        			<\/div>";
		tmp += "		        			<div class=\"col-md-6\">";
		tmp += "		        					<b> Layanan Gratis<\/b>";
		tmp += carilayanan(t.sarapan);
		tmp += "		        			<\/div>";
		tmp += "		        		<\/div>";
		tmp += "		        	<\/div>";
		tmp += "		        	<div class=\"col-md-4 col-xs-12 buy\" \>";
		tmp += "		        		<div class=\"col-md-12 \">";
		tmp += "		        			<span class=\"price\">IDR "+(t.price/1000).toFixed(3)+"<\/span>";
		tmp += "		        				 \/kamar\/malam";
		tmp += "		        		<\/div>";
		tmp += "		        		<div class=\"col-md-12\"><a href=\"\/checkout/"+link+"\" class=\"btn btn-primary\">Book Now<\/a><\/div>";
		tmp += "		        	<\/div>";
		tmp += "		     <\/div>";
		tmp += "		<\/div>";

		$("#kamar").append(tmp)
	}
});
function carilayanan(x) {
	if (x == "ya"){
		return  "<div class=\"col-md-12\">Sarapan<\/div>";
	}
	else{
		return "";
	}
}
</script>
@endsection