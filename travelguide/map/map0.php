<!DOCTYPE html>
<html>
<head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content{
            display: none;
        }

        #form{
            display: none;
        }

        #messages{
            display: none;
        }

        #map #infowindow-content{
            display: inline;
        }

        #map #form{
            display: inline;
        }

        #map #messages{
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
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 100;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 100;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 200px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 200;
            padding: 6px 12px;
        }
    </style>
</head>
<body>
<div class="pac-card" id="pac-card">
    <div>
        <div id="title">
            Search:
        </div>
    </div>
    <div id="pac-container">
        <input id="pac-input" type="text"
               placeholder="Enter a location">
    </div>
</div>
<div id="map"></div>
<div id="infowindow-content">
    <form id="infform" enctype="multipart/form-data">
    <img src="" width="16" height="16" id="place-icon">
    <span id="place-name"  class="title"></span><br>
    <span id="place-address"></span><br>
        <input type='text' id='name1' hidden/>
        <input type='text' id='address1' hidden/>
    <input type='button' value='Post' onclick='saveData1()'/>
    </form>
</div>
<div id="form">
    <form enctype="multipart/form-data">
    <table>
        <tr><span id="place-message"></span></tr>
        <tr><td>Name:</td> <td><input type='text' id='name' required="required"/> </td> </tr>
        <tr><td>Description:</td> <td><input type='text' id='address' required="required"/> </td> </tr>

        <tr><td></td><td><input type='button' value='Post' onclick='saveData()'/></td></tr>
    </table>
    </form>
</div>
<div id="messages">Posted</div>

<script>
    var map, marker, infowindow, infowindow2, messagewindow, plc;

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 35.1264, lng: 33.4299},
            zoom: 12
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infform');
        infowindow.setContent(infowindowContent);
        marker = new google.maps.Marker({
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
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            infowindowContent.children['place-icon'].src = place.icon;
            infowindowContent.children['place-name'].textContent = place.name;
            infowindowContent.children['place-address'].textContent = place.formatted_address;
            document.getElementById('name1').value = place.name;
            document.getElementById('address1').value = place.formatted_address;
            infowindow.open(map, marker);
        });

        infowindow2 = new google.maps.InfoWindow({
            content: document.getElementById('form')
        });

        messagewindow = new google.maps.InfoWindow({
            content: document.getElementById('messages')
        });

        google.maps.event.addListener(map, 'click', function(event) {
            marker = new google.maps.Marker({
                position: event.latLng,
                map: map
            });

            var latlng = marker.getPosition();
            var geocoder = new google.maps.Geocoder;
            geocoder.geocode({'location': latlng}, function(place, status) {
                if (status === 'OK') {
                    var service = new google.maps.places.PlacesService(map);
                    service.getDetails({
                        placeId: ''+place[1].place_id+''
                    }, function(place1, status) {
                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                            infowindowContent.children['place-icon'].src = place1.icon;
                            infowindowContent.children['place-name'].textContent = place1.name;
                            infowindowContent.children['place-address'].textContent = place[0].formatted_address;
                            infowindow.open(map, marker);
                            document.getElementById('name1').value = place1.name;
                            document.getElementById('address1').value = place[0].formatted_address;
                        }
                    });
                }
                else {
                    infowindow2.open(map, marker);
                    document.getElementById('place-message').innerHTML = "This place as no Google map id for now!";
                    if(document.getElementById('name').value != null && document.getElementById('address').value != null ) {
                        document.getElementById('name').value = "";
                        document.getElementById('address').value = "";
                    }
                }
            });
        });
        //return marker;

        //try html5 geoloc...
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
            });
        }
    }

    function saveData() {
        var name, address, latlng;
        name = document.getElementById('name').value;
        address = document.getElementById('address').value;
        latlng = marker.getPosition();

        var url = 'phpsqlinfo_addrow.php?name=' + name + '&description=' + address +
            '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        infowindow2.close();
        downloadUrl(url, function(data, responseCode) {

            if (responseCode == 200 && data.length <= 1) {
                messagewindow.open(map, marker);
                sessionStorage.setItem("currentPage","newPlace");
            }
        });
        //window.location = "../realapp.php";
    }

    function saveData1() {
        var name = document.getElementById('name1').value;
        var address = document.getElementById('address1').value;
        var latlng = marker.getPosition();

        var url = 'phpsqlinfo_addrow.php?name=' + name + '&description=' + address +
            '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        infowindow.close();
        downloadUrl(url, function(data, responseCode) {

            if (responseCode == 200 && data.length <= 1) {
                messagewindow.open(map, marker);
                sessionStorage.setItem("currentPage","newPlace");
            }
        });
        //window.location = "../realapp.php";
    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing () {
    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKCoh3_UyDEVdf6ECynelelYvdWXycYPs&libraries=places&callback=initMap"
        async defer>
</script>
</body>
</html>