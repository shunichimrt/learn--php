// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 36.74139, lng: 140.44667 },
    zoom: 7, //Ibaraki
  });
}
// [END maps_map_simple]
