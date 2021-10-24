// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 43.56417, lng: 142.34694 },
    zoom: 6, //Hokkaido
  });
}
// [END maps_map_simple]
