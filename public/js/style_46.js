// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 31.56028, lng: 130.55806 },
    zoom: 8, //Kagoshima
  });
}
// [END maps_map_simple]
