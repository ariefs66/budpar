@extends('layouts.template')
@section('content')
<style type="text/css">
	.wizard {
    margin: 20px auto;
    background: #fff;
    height: 300px;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
    /*height: 300px;*/
}

.wizard h3 {
    margin-top: 0;
}

@media only screen and( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
    
}
.buscar-caja { 
  position: absolute; 
  top: 50%; left: 50%; 
  transform: translate(-50%, -50%); 
  background: #fff; 
  border-radius: 40px; 
  padding: 10px; 
} 
.buscar-caja:hover > .buscar-txt 
{
  width: 240px; 
  padding: 0 6px; 
} 
.buscar-caja:hover > .buscar-btn {
  background: white; 
  color: black; 
} 

.buscar-btn { 
  
  float: right; 
  width: 40px; 
  height: 40px; 
  border-radius: 50%; 
  
  display: flex; 
  justify-content: center; 
  align-items: center; 
  transition: 0.4s; 
  color: black; 
  cursor: pointer; 
} 
.buscar-btn > i 
{ 
  font-size: 18px; 
} 
.buscar-txt { 
  border: none; 
  background: none; 
  outline: none; 
  float: left; 
  padding: 0; 
  color: #333; 
  font-size: 16px; 
  transition: 0.4s; 
  line-height: 40px; 
  width: 0px; 
  font-weight: bold; 
}

.btn-primary{
    background: #fff;
    color: #CB356B;
    border: none;
}
.mybox{
    position: absolute;
    left:17%;
    top:70%;
    width: 80%;
}
.feedbar {
    color: black;
    position: relative;
    width: 75%;
    height: 40px;
    /* left: 0; */
    background: white;
    /* padding-bottom: 50px; */
    /*margin-bottom: 20px;*/
    border-radius: 5px;
}
.feedbar > label{
    font-family: sans-serif;
    font-weight: bold;
    font-size: 14px;
    position: absolute;
    left: 10px;
    top: 10px;
}
.feed {
    height: 330px
}
.myslide > div:first-child  {
    padding-top: 30px;
    padding-left: 10px; 
}
@media only screen and (max-width: 600px){
    .feedbar {
        left: 15px;
        position: relative;
        width: 94%;
        height: 40px;
        background: white;
        margin-bottom: 25px;
        border-radius: 5px;
    }
}
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<section class="parallax_window_in" data-parallax="scroll" data-image-src="/asset/img/banner_event.png" data-natural-width="1250" data-natural-height="400" style="height: 300px">
    <div id="sub_content_in">

    <div class="buscar-caja"> 
        <input type="text" name="" class="buscar-txt" placeholder="Search ....."/> 
        <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 
        
    </div> 
    <div class="mybox">
        <div class="box_cat small">
        <div class="col-md-2 col-xs-4">
            <a href="#">
                <!-- <span>12</span> -->
                <i class="icon_set_1_icon-6"></i>
                <h3>Hotels </h3>
                
            </a>
        </div>
        <div class="col-md-2 col-xs-4">
            <a href="#">
                <!-- <span>43</span> -->
                <i class="icon_set_1_icon-58"></i>
                <h3>Restaurants</h3>
                
            </a>
        </div>
        <div class="col-md-2 col-xs-4">
            <a href="#">
                <!-- <span>24</span> -->
                <i class=" icon_set_1_icon-3"></i>
                <h3>Souvenir</h3>
                
            </a>
        </div>
        <div class="col-md-2 col-xs-4">
            <a href="#">
                <!-- <span>24</span> -->
                <i class=" icon_set_1_icon-26"></i>
                <h3>Bandros</h3>
                
            </a>
        </div>
        <div class="col-md-2 col-xs-4">
            <a href="/eventproject/event')?>">
                <!-- <span>34</span> -->
                <i class="icon_set_1_icon-17"></i>
                <h3>Package</h3>
               
            </a>
        </div>
    </div>
    </div>

        <!-- <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step one</h3>
                        <p>second
                            <div class="col-md-6 col-xs-6">
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </p>
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">next</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step two</h3>
                        <p>Second step</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">next</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step three</h3>
                        <p>Third step</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">next</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete steps</h3>
                        <p>You have successfully completed every steps.</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Submit</button></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div> -->
    </div>
    <!-- End sub_content -->
</section>

<!-- <div class="container margin_60_30"> -->
<!-- <section class="parallax_window_in" data-parallax="scroll" data-image-src="/asset/img/banner.jpg" style="height: 800px;">
    <div id="sub_content_in" style="display: block;">
        
    </div>
    
</section> -->

<div class="container margin_60_30">
    <div class="row">

        <aside class="col-md-3 col-md-push-9" id="sidebar">
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
        <div class="container feed">
            <div class="feedbar">
                <label>Hotel</label>
            </div>
            <div class="col-md-9 col-md-pull-3" style="position: relative;">
                <div id="hotels" class="carousel myslide">
                    
                </div>
                <!-- End row -->
                
            </div>
        </div>
        <!-- End col lg 9 -->
        <div class="container feed">
            <div class="feedbar">
                <label>Restaurant</label>
            </div>
            <div class="col-md-9 col-md-pull-3" style="position: relative;">
                <div id="restaurant" class="carousel myslide">
                    
                </div>
                <!-- End row -->
                
            </div>
        </div>
        
    </div>
    <!-- End row -->
</div>
<!-- SPECIFIC SCRIPTS -->
<script src="/asset/js/raphael-2.1.4.min.js"></script>
<script src="/asset/js/justgage.min.js"></script>
<script src="/asset/js/score.js"></script>
<script src="/asset/js/ion.rangeSlider.min.js"></script>
<script src="/asset/js/switchery.min.js"></script>

<!-- Fixed sidebar + Input Range + Carousel + Switch-->
<script src="/asset/js/theia-sticky-sidebar.min.js"></script>
<!-- </div> -->

<!-- bootstrap datepicker -->
<script src="/asset/js/bootstrap-datepicker.js"></script>
<script src="/asset/js/datepicker_func.js"></script>
<script>
    $(function() {
        //Date picker
        $('#b').datepicker({
            format: 'd MM yyyy',
            autoclose: true
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

</script>
<script type="text/javascript">
$.getJSON( "/get_hotel", { data: 10, date: '10-10-10'  } )
  .done(function( resp ) {
    $.each(resp.data,function(i,data){
        var temp="";
temp += "<div class=\"wow fadeIn\" data-wow-delay=\"0.1s\">";
temp += "                    <div class=\"img_wrapper\">";
temp += "                        <div class=\"ribbon\">";
temp += "                            <span>Most Visited<\/span>";
temp += "                        <\/div>";
temp += "                        <div class=\"tools_i\">";
temp += "                            <div class=\"directions_list\">";
temp += "                                <a href=\"http:\/\/maps.google.com\/maps?daddr="+data.lat+","+data.lng+"\" class=\"tooltip_styled tooltip-effect-4\" target=\"_blank\">";
temp += "                                    <span class=\"tooltip-item\"><\/span>";
temp += "                                    <span class=\"tooltip-content\">Directions<\/span>";
temp += "                                <\/a>";
temp += "                            <\/div>";
temp += "                            <div class=\"wishlist\">";
temp += "                                <a id=\"\" class=\" book_h tooltip_styled tooltip-effect-4\">";
temp += "                                    <span class=\"tooltip-item\"><\/span>";
temp += "                                    <div data-tes=\"h_"+data.id+"\" class=\"tooltip-content\"> Bookmark<\/div>";
temp += "                                <\/a>";
temp += "                            <\/div>";
temp += "                        <\/div>";
temp += "                        <!-- End tools i-->";
temp += "                        <div class=\"img_container\" style=\"height: 200px\">";
temp += "                            <a href=\"\/event-project\/event-detail\/\">";
temp += "                                <img src=\"asset\/img\/hotel\/"+data.img+"\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"\">";
temp += "                                <div class=\"short_info\">";
temp += "                                    <small><\/small>";
temp += "                                    <h3>"+data.nama+"<\/h3>";
temp += "                                    <em>"+data.desc+"<\/em>";
temp += "                                    <p>";
temp += "                                        sdaskdand";
temp += "                                    <\/p>";
temp += "                                    <div class=\"score_wp\">";
temp += "                                        <div id=\"\" class=\"score\" data-value=\"7.5\"><\/div>";
temp += "                                    <\/div>";
temp += "                                <\/div>";
temp += "                            <\/a>";
temp += "                        <\/div>";
temp += "                    <\/div>";
temp += "                    <!-- End img_wrapper -->";
temp += "                <\/div>";
temp += "                ";

        console.log(data)
        $("#hotels").append(temp)
        var select="";
        select += "<option value=\"h_"+data.id+"\">"+data.nama+"<\/option>";
        $("#select_hotel").append(select);


    });
    $(".book_h").on("click",function(){
        val = $(this).find(".tooltip-content").attr('data-tes')
            console.log(val)
            $("#select_hotel").val(val);
        })
    $('#hotels').owlCarousel({
        loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    });
  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
});
</script>
<script type="text/javascript">
$.getJSON( "/get_restaurant", { data: 10, date: '10-10-10'  } )
  .done(function( resp ) {
    $.each(resp.data,function(i,data){
        var temp="";
temp += "<div class=\"wow fadeIn\" data-wow-delay=\"0.1s\">";
temp += "                    <div class=\"img_wrapper\">";
temp += "                        <div class=\"ribbon\">";
temp += "                            <span>Most Visited<\/span>";
temp += "                        <\/div>";
temp += "                        <div class=\"tools_i\">";
temp += "                            <div class=\"directions_list\">";
temp += "                                <a href=\"http:\/\/maps.google.com\/maps?daddr="+data.lat+","+data.lng+"\" class=\"tooltip_styled tooltip-effect-4\" target=\"_blank\">";
temp += "                                    <span class=\"tooltip-item\"><\/span>";
temp += "                                    <span class=\"tooltip-content\">Directions<\/span>";
temp += "                                <\/a>";
temp += "                            <\/div>";
temp += "                            <div class=\"wishlist\">";
temp += "                                <a class=\"book_r tooltip_styled tooltip-effect-4\">";
temp += "                                    <span class=\"tooltip-item\"><\/span>";
temp += "                                    <div data-val=\"r_"+data.id+"\" class=\"tooltip-content\"> Bookmark<\/div>";
temp += "                                <\/a>";
temp += "                            <\/div>";
temp += "                        <\/div>";
temp += "                        <!-- End tools i-->";
temp += "                        <div class=\"img_container\" style=\"height: 200px\">";
temp += "                            <a href=\"\/event-project\/event-detail\/\">";
temp += "                                <img src=\"asset\/img\/hotel\/"+data.img+"\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"\">";
temp += "                                <div class=\"short_info\">";
temp += "                                    <small><\/small>";
temp += "                                    <h3>"+data.nama+"<\/h3>";
temp += "                                    <em>"+data.desc+"<\/em>";
temp += "                                    <p>";
temp += "                                        sdaskdand";
temp += "                                    <\/p>";
temp += "                                    <div class=\"score_wp\">";
temp += "                                        <div id=\"\" class=\"score\" data-value=\"7.5\"><\/div>";
temp += "                                    <\/div>";
temp += "                                <\/div>";
temp += "                            <\/a>";
temp += "                        <\/div>";
temp += "                    <\/div>";
temp += "                    <!-- End img_wrapper -->";
temp += "                <\/div>";
temp += "                ";

        console.log(data)
        $("#restaurant").append(temp)
        var select="";
        select += "<option value=\"r_"+data.id+"\">"+data.nama+"<\/option>";
        $("#select_restaurant").append(select);
    })
    $(".book_r").on("click",function(){
        val = $(this).find(".tooltip-content").attr('data-val')
            console.log(val)
            $("#select_restaurant").val(val);
        })  
    $('#restaurant').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
});
</script>
@endsection