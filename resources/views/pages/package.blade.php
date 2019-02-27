@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<style type="text/css">
	.demo-title {
  text-align: center;
  font-size: 3rem;
  margin-bottom: 50px;
}

.pricing-table {
  display: table;
  width: 100%;
}
.pricing-table .pricing-option {
  width: 23%;
  background: white;
  float: left;
  padding: 2%;
  text-align: center;
  transition: all 0.3s ease-in-out;
}
.pricing-table .pricing-option:nth-child(even) {
  margin: 0 2%;
}
.pricing-table .pricing-option:hover {
  cursor: pointer;
  box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.3);
  -webkit-transform: scale(1.04);
          transform: scale(1.04);
}
.pricing-table .pricing-option:hover i,
.pricing-table .pricing-option:hover h1,
.pricing-table .pricing-option:hover span,
.pricing-table .pricing-option:hover b {
  color: #f85e6a;
}
.pricing-table .pricing-option:hover .front {
  opacity: 0;
  visibility: hidden;
}
.pricing-table .pricing-option:hover .back {
  opacity: 1 !important;
  visibility: visible !important;
}
.pricing-table .pricing-option:hover .back a.button {
  -webkit-transform: translateY(0px) !important;
          transform: translateY(0px) !important;
}
.pricing-table .pricing-option hr {
  border: none;
  border-bottom: 1px solid #f0f0f0;
}
.pricing-table .pricing-option i {
  font-size: 3rem;
  color: #d8d8d8;
  transition: all 0.3s ease-in-out;
}
.pricing-table .pricing-option h1 {
  margin: 10px 0;
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.pricing-table .pricing-option p {
  color: #999;
  padding: 0 10px;
  line-height: 1.3;
}
.pricing-table .pricing-option .price {
  position: relative;
}
.pricing-table .pricing-option .price .front span.price {
  font-size: 2rem;
  text-transform: uppercase;
  margin-top: 20px;
  display: block;
  font-weight: 700;
  position: relative;
}
.pricing-table .pricing-option .price .front span.price b {
  position: absolute;
  font-size: 1rem;
  margin-left: 2px;
  font-weight: 600;
}
.pricing-table .pricing-option .price .back {
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
}
.pricing-table .pricing-option .price .back a.button {
  background: #f85e6a;
  padding: 15px 20px;
  display: inline-block;
  text-decoration: none;
  color: white;
  position: absolute;
  font-size: 13px;
  top: -5px;
  left: 0;
  right: 0;
  width: 150px;
  margin: auto;
  text-transform: uppercase;
  -webkit-transform: translateY(20px);
          transform: translateY(20px);
  transition: all 0.3s ease-in-out;
}
.pricing-table .pricing-option .price .back a.button:hover {
  background: #f62d3d;
}

@media screen and (max-width: 600px) {
  .pricing-table .pricing-option {
    padding: 5%;
    width: 90%;
  }
  .pricing-table .pricing-option:nth-child(even) {
    margin: 30px 0 !important;
  }
}
</style>
<div class="container">
	<div class="row top-100" style="height: 400px">
		<div class="pricing-table">
		    <div class="pricing-option">
		        <!-- <i class="material-icons">important_devices</i> -->
		        <h1>Plan 1</h1>
		        <hr />
		        <div class="row">
		        <div class="col-md-6">
		        	<i class="icon_set_1_icon-6"></i>
			        	<h5>Hotel</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class="icon_set_1_icon-58"></i>
			        	<h5>Restaurant</h5>
			        </div>
			        <div class="col-md-6"><br></div>
		        	<div class="col-md-6"><br></div>
		        </div>
		        <hr />
		        <div class="price">
		            <div class="front">
		                <span class="price">199 <b>$</b></span>
		            </div>
		            <div class="back">
		                <a href="#" class="button">Plan Now</a>
		            </div>
		        </div>
		    </div>
		    
		    <div class="pricing-option">
		        <!-- <i class="material-icons">perm_identity</i> -->
		        <h1>Plan 2</h1>
		        <hr />
		        <div class="row">
		        	<div class="col-md-6">
			        	<i class="icon_set_1_icon-6"></i>
			        	<h5>Hotel</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class="icon_set_1_icon-58"></i>
			        	<h5>Restaurant</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class=" icon_set_1_icon-3"></i>
                		<h5>Souvenir</h5>
			        </div>
			        <div class="col-md-6"></div>
		        	
		        </div>
		        <hr />
		        <div class="price">
		            <div class="front">
		                <span class="price">399 <b>$</b></span>
		            </div>
		            <div class="back">
		                <a href="#" class="button">Plan now</a>
		            </div>
		        </div>
		    </div>
		    
		    <div class="pricing-option">
		        <!-- <i class="material-icons">art_track</i> -->
		        <h1>Plan 3</h1>
		        <hr />
		        <div class="row">
		        	<div class="col-md-6">
			        	<i class="icon_set_1_icon-6"></i>
			        	<h5>Hotel</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class="icon_set_1_icon-58"></i>
			        	<h5>Restaurant</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class=" icon_set_1_icon-3"></i>
                		<h5>Souvenir</h5>
			        </div>
			        <div class="col-md-6">
			        	<i class=" icon_set_1_icon-26"></i>
                		<h5>Bandros</h5>
			        </div>
		        </div>
		        <hr />
		        <div class="price">
		            <div class="front">
		                <span class="price">999 <b>$</b></span>
		            </div>
		            <div class="back">
		                <a href="#" class="button">Plan now</a>
		            </div>
		        </div>
		    </div>
		    <div class="pricing-option">
		        <!-- <i class="material-icons">art_track</i> -->
		        <h1>Plan 4</h1>
		        <hr />
		        <p>
		        	<i class="icon_set_1_icon-17"></i>
		        	<h5>Plan With Your Decision</h5>
		        </p>
		        <hr />
		        <div class="price">
		            <div class="front">
		                <span class="price">999 <b>$</b></span>
		            </div>
		            <div class="back">
		                <a href="#" class="button">Plan now</a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	
</div>
<!-- css buatan -->
<link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css">
@endsection