// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 31.91111, lng: 131.42389 },
    zoom: 8, //Miyazaki
  });
}
// [END maps_map_simple]
