@extends('layouts.template')
@section('content')
<style type="text/css">
	.navbar-secondary {
  min-height: 50px;
}
.navbar-secondary.navbar-fixed-top {
  z-index: 1029;
  top: 76px;
}
@media (min-width: 768px) {
  .navbar-secondary {
    padding: 0;
  }
  .navbar-secondary .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.nav > li > input{
	margin-top: 5px;
}
.nav > li > button{
	margin-top: 5px;
	margin-left: 10px;
}
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
<nav class="navbar navbar-default navbar-fixed-top navbar-secondary" id="navbar-two" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-two--links"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <!-- <a class="navbar-brand" href="#">Navbar Secondary</a> -->
    </div>
    <div class="navbar-collapse collapse" id="navbar-two--links">
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Booking <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="active"><a href="#">Hotels</a></li>
	        <li><a href="#">Restaurant</a></li>
	        <li><a href="#">Bandros</a></li>
	        <li><a href="#">Souvenir</a></li>
	        <li><a href="#">Package</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li class="set"><a>Ciwidey</a></li>
      	<!-- <li><a>Guest</a></li> -->
      	<li ><a id="guest" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-target="divpop">0 Kamar 0 Tamu</a></li>
      	<li><a> Checkin for </a></li>
      	<li ><input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" /></li>
      	<li "> <button class="btn btn-primary">Search</button></li>
      </ul>
    </div>
  </div>
</nav>
<div id="divpop" style="display: none">
	<div class="col-md-6 guest_book">
		<div class="form-group">
			<label class="control-label">Kamar</label>
			<input class="form-control" class="width-60" type="number" name="kamar">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Tamu</label>
			<input class="form-control" class="width-60" type="number" name="tamu">
		</div>
	</div>
	<!-- <div><button id="tes" class="btn btn-red save">SAVE</button></div> -->
</div>
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
                            <h6>Hotel</h6>
                            <div class="">
                                <select class="form-control" name="a" id="select_hotel">
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="filter_type">
                            <h6>Restaurant</h6>
                            <div class="">
                                <select class="form-control" name="a" id="select_restaurant">
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="filter_type">
                            <h6>Date</h6>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </div>
                                <input type="text" id="b" name="b" class="form-control pull-right" value="">
                            </div>
                        </div>
                        <div class="filter_type">
                            <h6></h6>
                            <input name="submit" id="submit" type="submit" class="button col-md-12" value="Submit">
                            
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="/asset/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/asset/js/jstarbox.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="/asset/css/jstarbox.css">
<script>

//dropdown menu
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(100);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(100);
});

//daterangpicker
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

//popover tamu dan kamar
$(document).ready(function(){
	// $(document).on('click', '#tes' ,function(){
	// 	tamu = $('.popover input[name="tamu"]').val()
 //    	kamar = $('.popover input[name="kamar"]').val()
    	
	// })
	$("[data-toggle=popover]").each(function(i, obj) {
		$(this).popover({
		  html: true,
		  content: function() {
		    var id = $(this).attr('data-target')
		    return $('#' + id).html();
		  }
		});
	});
	$(document).on('click', function (e) {

		
	    $('[data-toggle="popover"],[data-original-title]').each(function () {
	        //the 'is' for buttons that trigger popups
	        //the 'has' for icons within a button that triggers a popup
	        // console.log($(".popover-content:visible").length)
	        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {                
	            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
	            
	        }

	    });
	});
	$('#guest').on('hide.bs.popover', function () {
		// console.log($(".guest_book").parent(".popover-content:visible").length)
		if ($(".guest_book").parent(".popover-content:visible").length== 1){
			tamu = $('.popover input[name="tamu"]').val()
	    		kamar = $('.popover input[name="kamar"]').val()
	            // console.log(tamu)
	            $("#guest").attr({tamu:tamu,kamar:kamar})
	            $("#guest").html(kamar+" Kamar "+tamu+" Tamu")
		}
		
	  			
	})
	$('#guest').on('shown.bs.popover', function () {
		// alert($("#guest").attr("tamu"))
	  $('.popover input[name="tamu"]').val($("#guest").attr("tamu"))
	  $('.popover input[name="kamar"]').val($("#guest").attr("kamar"))
	})
});
</script>
<script type="text/javascript">
$.getJSON( "/get_hotel", { data: 10, date: '10-10-10'  } )
  .done(function( resp ) {
    $.each(resp.data,function(i,data){
    	var tmp="";
tmp += " <div class=\"bottom-10 rounded-box-white\">";
tmp += "	        	<div class=\"row\">";
tmp += "	        		<div class=\"col-md-6 col-xs-6\"><img class=\"img-feed\" src=\"\/asset\/img\/hotel\/padma.jpg\"><\/div>";
tmp += "	        		<div class=\"col-md-6 col-xs-6\">";
tmp += "	        			<div class=\"title\">";
tmp += "	        				"+data.nama+"";
tmp += "	        			<\/div>";
tmp += "	        			<div class=\"body\">";
tmp += "	        				<div class=\"col-md-12\">";
tmp += "	        					<div class=\"block\">";
tmp += "								    <div class=\"starbox\"> <\/div>";
tmp += "								    <div class=\"rating-value\"><p>2.4\/5<\/p><\/div>";
tmp += "								<\/div>";
tmp += "	        				<\/div>";
tmp += "	        				<div class=\"alamat\">";
tmp += "	        					Address: Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia";
tmp += "	        				<\/div>";
tmp += "	        				<div class=\"bottom\">";
tmp += "	        					<a href=\"/hotels\/"+data.nama.replace(/ /g,'-')+"\" class=\"btn btn-primary\">Detail<\/a>";
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
</script>
@endsection