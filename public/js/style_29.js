// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.68528, lng: 135.83278 },
    zoom: 8, //Nara
  });
}
// [END maps_map_simple]
