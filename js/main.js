(function() {
	var map = new google.maps.Map(document.querySelector('.map-wrapper')),
	lighthouseIcon = { 
		url: 'images/lighthouse.png',
		//scaledSize: new google.maps.Size(25, 25)
	},
	geocoder = new google.maps.Geocoder(), 
	routeBut = document.querySelector('.geocode'),

	directionsService = new google.maps.DirectionsService(),
	directionsDisplay, 
	locations = [],
	marker;

	//console.log(lighthouseIcon);

	function initMap(position) {

locations[0] = {lat: 44.499932, lng: -81.373540};
directionsDisplay = new google.maps.DirectionsRenderer();
directionsDisplay.setMap(map);
directionsDisplay.setPanel(document.querySelector('.directionsPanel'));	
	
map.setCenter({lat: 44.499932 /*position.coords.latitude*/, lng: -81.373540 /*position.coords.longitude*/ });

map.setZoom(17); 

		marker = new google.maps.Marker({
			//position: {lat: 42.983233, lng: -81.250688},
			position: {lat: 44.499932 /*position.coords.latitude*/, lng: -81.373540 /*position.coords.longitude*/},
			map: map,
			animation: google.maps.Animation.DROP,
			icon: lighthouseIcon,  
			title: "Chantry Island Tours"
		});	

/*var panorama = new google.maps.StreetViewPanorama(
            document.querySelector('.streetView'), {
              position: {lat: 44.499932, lng: -81.373540},
              pov: {
                heading: 34,
                pitch: 10
              }
            }); 
map.setStreetView(panorama);*/		 


	}

function mapAddress() {
	var addressInput = document.querySelector('.address').value;
	geocoder.geocode( {'address' : addressInput}, function(results, status) {
		if(status === google.maps.GeocoderStatus.OK) {
			locations[1] = {lat:results[0].geometry.location.lat(), lng:results[0].geometry.location.lng()};

			map.setCenter(results[0].geometry.location); 
			if(marker) {
				marker.setMap(null);

				marker = new google.maps.Marker ({
					map: map,
					position: results[0].geometry.location 

				});
			}

			directions(results[0].geometry.location);
		} else {
			console.log("geocoder was not successful");
		}

	});
}

function directions(codedLoc) {
	var request = {
		origin: locations[1],
		destination: locations[0],
		travelMode: 'DRIVING'
	}; 

	directionsService.route(request, function(response, status){
		if(status === 'OK') {
			directionsDisplay.setDirections(response);
		}
	})
}



	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		//give some kind of error message to user 
		console.log("your browser does not support geolocation.");
	}

	function handleError(e) {
		console.log(e);
	}




routeBut.addEventListener("click", mapAddress, false);

})();