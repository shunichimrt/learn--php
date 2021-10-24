// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.85694, lng: 139.64889 },
    zoom: 8, //Saitama
  });
}
// [END maps_map_simple]
