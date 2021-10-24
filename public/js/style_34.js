// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.39639, lng: 132.45944 },
    zoom: 8, //Hiroshima
  });
}
// [END maps_map_simple]
