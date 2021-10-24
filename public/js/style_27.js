// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.68639, lng: 135.52 },
    zoom: 8, //Osaka
  });
}
// [END maps_map_simple]
