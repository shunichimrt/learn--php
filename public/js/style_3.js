// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 39.70361, lng: 141.1525 },
    zoom: 7, //Iwate
  });
}
// [END maps_map_simple]
