// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.00444, lng: 135.86833 },
    zoom: 8, //Shiga
  });
}
// [END maps_map_simple]
