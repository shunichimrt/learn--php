// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.22611, lng: 135.1675 },
    zoom: 8, //Wakayama
  });
}
// [END maps_map_simple]
