// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 38.26889, lng: 140.87194 },
    zoom: 7, //Miyagi
  });
}
// [END maps_map_simple]
