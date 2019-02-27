@extends("layouts.template")
@section("content")
<style type="text/css">

	.check {
		background: white;
		border-radius: 8px;
		/*width: 100%; */
		margin:10px 10px 15px 10px;
	    border: 1px solid #ddd;
	}
	@charset "UTF-8";
.stepper {
	margin-top: 20px;
	margin-bottom: 20px;
}
.stepper .nav-tabs {
  position: relative;
}
.stepper .nav-tabs > li {
  width: 25%;
  position: relative;
}
.stepper .nav-tabs > li:after {
  content: "";
  position: absolute;
  background: #f1f1f1;
  display: block;
  width: 100%;
  height: 5px;
  top: 30px;
  left: 50%;
  z-index: 1;
}
.stepper .nav-tabs > li.completed::after {
  background: #34bc9b;
}
.stepper .nav-tabs > li:last-child::after {
  background: transparent;
}
.stepper .nav-tabs > li.active:last-child .round-tab {
  background: #34bc9b;
}
.stepper .nav-tabs > li.active:last-child .round-tab::after {
  content: "✔";
  color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 0;
  display: block;
}
.stepper .nav-tabs [data-toggle="tab"] {
  width: 25px;
  height: 25px;
  margin: 20px auto;
  border-radius: 100%;
  border: none;
  padding: 0;
  color: #f1f1f1;
}
.stepper .nav-tabs [data-toggle="tab"]:hover {
  background: transparent;
  border: none;
}
.stepper .nav-tabs > .active > [data-toggle="tab"],
.stepper .nav-tabs > .active > [data-toggle="tab"]:hover,
.stepper .nav-tabs > .active > [data-toggle="tab"]:focus {
  color: #34bc9b;
  cursor: default;
  border: none;
}
.stepper .tab-pane {
  position: relative;
  padding-top: 50px;
  margin-bottom: 60px;
}
.stepper .round-tab {
  width: 25px;
  height: 25px;
  line-height: 22px;
  display: inline-block;
  border-radius: 25px;
  background: #fff;
  border: 2px solid #34bc9b;
  color: #34bc9b;
  z-index: 2;
  position: absolute;
  left: 0;
  text-align: center;
  font-size: 14px;
}
.stepper .completed .round-tab {
  background: #34bc9b;
}
.stepper .completed .round-tab::after {
  content: "✔";
  color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 0;
  display: block;
}
.stepper .active .round-tab {
  background: #fff;
  border: 2px solid #34bc9b;
}
.stepper .active .round-tab:hover {
  background: #fff;
  border: 2px solid #34bc9b;
}
.stepper .active .round-tab::after {
  display: none;
}
.stepper .disabled .round-tab {
  background: #fff;
  color: #f1f1f1;
  border-color: #f1f1f1;
}
.stepper .disabled .round-tab:hover {
  color: #4dd3b6;
  border: 2px solid #a6dfd3;
}
.stepper .disabled .round-tab::after {
  display: none;
}

	</style>
<div class="container top-100">
	<div class="row check">
			<div class="row">
		        	<div class="col-md-4 col-xs-4"><img class="img-feed" src="/asset/img/hotel/padma.jpg"></div>
		        		<div class="col-md-4 col-xs-4">
		        			<div id="title-kamar" class="title-kamar">
		        				
		        			</div>
		        		<div class="body">
		        			<div class="col-md-6">
		        					<b>Tipe Kamar</b>
		        					<div id="ckamar" class="col-md-12"></div>
		        					<br>
		        					<b>Checkin</b>
		        					<div id="cdatestart" class="col-md-12"></div>
		        					<br>
		        					
		        			</div>
		        			<div class="col-md-6">
		        					<b>Kapasitas Kamar</b>
		        					<div id="ctamu" class="col-md-12"></div>
		        					<br>
		        					<b>Checkout</b>
		        					<div id="cdateend" class="col-md-12"></div>
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
		        			<span id="priceh" class="price">IDR 1.258.400</span>
		        				 
		        		</div>
		        		<!-- <div class="col-md-12"><button class="btn btn-primary">Book Now</button></div> -->
		        	</div>
		     </div>
	</div>
  <div class="row check">
      <div class="row">
              <div class="col-md-4 col-xs-4"><img class="img-feed" src="/asset/img/restaurant/siomay.jpg"></div>
                <div class="col-md-4 col-xs-4">
                  <div id="title-food" class="title-kamar">
                    Siomay Bandung
                  </div>
                <div class="body">
                  <div class="col-md-6">
                      <b>Jumlah</b>
                      <div id="c" class="col-md-12">8</div>
                      <br>
                      <b>Book for </b>
                      <div id="c" class="col-md-12">4 Days</div>
                      <br>
                      
                  </div>
                  <!-- <div class="col-md-6">
                      <b>Kapasitas Kamar</b>
                      <div id="c" class="col-md-12"></div>
                      <br>
                      <b>Checkout</b>
                      <div id="c" class="col-md-12"></div>
                  </div>
                  <div class="col-md-6">
                      <b> Layanan Gratis</b>
                      <div class="col-md-12">Sarapan</div>
                      <div class="col-md-12">Freewifi</div>
                  </div> -->
                </div>
              </div>
              <div class="col-md-4 col-xs-4" style="top:70px;">
                <div class="col-md-12 ">
                  <span class="price">IDR 300.400</span>
                     
                </div>
                <!-- <div class="col-md-12"><button class="btn btn-primary">Book Now</button></div> -->
              </div>
         </div>
    </div>

	<div class="row check">
		<div class="col-md-12 bottom-20">
			

			  

			<h3 class "h2">1. Profil Pemesan</h3>
			              <form id="datacheck" action="/payment" method="post">
			              	{!! csrf_field() !!}
			              	<div class="form-group">
								<label for="">Nama</label>
								<input id="nama" type="text" class="form-control" name="nama" placeholder="John Doe">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input id="email" type="email" class="form-control" name="email" placeholder="name@example.com">
							</div>
							<div class="form-group">
								<label for="">No Telpon</label>
								<input id="tlp" type="text" class="form-control" name="tlp" placeholder="0821312123">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Pesanan Khusus</label>
								<textarea id="khusus" class="form-control" name="khusus" rows="3"></textarea>
							</div>
							
						</form>
						<button id="payment" type="submit" class="btn btn-primary mb-2">Next</button>
			    
	
			
		</div>
		
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

<!-- kalkulasi -->
<script type="text/javascript">
	var result = <?php print_r($result); ?>;
	var harga =  numeral(result.price);
	numeral.defaultFormat('0,0.00');
	// var temp="";
	// temp += "<input type=\"hidden\" name=\"tamu\"  value=\""+result.tamu+"\" \/>";
	// temp += "<input type=\"hidden\" name=\"room_id\"  value=\""+result.room_id+"\" \/>";
	// temp += "<input type=\"hidden\" name=\"hotel_id\"  value=\""+result.hotel_id+"\" \/>";
	// temp += "<input type=\"hidden\" name=\"night\"  value=\""+result.night+"\" \/>";
	// temp += "<input type=\"hidden\" name=\"startDate\"  value=\""+result.startDate+"\" \/>";
	// temp += "<input type=\"hidden\" name=\"endDate\"  value=\""+result.endDate+"\" \/>";

	// $("#datacheck").append(temp)

	$("#title-kamar").html(result.hotel);
	$("#ctamu").html(result.tamu+" Guest");
	$("#ckamar").html(result.kamar);
	$("#cdatestart").html(result.startDate);
	$("#cdateend").html(result.endDate);
	$("#priceh").html("IDR "+harga.format())
	$("#payment").on("click", function(){
		nama = $("#nama").val();
		email = $("#email").val();
		tlp = $("#tlp").val();
		khusus = $("#khusus").val();
		// var link = "?guest="+result.tamu+"&room_id="+result.room_id+"&hotel_id="+result.hotel_id+"&night="+result.night+"&start="+result.startDate+"&end="+result.endDate+"&nama="+nama+"&email="+email+"&tlp="+tlp+"&khusus="+khusus;
		// console.log(window.location.href)
		// location.href = "/payment"+link;
		$.post('/insert_order', {
                 _token: $('meta[name=csrf-token]').attr('content'),
                 newLat: '2asd',
                 newLng: 'sad'
             }
            ).done(function(data) {
                location.href = "/payment?order_id="+data.order_id;
                console.log(data)
            })
            .fail(function() {
                alert( "error" );
            });
            
	})
</script>
@endsection