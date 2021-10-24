// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.50361, lng: 134.23833 },
    zoom: 8, //Tottori
  });
}
// [END maps_map_simple]
