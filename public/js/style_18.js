// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.06528, lng: 136.22194 },
    zoom: 8, //Fukui
  });
}
// [END maps_map_simple]
