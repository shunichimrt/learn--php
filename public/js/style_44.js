// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.23806, lng: 131.6125 },
    zoom: 8, //Oita
  });
}
// [END maps_map_simple]
