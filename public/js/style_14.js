// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.44778, lng: 139.6425 },
    zoom: 8, //Kanagawa
  });
}
// [END maps_map_simple]
