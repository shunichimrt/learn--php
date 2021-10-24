// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.02139, lng: 135.75556 },
    zoom: 8, //Kyoto
  });
}
// [END maps_map_simple]
