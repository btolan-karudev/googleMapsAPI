<html>
<head>
    <title>Markers Show Hide Delete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <style>
        html, body {
            height: 100%;
        }

        #map {
            height: 60%;
        }
    </style>
</head>
<body>
<div id="map"></div>
<button onclick="showMarkers();">Show existing Markers</button>
<button onclick="clearMarkers();">Hide Markers from the map</button>
<button onclick="deleteMarkers();">remove Markers Completly from the map</button>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGcKPbeqyqSYW9CEnPqOpekH9Rl7OxxP0"></script>
<script>

    // map options
    var myLatLong = {lat: 45.75, lng: 4.85};
    var mapOptions = {
        center: myLatLong,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    // create map
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // setting the Maptyped upon construction
    map.setMapTypeId(google.maps.MapTypeId.ROADMAP);

    //create marker 1
    var marker1Options = {
        position: myLatLong,
        map: map,
        title: 'This is Lyon',
        draggable: true,
        animation: google.maps.Animation.DROP //animation

    };
    var marker1 = new google.maps.Marker(marker1Options);

    //create info window
    var contentString = "<div>This is an info window</div>"
    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 100
    });

    //add listner to the market to show the InfoWindos
    marker1.addListener("click", function () {
        infowindow.open(map, marker1)
    });

    var marker2Options = {
        position: {lat: 45.73, lng: 4.91},
        title: 'This is Bron',
        draggable: true,
        animation: google.maps.Animation.BOUNCE //animation

    };
    var marker2 = new google.maps.Marker(marker2Options);
    marker2.setMap(map);

    // remove markers
    marker1.setMap(null);
    marker2.setMap(null);

    // create array where we store the markers
    var markers = [];

    // create a marker once we click on a point on the map
    map.addListener("click", function (event) {
        var markerOptions = {
            position: event.latLng,
            // map: map,
        };
        var marker = new google.maps.Marker(markerOptions);
        // store marker in array
        markers.push(marker);
    });

    // show markers stored in the array
    function showMarkers() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // hide markers from the map(reste toujour dans l array)
    function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
    }

    // delete the markers from the array
    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

</script>
</body>
</html>