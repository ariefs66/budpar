
	(function(A) {
		if (!Array.prototype.forEach)
			A.forEach = A.forEach || function(action, that) {
				for (var i = 0, l = this.length; i < l; i++)
					if (i in this)
						action.call(that, this[i], i, this);
				};

		})(Array.prototype);
		var events = '{"Events":[';
		jQuery.each(phpVars, function(i, val) {
			events += '{"type_point":"'+val.event_cat_desc+'", "location_latitude": "' + val.latitude + '", "location_longitude": "' + val.longitude + '", "map_image_url": "' + window.location.origin + '/asset/uploads/events/'+val.event_img_banner+'",' +
				'"rate": "Superb | 7.5","name_point": "'+val.event_name+'","description_point": "'+val.venue+'","phone": "'+val.contact+'","url_detail": "' + val.seo_title + '"},';

		});

		events = events.substring(0, events.length-1);
		events += "]}";
		console.log(JSON.parse(events));
		var
		mapObject,
		markers = [],
		markersData = JSON.parse(events);
			var mapOptions = {
				zoom: 10,
				center: new google.maps.LatLng(-6.9034443, 107.5731166),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				styles: [
					{
						"featureType": "water",
						"stylers": [
							{
								"saturation": 43
							},
							{
								"lightness": -11
							},
							{
								"hue": "#0088ff"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"hue": "#ff0000"
							},
							{
								"saturation": -100
							},
							{
								"lightness": 99
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#808080"
							},
							{
								"lightness": 54
							}
						]
					},
					{
						"featureType": "landscape.man_made",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#ece2d9"
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#ccdca1"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#767676"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "labels.text.stroke",
						"stylers": [
							{
								"color": "#ffffff"
							}
						]
					},
					{
						"featureType": "poi",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "landscape.natural",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"color": "#EBE5E0"
							}
						]
					},
					{
						"featureType": "poi.park",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "poi.sports_complex",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					}
				]
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: window.location.origin + '/asset/img/pins/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));

	});
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<div style="width: 240px; height: 120px;position:relative;overflow:hidden;ss"><img style="width: 100%;margin:auto;" src="' + item.map_image_url + '" alt=""/></div>' +
				'<span>'+ 
					'<span class="infobox_rate">'+ item.rate +'</span>' +
					'<h3>'+ item.name_point +'</h3>' +
				'<em>'+ item.type_point +'</em>' +
				'<strong>'+ item.description_point +'</strong>' +
				'<a href="event-detail/'+ item.url_detail + '" target="_blank" class="btn_infobox_detail"></a>' +
				'<form action="http://maps.google.com/maps" method="get" target="_blank">' +
					'<input name="saddr" value="'+ item.get_directions_start_address +'" type="hidden">' +
					'<input type="hidden" name="daddr" value="'+ item.location_latitude +',' +item.location_longitude +'">' +
					'<button type="submit" value="Get directions" class="btn_infobox_get_directions">Get directions</button></form>' +
					'<a href="tel://'+ item.phone +'" class="btn_infobox_phone">'+ item.phone +'</a>' +
					'<br/><br/></span>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 220),
				closeBoxMargin: '5px -28px 0 0',
				closeBoxURL: window.location.origin + "/asset/img/close_infobox.png",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
		function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}
