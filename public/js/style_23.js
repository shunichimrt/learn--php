// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.18028, lng: 136.90667 },
    zoom: 8, //Aichi
  });
}
// [END maps_map_simple]
