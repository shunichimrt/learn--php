// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.34028, lng: 134.04333 },
    zoom: 8, //Kagaawa
  });
}
// [END maps_map_simple]
