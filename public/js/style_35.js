// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.18583, lng: 131.47139 },
    zoom: 8, //Yamaguchi
  });
}
// [END maps_map_simple]
