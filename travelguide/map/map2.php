<!DOCTYPE html>
<html>
<head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */

        #map2 {
            height: 100%;
            position: relative;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map2"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map2'), {
            center: new google.maps.LatLng(35.1264, 33.4299),
            zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;


        // Change this depending on the name of your PHP or XML file
        downloadUrl('phpjsonmap.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('description');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var map = new google.maps.Map(document.getElementById('map2'), {
                    center: point,
                    zoom: 17
                });
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                });
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
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

    function doNothing () {
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKCoh3_UyDEVdf6ECynelelYvdWXycYPs&callback=initMap">
</script>

</body>
</html>

