function myMap() {

    let myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);
    let mapCanvas = document.getElementById("map");
    let mapOptions =
        {
            center: myCenter,
            zoom: 12,
            scrollwheel: false
        };
    let map = new google.maps.Map(mapCanvas, mapOptions);

    let marker = new google.maps.Marker({
        position: place,
        map: map
    });

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