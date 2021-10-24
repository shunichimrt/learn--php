// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.47222, lng: 133.05056 },
    zoom: 8, //Shimane
  });
}
// [END maps_map_simple]
