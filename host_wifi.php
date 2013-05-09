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

 <body>
<?php include_once 'inc_header.php'; ?>

      <div class="jumbotron">
        <h2 class="muted">Hosting your Wifi</h2>
        <p class="lead">Register here to provide wifi hosting to the local youth.</p>
      </div>

      <hr>

      <div class="row-fluid marketing">
	            <div class="span12">
					<form class="form-horizontal">
						<div class="control-group">
					    <label class="control-label" for="txtBizName" >Business Name: </label>
					    <div class="controls">
					      <input type="text" id="txtBizName" placeholder="Business Name"   style="width:250px">
					    </div>
					  </div>
					  
					  <div class="control-group">
					    <label class="control-label" for="txtAddress">Business Address: </label>
					    <div class="controls">
					      <input type="text" id="txtAddress" placeholder="Business Address"   style="width:250px">
					    </div>
					  </div>
					  
					  
					  
					  <div class="control-group">
					    <label class="control-label" for="txtTelephone">Contact Person: </label>
					    <div class="controls">
					      <input type="text" id="txtTelephone" placeholder="First Last Name">
					    </div>
					  </div>

					  
					  
					  <div class="control-group">
					    <label class="control-label" for="txtTelephone">Business Telephone: </label>
					    <div class="controls">
					      <input type="text" id="txtTelephone" placeholder="Telephone">
					    </div>
					  </div>
					  
					  
					  <div class="control-group">
					    <label class="control-label" for="txtTelephone">Email: </label>
					    <div class="controls">
					      <input type="text" id="txtEmail" placeholder="Email">
					    </div>
					  </div>

					  
					 
					  
					  <hr/>
	
					  <div class="control-group">
					    <label class="control-label" for="submit">Days and Time Wifi Availibity</label>
					    <div class="controls">
					       <input type="checkbox" /> Monday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option>6:30pm</option>
					       </select>
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Tuesday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Wednesday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Thursday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Friday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Saturday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       
					       <div>&nbsp;</div>
					       <input type="checkbox" /> Sunday from 
					       <select style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       to 
					       <select  style="width:100px">
					       	<option>6:00am</option>
					       	<option selected>6:30pm</option>
					       </select>
					       
					       
					       
					       
					    </div>
					  </div>
					 
						
						
						 <div class="control-group">
					    <label class="control-label" for="submit">&nbsp;</label>
					    <div class="controls">
					       <button type="submit" class="btn">Register</button>
					    </div>
					  </div>
						
						
					</form>	            	
	            </div>
      </div>

<?php include_once 'inc_bottom.php'; ?>
