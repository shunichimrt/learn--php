// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.69111, lng: 138.76083 },
    zoom: 8, //Gunma
  });
}
// [END maps_map_simple]
