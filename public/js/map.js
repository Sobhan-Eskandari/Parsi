function myMap() {
    var myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);
    var mapCanvas = document.getElementById("map");
    var mapOptions =
        {
            center: myCenter,
            zoom: 12,
            scrollwheel: false
        };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    $('#addMarker').click(function (event) {
        event.preventDefault();
        $('#addMarker').hide();
        $('#deleteMarker').show();
        google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng);
            google.maps.event.clearListeners(map, 'click');
        });
    });

    $('#deleteMarker').click(function (event) {
        event.preventDefault();
        $('#deleteMarker').hide();
        $('#addMarker').show();
        $('#lat').val('');
        $('#lng').val('');
        marker.setMap(null);
    });

    function placeMarker(location) {
        $('#lat').val(location.lat());
        $('#lng').val(location.lng());
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
}