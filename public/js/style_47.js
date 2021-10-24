// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 26.6125, lng: 128.08111 },
    zoom: 8, //Okinawa
  });
}
// [END maps_map_simple]
