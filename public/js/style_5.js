// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 39.71861, lng: 140.1025 },
    zoom: 7, //Akita
  });
}
// [END maps_map_simple]
