// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.60472, lng: 140.12333 },
    zoom: 8, //Chiba
  });
}
// [END maps_map_simple]
