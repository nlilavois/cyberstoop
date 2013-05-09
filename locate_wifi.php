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

 <body  onload="initialize();">
<?php include_once 'inc_header.php'; ?>

      <div class="jumbotron">
        <h2 class="muted">Look for your Wifi</h2>
        <p class="lead">Find wifi.</p>
      </div>

<div class="row-fluid marketing">
	            <div class="span12">
					  <div class="control-group">
					    <label class="control-label" for="txtAddress">Address:</label>
					    <div class="controls">
					      <input type="text" id="txtAddress" placeholder="Address"   style="width:250px">
					    </div>
					  </div>

					  
					  <div class="control-group">
					    <label class="control-label" for="submit">&nbsp;</label>
					    <div class="controls">
					       <button type="submit" class="btn">Locate</button>
					    </div>
					  </div>
					  
					
					</form>	            	
	            </div>
	            
	            <div class="span12">
	      	<div id="map_canvas" style="width:98%; height:600px"></div>
	      </div>
	            
	            
      </div>

<?php include_once 'inc_bottom.php'; ?>
