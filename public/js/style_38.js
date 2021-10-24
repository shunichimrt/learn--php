// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.84167, lng: 132.76611 },
    zoom: 8, //Ehime
  });
}
// [END maps_map_simple]
