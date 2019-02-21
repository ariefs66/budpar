@extends('layouts.template')
@section('content')
<style type="text/css">
.modal {
   position: fixed;
   top: 20%;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
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
.btn-number{
	height: 40px;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  left:0;
  right:0;
  top:0;
  bottom:0;
  position:fixed;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
@include('pages.navbar-second',['active' => 'Restaurant','nav' => 'cart'])

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
                            <h6>Meal</h6>
                            <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Breakfast
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
							  <label class="form-check-label" for="defaultCheck2">
							    Lunch
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
							  <label class="form-check-label" for="defaultCheck3">
							    Dinner
							  </label>
							</div>
                        </div>
                        <div class="filter_type">
                            <h6>Type of Food</h6>
                            <div class="">
                                <select class="form-control" name="a" id="select_restaurant">
                                    <option value=""></option>
                                    <option value="">Bakso</option>
                                    <option value="">Siomay</option>
                                    <option value="">Rice</option>
                                    <option value="">Seafood</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="filter_type">
                            <h6>Date</h6>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </div>
                                <input type="text" id="b" name="b" class="form-control pull-right" value="">
                            </div>
                        </div> -->
                        <div class="filter_type">
                            <h6></h6>
                            <input name="submit" id="submit" type="submit" class=" cari button col-md-12" value="Filter">
                            
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
        	<div class="loader" style="display: none"></div>
        </div>
        
        
    </div>
    <!-- End row -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="">Add to Chart</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-4"><label>QTY</label></div>
	      		<div class="col-md-6 bottom-10">
	      			<div class="input-group">
			          <span class="input-group-btn">
			              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
			                  <span class=" icon-minus"></span>
			              </button>
			          </span>

			          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
			          <span class="input-group-btn">
			              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
			                  <span class=" icon-plus"></span>
			              </button>
			          </span>
			      </div>
	      		</div>
	      		<div class="col-md-4"><label>Add For</label></div>
	      		<div class="col-md-6">
	      			<select class="form-control">
					  <option>Breakfast</option>
					  <option>Lunch</option>
					  <option>Dinner</option>
					</select>
	      		</div>
	      	</div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Add</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<script src="/asset/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/asset/js/jstarbox.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css"> -->
<link rel="stylesheet" type="text/css" href="/asset/css/jstarbox.css">

<script type="text/javascript">
function getHotel() {
		$.getJSON( "/get_restaurant", { data: 10, startDate: startDate,endDate: endDate  } )
		  .done(function( resp ) {
		  	
		    $.each(resp.data,function(i,data){
		    	hotel = data.id;
		    	link = "?guest="+tamu+"&room="+kamar+"&hotel="+hotel+"&night="+night+"&start="+startDate+"&end="+endDate;
		    	var tmp="";
		tmp += " <div class=\"bottom-10 rounded-box-white\">";
		tmp += "	        	<div class=\"row\">";
		tmp += "	        		<div class=\"col-md-6 col-xs-12\"><img class=\"img-feed\" src=\"\/asset\/img\/restaurant\/siomay.jpg\"><\/div>";
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
		tmp += "	        					<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add\">Add<\/a>";
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
			$(".loader").hide();
		  })
		  .fail(function( jqxhr, textStatus, error ) {
		    var err = textStatus + ", " + error;
		    console.log( "Request Failed: " + err );
		});
	}
</script>
<script type="text/javascript">
$(document).ready(function(){
	getHotel();
	$(".cari").on("click",function(argument) {
		$(".loader").show();
		$("#feed").html("");
		console.log($('#sl').select2('data'))
		getHotel();

	});
	
});
</script>
<script type="text/javascript">
	$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection