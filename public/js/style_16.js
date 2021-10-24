// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.69528, lng: 137.21139 },
    zoom: 8, //Toyama
  });
}
// [END maps_map_simple]
