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
    margin-top: 10px;
    font-weight: bold;
    color: #777;
    margin-right: 5px;
  }
  .nav > li > a{
    margin-top: 5px;
    font-weight: bold;
    text-align: center;
  }
  .nav > li > button{
    margin-top: 10px;
    margin-left: 10px;
  }
  .selection > span{
    margin-top: 13px;
   
  }
  .nav > li {

    margin-left: 10px;
  }
  .mymodal {
    /* Height & width depends on how you want to reveal the overlay (see JS below) */    
    height: 100%;
    width: 100%;
    position: fixed; /* Stay in place */
    z-index: 99999; /* Sit on top */
    left: 0;
    top: 0;
    /*color: white;*/
    /*background-color: rgb(0,0,0); */
    /* Black fallback color */
    background-color: rgba(0,0,0,0.5); /* Black w/opacity */
    overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
  }
.badge-notify{
   background:red;
   position:relative;
   top: -10px;
   left: -32px;
  }
.popover{
  max-width: 100%;
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
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{$active}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li id="menuHotel"><a href="/hotels">Hotel</a></li>
	        <li id="menuRestaurant"><a href="/restaurants">Restaurant</a></li>
	        <li id="menuBandros"><a href="/bandros">Bandros</a></li>
	        <li id="menuSouvenir"><a href="/souvenir">Souvenir</a></li>
	        <li id="menuPackage"><a href="/package">Package</a></li>
          </ul>
        </li>
      </ul>
      <ul id="navHotel" class="nav navbar-nav " style="display: none">
      	<li class="loc" style="display: none;"><a>Ciwidey</a></li>
      	<!-- <li><a>Guest</a></li> -->
      	
      	<li><a> Checkin for </a></li>
      	<li ><input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" /></li>
        <li ><input class="form-control" type="text" id="guest" data-container="body" data-toggle="popover" data-placement="bottom" data-target="divpop" value="Guest"></li>
      	<li "> <button  class="button cari">Submit</button></li>
      </ul>
      <ul id="navRestaurant" class="nav navbar-nav " style="display: none">
        <li class="loc" style="display: none"><a>Dago</a></li>
        <li><select id="sl" class="form-control" name="states[]" multiple="multiple" style="width: 250px">

            <option value="br">Breakfast</option>
            <option value="lu">Lunch</option>
            <option value="di">Dinner</option>
          </select>
        </li>
        
        <li><a> Days </a></li>
        <li ><input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" /></li>
       
        <li "> <button  class="button cari">Submit</button></li>
      </ul>
      <ul id="navcart" class="nav navbar-nav navbar-right" style="display: none;">
        <li >
          <button class="btn btn-default btn-link" data-container="body" data-toggle="popover" data-placement="bottom" data-target="divcart" style="font-size:25px;">
            <span class="icon-cart"></span>
          </button>
          <span class="badge badge-notify">3</span>
        </li>
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
</div>
<div id="divcart" style="display: none">
 <div class="form-horizontal" >
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Days</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="dasy" value="4">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Breakfast</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="meal" value="Bubur Ayam">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="meal" value="8">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Dinner</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="meal" value="Nasgor Mafia">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="meal" value="7">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="/checkout" class="button">Buy</a>
    </div>
  </div>
</div>
</div>
<!-- <div class="mymodal">
   <div class="panel">
     <div class="col-md-6">
       <input class="form-control" type="" name="">
     </div>

   </div>
  <button id="tutup"> close</button>
</div> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  function getUrlParam(name) {
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    return (results && results[1]) || undefined;
  }

  tamu = "<?php if(isset($_REQUEST['guest']))echo $_REQUEST['guest']; ?>";
  kamar = "<?php if(isset($_REQUEST['room']))echo $_REQUEST['room']; ?>";
  hotel = "<?php if(isset($_REQUEST['hotel']))echo $_REQUEST['hotel']; ?>";
  night = "<?php if(isset($_REQUEST['night']))echo $_REQUEST['night']; ?>";
  price = "<?php if(isset($_REQUEST['price']))echo $_REQUEST['price']; ?>";

  var start = getUrlParam('start');
  var end = getUrlParam('end');
  if (start > "" && end > "") {
      startDate = start
      endDate = end
  } else {
      startDate = moment().format('YYYY-MM-DD');
      endDate = moment().startOf('day').add(1, 'days').format('YYYY-MM-DD');
  }
  
  var link = "?guest="+tamu+"&room="+kamar+"&hotel="+hotel+"&night="+night+"&start="+startDate+"&end="+endDate;

  $("#guest").attr({tamu:tamu,kamar:kamar})
  if (tamu == '' && kamar == ''){
    $("#guest").val("Guest")
  }
  else{
    $("#guest").val(kamar+" Room "+tamu+" Guest")
  }
  //active class
  $('#menu{{$active}}').addClass('active');
  
  //navbar
  $("#nav{{$active}}").show();
  //cart
  $("#nav{{$nav}}").show();

  //dropdown menu
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(100);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(100);
  });

  //daterangpicker
  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'left',
      startDate: startDate,
      endDate: endDate,
      locale: {
            format: 'YYYY-MM-DD'
          }
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      startDate = start.format('YYYY-MM-DD');
      endDate = end.format('YYYY-MM-DD');
      night = end.diff(start, 'day');
      console.log(night)
    });
  });

  //popover tamu dan kamar
  $(document).ready(function(){
    

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
                $("#guest").val(kamar+" Room "+tamu+" Guest")
      }
      
            
    })
    $('#guest').on('shown.bs.popover', function () {
      // alert($("#guest").attr("tamu"))
      $('.popover input[name="tamu"]').val($("#guest").attr("tamu"))
      $('.popover input[name="kamar"]').val($("#guest").attr("kamar"))
    })
  });

  $('#sl').select2({
    placeholder: "Select type of Meal",
    allowClear: true
  });
</script>
