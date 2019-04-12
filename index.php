<html>
<head>
    <title>Introduction to Google API</title>
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


</script>
</body>
</html>