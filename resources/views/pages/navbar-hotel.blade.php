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
      	<li class="loc"><a>Ciwidey</a></li>
      	<!-- <li><a>Guest</a></li> -->
      	<li ><a id="guest" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-target="divpop">Guest</a></li>
      	<li><a> Checkin for </a></li>
      	<li ><input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" /></li>
      	<li "> <button id="cari" class="btn btn-primary">Search</button></li>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
  tamu = "<?php if(isset($_REQUEST['guest']))echo $_REQUEST['guest']; ?>";
  kamar = "<?php if(isset($_REQUEST['room']))echo $_REQUEST['room']; ?>";
  hotel = "<?php if(isset($_REQUEST['hotel']))echo $_REQUEST['hotel']; ?>";
  night = "<?php if(isset($_REQUEST['night']))echo $_REQUEST['night']; ?>";
  startDate = "";
  endDate = "";
  var link = "?guest="+tamu+"&room="+kamar+"&hotel="+hotel+"&night="+night;

  $("#guest").attr({tamu:tamu,kamar:kamar})
  if (tamu == '' && kamar == ''){
    $("#guest").html("Guest")
  }
  else{
    $("#guest").html(kamar+" Room "+tamu+" Guest")
  }
  
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
                $("#guest").html(kamar+" Room "+tamu+" Guest")
      }
      
            
    })
    $('#guest').on('shown.bs.popover', function () {
      // alert($("#guest").attr("tamu"))
      $('.popover input[name="tamu"]').val($("#guest").attr("tamu"))
      $('.popover input[name="kamar"]').val($("#guest").attr("kamar"))
    })
  });
</script>
