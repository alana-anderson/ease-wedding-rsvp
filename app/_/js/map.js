var map;

google.maps.event.addDomListener(window, "load", function () {

  var map = new google.maps.Map(document.getElementById("google-map"), {
    center: new google.maps.LatLng(45.327677, -122.228305),
    zoom: 10,
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.HYBRID
  });

  var infoWindow = new google.maps.InfoWindow();

  function createMarker(options, html) {
    var marker = new google.maps.Marker(options);
    if (html) {
      google.maps.event.addListener(marker, "click", function () {
        infoWindow.setContent(html);
        infoWindow.open(options.map, this);
      });
    }
    return marker;
  }

  var marker0 = createMarker({
    position: new google.maps.LatLng(45.330519, -121.709081),
    map: map,
    icon: "http://1.bp.blogspot.com/_GZzKwf6g1o8/S6xwK6CSghI/AAAAAAAAA98/_iA3r4Ehclk/s1600/marker-green.png"
  }, "<h4 class='gold'>Timberline Lodge</h4><p class='gold'>Come join us!</p>");
});
