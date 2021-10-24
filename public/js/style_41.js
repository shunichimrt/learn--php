// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.24944, lng: 130.29889 },
    zoom: 8, //Saga
  });
}
// [END maps_map_simple]
