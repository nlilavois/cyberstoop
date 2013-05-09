<?php include_once 'inc_top.php'; ?>
  
  <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDedpoWaZ5CdPSYtqHbR_ANCYiTu-zkbXs&sensor=false">
    </script>
    
   <script type="text/javascript">
    var markers = [];
    var circles = [];
    
      function initialize() {
 	  
    	  if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                 startPos = position;
                 var myLatlng = new google.maps.LatLng(startPos.coords.latitude, startPos.coords.longitude);

                var mapOptions = {
                        center: new google.maps.LatLng(startPos.coords.latitude, startPos.coords.longitude),
                        zoom: 12,
                        maxZoom: 16,
                        noClear:false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      };
                      var map = new google.maps.Map(document.getElementById("map_canvas"),
                          mapOptions);

                      google.maps.event.addListener(map, 'click', function(e) {
                          placeMarker(e.latLng, map);
                        });
            		  
                      

                
              }, function(error) {
                alert("Error occurred. Error code: " + error.code);
                // error.code can be:
                //   0: unknown error
                //   1: permission denied
                //   2: position unavailable (error response from locaton provider)
                //   3: timed out
              });
            }


    	  

        
      }
  </script>
  
  </head>

 <body onload="initialize();">
<?php include_once 'inc_header.php'; ?>

      <div class="jumbotron">
        <img src="/images/Corbis-42-31160641" />
        <p class="lead">Looking for FREE WIFI to finish a project, do homework or socialize? SEARCH NOW</p>
        <a class="btn btn-large btn-success" href="locate_wifi.php">Look for wifi</a> &nbsp;
        <a class="btn btn-large btn-success" href="host_wifi.php">Hosting wifi</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
	      <div class="span12">
	      	<div id="map_canvas" style="width:98%; height:600px"></div>
	      </div>
      
      
        <div class="span6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="span6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

<?php include_once 'inc_bottom.php'; ?>
