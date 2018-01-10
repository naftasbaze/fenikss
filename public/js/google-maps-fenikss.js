var map;

function initMap() {
  var myLatlng = new google.maps.LatLng(56.936618, 24.286943);
  var mapOptions = {
    zoom: 12,
	  scrollwheel: false,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
	  animation: google.maps.Animation.DROP,
      title: 'Fenikss un KO'
  });
  
  var contentString = '<div class="info-window-content"><h2>Fenikss un KO</h2>'+
  					  '<h3>Metālkalšanas un restaurācijas darbnīca “Pundurīši”</h3>'+
					  '</div>';
					  
  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}
