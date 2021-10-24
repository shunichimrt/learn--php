// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 37.75, lng: 140.46778 },
    zoom: 7, //Fukushima
  });
}
// [END maps_map_simple]
