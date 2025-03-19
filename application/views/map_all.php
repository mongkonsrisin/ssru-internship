<style>
/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {
  height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>

<div id="map"></div>
<script type="text/javascript">
var map;
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(13.774357, 100.515416),
    zoom: 11,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var infowindow = new google.maps.InfoWindow({
    content: ''
  });
  map = new google.maps.Map(document.getElementById("map"),
  mapOptions);


        $.ajax({
          url:'<?php echo base_url(); ?>api/all_com.php',
          dataType: "json",
          success: function(data){

            $.each(data, function(key, data) {
              var mylatlng = new google.maps.LatLng(data.com_lat, data.com_lng);
              // Creating a marker and putting it on the map
              var marker = new google.maps.Marker({
                position: mylatlng,
                icon: '<?php echo base_url(); ?>img/' + data.com_region + '.png'
              });
              marker.setMap(map);
              marker.addListener('click', function() {
                infowindow.setContent('<h6>'+data.com_name+'</h6>'+data.stu_names);

                infowindow.open(map, marker);
              });
            });
          }
        });

      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=">
      </script>
