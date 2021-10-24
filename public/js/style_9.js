// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.56583, lng: 139.88361 },
    zoom: 8, //Tochigi
  });
}
// [END maps_map_simple]
