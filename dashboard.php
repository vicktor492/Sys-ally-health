<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">	  
  
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
  <body>
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -14.8033933, lng: -39.3028513},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEjsTbj7ydNb07VAe3jl8pOkLTGDGAzkw&callback=initMap">
    </script>
	  
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-6">
          <h1>Dashboard - SysAllyHealth</h1>
        </div>
        <div class="col-6" align="right">
			<p><form>
<input type="button" value="Print this page" onClick="window.print()"/>
</form></p>
          <p class="text-right"><a href="index.php">QUIT</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="media">
            <img class="mr-3" src="images/115X115.gif" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">Welcome Agent Heath</h5>
				<p>ID:</p>
              	<p>Name:</p>
				<p>Adresses:</p>
				<p>Phone:</p>
				
            </div>
          </div>
        </div>
        
			 
			  
          </div>
        </div>
      </div>
      
      <hr>
      
      <h2 align="center">RegisterAgent</h2>
      <hr>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8  col-12 jumbotron">
            <form>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
				<div class="form-group">
                <label for="name">ID Agent:</label>
                <input type="number" class="form-control" id="name" name="id agente" placeholder="ID Agent">
              </div>
				<div class="form-group">
                <label for="name">Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
              </div>
				<div class="form-group">
                <label for="name">Email:</label>
                <input type="text" class="form-control" id="address" name="email" placeholder="Address">
              </div>
				<div class="form-group">
                <label for="name">Phone:</label>
                <input type="text" class="form-control" id="name" name="phone" placeholder="Phone">
              </div>
				<div class="form-group">
                <label for="name">User</label>
                <input type="text" class="form-control" id="name" name="user" placeholder="User">
              </div>
				<div class="form-group">
                <label for="name">Password</label>
                <input type="password" class="form-control" id="name" name="password" placeholder="Password">
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <hr>
	   <hr>
     <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Marcos Nunes C. dos Santos</a> </li>
                <li class="btn-link"> <a></a></li>
                <li class="btn-link"> <a></a></li>
                <li class="btn-link"> <a></a></li>
                <li class="btn-link"> <a></a>Bruno Rodrigues Peixoto Uzeda</li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Victor Everton</a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Ítallo Maurício Lima</a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a>Abimael de Andrade Silva</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>BrothersUnitedForSpace</strong><br>
            This is ours Space<br>
            #SpaceAppChallengeSalvador<br>
           
          </address>
			 <address>
            <strong>Challenge Choice</strong><br>
            <a href="https://2018.spaceappschallenge.org/challenges/what-world-needs-now/globe-observer/details">Challenge</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
	<script src="js/slider_auto.js"></script>
	<script src="js/map.js"></script>
  </body>
</html>