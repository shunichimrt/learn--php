// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.55972, lng: 133.53111 },
    zoom: 8, //Kochi
  });
}
// [END maps_map_simple]
