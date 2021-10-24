// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.82444, lng: 140.74 },
    zoom: 7, //Aomori
  });
}
// [END maps_map_simple]
