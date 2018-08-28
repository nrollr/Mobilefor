	function load() {
		var map = new google.maps.Map(document.getElementById('map'), {
			center: new google.maps.LatLng(50.87958958859947, 4.699916839599609),
			zoom: 15,
			panControl: false,
			zoomControl: true,
			zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL},
			mapTypeControl: true,
			styles: [	
				{"featureType": "administrative","elementType": "geometry","stylers": [{"visibility": "on"}]},
				{"featureType": "landscape","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},
				{"featureType": "poi","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.attraction","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.business","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.government","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.medical","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.park","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.park","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},
				{"featureType": "poi.place_of_worship","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.school","stylers": [{"visibility": "off"}]},
				{"featureType": "poi.sports_complex","stylers": [{"visibility": "on"}]},
				{"featureType": "road","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
				{"featureType": "road.arterial","stylers": [{"visibility": "on"}]},
				{"featureType": "road.highway","stylers": [{"visibility": "on"}]},
				{"featureType": "road.highway.controlled_access","stylers": [{"visibility": "on"}]},
				{"featureType": "transit","stylers": [{"visibility": "off"}]},
				{"featureType": "transit.line","stylers": [{"visibility": "simplified"}]},
				{"featureType": "transit.station.rail","stylers": [{"visibility": "on"}]},
				{"featureType": "transit.station.rail","elementType": "labels.icon","stylers": [{"visibility": "simplified"}]},
				{"featureType": "water","stylers": [{"visibility": "on"}]}
			],
		});
		
		var infoWindow = new google.maps.InfoWindow;
		var myIcon = new google.maps.MarkerImage("../assets/images/terminal.png", null, null, null, new google.maps.Size(15,25));

		downloadUrl('query_xml.php', function(data) {
			var xml = data.responseXML;
			var markers = xml.documentElement.getElementsByTagName('marker');
			Array.prototype.forEach.call(markers, function(markerElem) {
				var name = markerElem.getAttribute('name');
				var address = markerElem.getAttribute('address');
				var type = markerElem.getAttribute('type');
				var point = new google.maps.LatLng(
					parseFloat(markerElem.getAttribute('lat')),
					parseFloat(markerElem.getAttribute('lng')));

				var html = "<b>" + name + "</b> <br/>" + address;
				var marker = new google.maps.Marker({
					map: map,
					position: point,
					icon: myIcon,
				});
				marker.addListener('click', function(){
					infoWindow.setContent(html);
					infoWindow.open(map, marker);
				});
			});
		});
	}

	function downloadUrl(url, callback) {
		var request = window.ActiveXObject ?
			new ActiveXObject('Microsoft.XMLHTTP') :
			new XMLHttpRequest;

		request.onreadystatechange = function() {
			if (request.readyState == 4) {
				request.onreadystatechange = doNothing;
				callback(request, request.status);
			}
		};

		request.open('GET', url, true);
		request.send(null);
	}

    function doNothing() {}