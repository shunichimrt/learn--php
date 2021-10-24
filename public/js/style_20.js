// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.65139, lng: 138.18111 },
    zoom: 8, //Nagano
  });
}
// [END maps_map_simple]
