// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 32.78972, lng: 130.74167 },
    zoom: 8, //Kumamoto
  });
}
// [END maps_map_simple]
