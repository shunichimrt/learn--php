// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 37.90222, lng: 139.02361 },
    zoom: 8, //Niigata
  });
}
// [END maps_map_simple]
