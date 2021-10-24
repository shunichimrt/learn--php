// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 34.66167, lng: 133.935 },
    zoom: 8, //Okayama
  });
}
// [END maps_map_simple]
