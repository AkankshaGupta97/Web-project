function initialize() { 
var map_canvas = document.getElementById('map-canvas'); 
var map_options = { center: new google.maps.LatLng(75.7667, 99.7833),
zoom: 8,
mapTypeId: google.maps.MapTypeId.ROADMAP 
}
var map = new google.maps.Map(map_canvas, map_options) 
}
google.maps.event.addDomListener(window, 'load', initialize);