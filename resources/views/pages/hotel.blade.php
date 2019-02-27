@extends('layouts.template')
@section('content')
<style type="text/css">
	
.set{
	/*background: yellow;*/
}
.width-60{
	width : 60px;
}
.top-80{
	margin-top: 80px;
}
.bottom-80{
	margin-bottom: 30px;
}
.bottom-10{
	margin-bottom: 10px;
}
.rounded-box-white{
	background: white;
	border-radius: 5px;
}
.title{
	font-size: 25px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 10px;
}
.margin_60_80{
	margin-top: 80px;
}
.img-feed{
	width: 400px;
	border-radius: 5px;
	margin: 10px;
}
.block {
    display: block;
    clear: both;
}
.starbox {
    float: left;
}
.rating-value {
    float: left;
    margin: 0px 0 0 20px;
}
</style>
@include('pages.navbar-second',['active' => 'Hotel','nav' => 'no'])

<div class="container margin_60_80">
    <div class="row">

        <aside class="col-md-3 col-md-push-9 top-80" id="sidebar">
            <div class="theiaStickySidebar ">
                <div id="filter_tools">
                  <!--   <ul>
                    
                        <li><a href="/user-event-management/create-event'" id="event_icon">Event</a>
                        </li>
                    
                        <li><a href="/event-management/create-event'" id="event_icon">Event</a>
                        </li>
                    
                        <li><a href="/event-project/event-map'" id="map_icon">View Map</a>
                        </li>
                    </ul> -->
                </div>
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                        	<h6>Search</h6>
                        	<div>
                        		<input class="form-control" type="text" name="search" placeholder="Search">
                        	</div>
                        </div>
                        <div class="filter_type">
                            <h6>Star</h6>
                            <div class="">
                                <input id="star" name="input-1" class="kv-ltr-theme-svg-star rating-loading" data-min="0" data-max="5" data-step="1">
                            </div>
                        </div>
                        <div class="filter_type">
                            <h6>Price</h6>
                            
						   
						      <input type="text" class="js-range-slider" name="my_range" value="" />
						      
						  
                        </div>
                        <div class="filter_type">
                            <h6>Feature</h6>
                            <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Freewifi
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
							  <label class="form-check-label" for="defaultCheck2">
							    Pool
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
							  <label class="form-check-label" for="defaultCheck3">
							    Breakfast
							  </label>
							</div>
                        </div>
                        <div class="filter_type">
                            <h6></h6>
                            <input name="submit" id="submit" type="submit" class="cari button col-md-12" value="Filter">
                            
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <!--End collapse -->
                </div>
               
            </div>
            <!--End Sticky -->
        </aside>
        <!--End aside -->
        <div id="feed" class="col-md-9 col-md-pull-3 top-80 bottom-80">
        	<!-- <div class=" bottom-10 rounded-box-white">
	        	<div class="row">
	        		<div class="col-md-6 col-xs-6"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
	        		<div class="col-md-6 col-xs-6">
	        			<div class="title">
	        				Padma Hotel Bandung
	        			</div>
	        			<div class="body">
	        				<div class="col-md-12">
	        					<div class="block">
								    <div class="starbox"> </div>
								    <div class="rating-value"><p>2.4/5</p></div>
								</div>
	        				</div>
	        				<div class="alamat">
	        					Address: Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia
	        				</div>
	        				<div class="bottom">
	        					<button class="btn btn-primary">Book Now</button>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	        <div class="bottom-10 rounded-box-white">
	        	<div class="row">
	        		<div class="col-md-6 col-xs-6"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
	        		<div class="col-md-6 col-xs-6">
	        			<div class="title">
	        				Padma Hotel Bandung
	        			</div>
	        			<div class="body">
	        				<div class="col-md-12">
	        					<div class="block">
								    <div class="starbox"> </div>
								    <div class="rating-value"><p>2.4/5</p></div>
								</div>
	        				</div>
	        				<div class="alamat">
	        					Address: Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia
	        				</div>
	        				<div class="bottom">
	        					<button class="btn btn-primary">Book Now</button>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div> -->
        </div>
        
        
    </div>
    <!-- End row -->
</div>
<link href="/asset/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="/asset/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/asset/js/jstarbox.js"></script>
<script type="text/javascript" src="/asset/js/star-rating.min.js"></script>

<script src="/asset/krajee-svg/theme.js"></script>
<link href="/asset/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/asset/css/jstarbox.css">

<script type="text/javascript">
function getHotel() {
		$.getJSON( "/get_hotel", { data: 10, startDate: startDate,endDate: endDate  } )
		  .done(function( resp ) {
		  	
		    $.each(resp.data,function(i,data){
		    	hotel = data.id;
		    	link = "?guest="+tamu+"&room="+kamar+"&hotel="+hotel+"&night="+night+"&start="+startDate+"&end="+endDate;
		    	var tmp="";
		tmp += " <div class=\"bottom-10 rounded-box-white\">";
		tmp += "	        	<div class=\"row\">";
		tmp += "	        		<div class=\"col-md-6 col-xs-12\"><img class=\"img-feed\" src=\"\/asset\/img\/hotel\/padma.jpg\"><\/div>";
		tmp += "	        		<div class=\"col-md-6 col-xs-12\">";
		tmp += "	        			<div class=\"title col-xs-12\">";
		tmp += "	        				"+data.nama+"";
		tmp += "	        			<\/div>";
		tmp += "	        			<div class=\"body\">";
		tmp += "	        				<div class=\"col-md-12\">";
		tmp += "	        					<div class=\"block\">";
		tmp += "								    <div class=\"starbox\"> <\/div>";
		tmp += "								    <div class=\"rating-value\"><p>2.4\/5<\/p><\/div>";
		tmp += "								<\/div>";
		tmp += "	        				<\/div>";
		tmp += "	        				<div class=\"alamat col-xs-12\">";
		tmp += "	        					Address: Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia";
		tmp += "	        				<\/div>";
		tmp += "	        				<div class=\"bottom-10 col-xs-12\">";
		tmp += "	        					<a href=\"/hotels\/"+data.nama.replace(/ /g,'-')+link+"\" class=\"btn btn-primary\">Detail<\/a>";
		tmp += "	        				<\/div>";
		tmp += "	        			<\/div>";
		tmp += "	        		<\/div>";
		tmp += "	        	<\/div>";
		tmp += "	        <\/div>";

				$("#feed").append(tmp);
				})
		    //star rating
			$('.starbox').starbox({
			    average: 0.8,
				changeable: false  // turning the rating into read-only mode
			});
		  })
		  .fail(function( jqxhr, textStatus, error ) {
		    var err = textStatus + ", " + error;
		    console.log( "Request Failed: " + err );
		});
	}
</script>
<script type="text/javascript">
$(document).ready(function(){
	$(".js-range-slider").ionRangeSlider({
		type: "double",
        min: 0,
        max: 5000000
	});
	$("#star").rating({
		hoverOnClear: false,
        theme: 'krajee-svg',
        showCaption: false,
        showClear: false,
        clearCaption: ''
    });
	getHotel();
	$(".cari").on("click",function(argument) {
		
		$("#feed").html("");
		getHotel();

	});
	
});
</script>
@endsection