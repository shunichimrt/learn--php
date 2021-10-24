// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.68944, lng: 139.69167 },
    zoom: 8, //Tokyo
  });
}
// [END maps_map_simple]
