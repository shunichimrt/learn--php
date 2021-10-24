// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 38.64056, lng: 140.06333 },
    zoom: 7,  //Yamagata
  });
}
// [END maps_map_simple]
