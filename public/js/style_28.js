// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.69139, lng: 135.18306 },
    zoom: 8, //Hyogo
  });
}
// [END maps_map_simple]
