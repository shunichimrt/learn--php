// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.39111, lng: 136.72222 },
    zoom: 8, //Gifu
  });
}
// [END maps_map_simple]
