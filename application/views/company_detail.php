
<div class="container">
	<h1 class="text-center kanit">	<?=$company->com_name?> </h1>
	<h5 class="text-center kanit"><?=$company->com_addr?></h5>
	<div class="mx-auto my-auto mt-3" id="map" style="width: 100%;height: 500px;"></div>

</div>
    <script>
      var map;
			var position = {lat: <?=$company->com_lat?>, lng: <?=$company->com_lng?>};
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: position,
          zoom: 16
        });
				var marker = new google.maps.Marker({
          position: position,
          map: map
        });
				var infowindow = new google.maps.InfoWindow({
				 content: '<h6 class="text-danger font-weight-bold"><?=$company->com_name?></h6><a class="text-primary font-weight-bold" target="_blank" href="https://www.google.com/maps?q=loc:<?=$company->com_lat?>,<?=$company->com_lng?>">เปิดใน Google Maps</a>'
			 });

				marker.addListener('click', function() {
							infowindow.open(map, marker);
                });
								infowindow.open(map, marker);

      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
    async defer></script>
