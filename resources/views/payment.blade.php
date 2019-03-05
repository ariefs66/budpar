@extends('layouts.template')
@section('content')
<style type="text/css">
	.row2 > div{
		margin-top: 20px;
		margin-bottom: 10px;
	}
	.lds-dual-ring {
  display: inline-block;
  width: 64px;
  height: 400px;
}
.lds-dual-ring:after {
	position: absolute;
	left: 45%;
	top:40%;
  content: " ";
  display: block;
  width: 100px;
  height: 100px;
  margin: 1px;
  border-radius: 50%;
  border: 20px solid #fff;
  border-color: #777 transparent #777 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
<div class="container">
	<div class="lds-dual-ring top-100" style="display: none"></div>
	<div id="pay" class="row bottom-20">
		<div class="top-100">
		        	<div class="col-md-6 col-xs-6 myrounded ">
		        			<div id="hotel" class="title-kamar">
		        				Tinjau Pesanan Anda
		        			</div>
			        		<div class="row bottom-20 left-20">
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
			        			
			        		</div>
		        	</div>
		</div>
		<div class="col-md-1"></div>
		<div class="top-100">
		        	<div class="col-md-5 col-xs-6 myrounded" >
		        		<div class="title-kamar">
		        				Detail Harga
		        			</div>
		        		<div id="harga" class="row1">
		        			<div class="col-md-6">
		        				<!-- <span >1 Malam x (1 Kamar)</span> 
		        				<br>
		        				<span >2 Malam x (1 Kamar)</span> -->
		        			</div>
		        			<div class="col-md-6">
		        				<!-- <span>40000</span>
		        				<br>
		        				<span>40000</span>
		        				 -->
		        			</div>
		        			       				 
		        		</div>
		        		<div class="row2">
		        			<div class="col-md-6">
		        				<span><b>Total</b></span>
		        			</div>
		        			<div id="total" class="col-md-6">
		        				<span class="price">IDR 1.258.400</span>
		        			</div>
		        		</div>
		        			
		        		<!-- <div class="col-md-12"><button class="btn btn-primary">Book Now</button></div> -->
		        	</div>
		        	
		</div>
		<div class="col-md-12 myrounded top-20">
			<div class="title-kamar">
		        				Transfer Rekening ke Bank
		        			</div>
			<div id="myList" class="list-group top-20">
			  
			  <a href="#" class="list-group-item list-group-item-action">BNI</a>
			  <a href="#" class="list-group-item list-group-item-action">BCA</a>
			  <a href="#" class="list-group-item list-group-item-action">Mandiri</a>
			  <a href="#" class="list-group-item list-group-item-action">BRI</a>
			</div>
			<div class="bottom-20">
				<a id="buy" class="btn btn-primary">Submit</a>
			</div>
			
		</div>
	</div>
	
	
		
</div>
<link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script type="text/javascript">
	var result = <?php print_r($result); ?>;
	console.log(result)
	for (var i = 1; i <= result.night; i++) {
		var temp="";
		temp += "<span >"+i+" Malam x (1 Kamar)<\/span>";
		$("#harga > div:first-child").append(temp+"<br>");
		var temp="";
		temp += "<span>"+result.price+"<\/span>";
		$("#harga > div:last-child").append(temp+"<br>");
	}
	var total =  numeral(result.price*result.night);
	numeral.defaultFormat('0,0.00');

	$("#hotel").html(result.hotel);
	$("#ctamu").html(result.tamu+" Guest");
	$("#ckamar").html(result.kamar);
	$("#cdatestart").html(result.startDate);
	$("#cdateend").html(result.endDate);
	$(".price").html(total.format());

	$('#myList a').on('click', function (e) {
		$('#myList a').each(function(){ $(this).removeClass('active') })
	  e.preventDefault()
	  $(this).addClass('active')
	})
	email = "<?php if(isset($_REQUEST['email']))echo $_REQUEST['email']; ?>"
	$("#buy").on("click",function(){
		$("#pay").hide();
		$(".lds-dual-ring").show();
		$.post('/buy', {
                 _token: $('meta[name=csrf-token]').attr('content'),
                 email: email,
                 newLng: 'sad'
             }
            ).done(function(data) {

                location.href = "/hotels?order_id=";
                console.log(data)
            })
            .fail(function() {
            	$("#pay").show();
				$(".lds-dual-ring").hide();
                alert( "error" );
            });
	})
</script>
@endsection