	function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(50.87958958859947, 4.699916839599609), 
        zoom: 15, 
        panControl: false, 
        zoomControl: true,
        zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL},
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        mapTypeId: google.maps.MapTypeId.ROADMAP});
      var infoWindow = new google.maps.InfoWindow;
	  var myIcon = new google.maps.MarkerImage("../assets/images/terminal.png", null, null, null, new google.maps.Size(15,25)); 
	  var styles = 
	  	[{"elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#808080"}]},
	  		{"featureType":"water","stylers":[{"color":"#92c9ee"}]},
	  		{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility": "off"}]},
	  		{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},
	  		{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#e6e0d3"}]},
	  		{"featureType":"poi.school","elementType":"geometry","stylers":[{"color":"#e6e0d3"}]},		
	  		{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffdd4c"}]},
	  		{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#db9624"}]},
	  		{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#ffdd4c"}]},
	  		{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#808080"}]}]; 
	 	map.setOptions({styles: styles});
	
      downloadUrl("query_xml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: myIcon,
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
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