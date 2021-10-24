// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.60639, lng: 130.41806 },
    zoom: 8, //Fukuoka
  });
}
// [END maps_map_simple]
