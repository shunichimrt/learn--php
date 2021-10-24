// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.97694, lng: 138.38306 },
    zoom: 8, //Shizuoka
  });
}
// [END maps_map_simple]
