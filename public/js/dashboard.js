$(document).ready(function(){
    $('.admin_side_title').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
});

$(document).ready(function(){
    $('li.activate_pag').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
});


//////////////////////

// function myMap() {
//     var myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);
//     var mapCanvas = document.getElementById("map");
//     var mapOptions = {center: myCenter, zoom: 12};
//     var map = new google.maps.Map(mapCanvas, mapOptions);
//     marker = new google.maps.Marker({
//         position: myCenter,
//         map: map
//     });
// }