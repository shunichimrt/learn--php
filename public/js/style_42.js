// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 32.74472, lng: 129.87361 },
    zoom: 8, //Nagasaki
  });
}
// [END maps_map_simple]
