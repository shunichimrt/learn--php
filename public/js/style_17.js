// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.59444, lng: 136.62556 },
    zoom: 8, //Ishikawa
  });
}
// [END maps_map_simple]
