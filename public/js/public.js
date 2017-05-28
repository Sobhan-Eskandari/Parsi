$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
function myMap() {
    var myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 12};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    marker = new google.maps.Marker({
        position: myCenter,
        map: map
    });
}