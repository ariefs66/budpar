@extends('layouts.admin.master')
@section('content')
<style type="text/css">
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 2!important;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}

    .form-horizontal .form-group {
         margin-right: 0px!important; 
         margin-left: 0px!important; 
    }
    #map {
        height: 60%;
      }
      /* Optional: Makes the sample page fill the window. */
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        padding-top: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
</style>
<div id="app">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title" style="background: #ffffff26; margin-top:10px">
                <ul id="breadcrumb-ihs">
                    <li><a href="#"><span class="icon icon-beaker"> </span> Hotel </a></li>
                    <li><a href="#"><span class="icon icon-beaker"> </span> Add </a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> Hotel Information</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form id="regis" class="form-horizontal" action="/example" method="post" novalidate>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Hotel</label>
                                                    <input type="text" name="nama_hotel" class="form-control" data-validation="required"> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price Start</label>
                                                    <input type="text" name="price_start" class="form-control" data-validation="required">
                                                </div>
                                            </div>
                                            
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Star</label>
                                                    <input type="text" name="star" class="form-control" data-validation="required">
                                                </div>
                                            </div>
                                             <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="control-label">Fasilitas</label>
                                                    <input id="fasilitas" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" />
                                                </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="pac-card" id="pac-card">
                                                <div>
                                                    <div id="title">
                                                    Location Search
                                                    </div>
                                                    
                                                </div>
                                                <div id="pac-container">
                                                    <input id="pac-input" type="text" placeholder="Enter a location">
                                                </div>
                                                </div>
                                                <div id="map"></div>
                                                <div id="infowindow-content">
                                                <img src="" width="16" height="16" id="place-icon">
                                                <span id="place-name"  class="title"></span><br>
                                                <span id="place-address"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Address</label>
                                                <textarea id="address" name="address" class="form-control" data-validation="required" rows="5"> </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label class="control-label">Latitude</label>
                                                <input type="text" id="latitude" name="latitude" class="form-control" data-validation="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label class="control-label">Longitude</label>
                                                <input type="text" id="longitude" name="longitude" class="form-control" data-validation="required">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2018 &copy; mouzaindonesia </footer>
        </div>
    </div>

</div> <!-- app -->
  
@stop

@section('script')
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({
      form : '#regis'
    });
</script>
<script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          disableDefaultUI: true
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
          var lat = marker.getPosition().lat();
          var long = marker.getPosition().lng();
          var address = $('#pac-input').val();
          $('#latitude').val(lat);
          $('#longitude').val(long);
          $('#address').val(address);
          
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBatJCkTGXjFKJO2XY71SFfC-2I_Sx9aWw&libraries=places&callback=initMap"
        async defer></script>
@stop