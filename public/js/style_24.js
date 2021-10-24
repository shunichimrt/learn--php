// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.73028, lng: 136.50861 },
    zoom: 8, //Mie
  });
}
// [END maps_map_simple]
