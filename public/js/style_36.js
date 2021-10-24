// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.06583, lng: 134.55944 },
    zoom: 8, //Tokushima
  });
}
// [END maps_map_simple]
