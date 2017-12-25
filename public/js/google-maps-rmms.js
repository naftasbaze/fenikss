var map;

function initMap() {
  var myLatlng = new google.maps.LatLng(57.5042621,22.8060391);
  var mapOptions = {
    zoom: 16,
	  scrollwheel: false,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
	  animation: google.maps.Animation.DROP,
      title: 'Rojas MMS'
  });
  
  var contentString = '<div class="info-window-content"><h2>Rojas MMS</h2>'+
  					  '<h3>Rojas Mūzikas un mākslas skola</h3>'+
					  '</div>';
					  
  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}
