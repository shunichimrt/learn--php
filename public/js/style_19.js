// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.66389, lng: 138.56833 },
    zoom: 8, //Yamanashi
  });
}
// [END maps_map_simple]
