<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpaceAppChallenge - Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">SAH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">News</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="app.html">APP</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="api.html">API</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
				  <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
			  
            <div class="carousel-inner">
              <div class="carousel-item active" id="slideshow">
                <img class="d-block w-100" src="images/globe_ivss.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block text-justify">
                  <h3>Next Week (25 October): 2019 GLOBE IVSS Informational Webinar</h3>
                  <h5><p>Date: Oct 18, 2018<br>GLOBE is pleased to host the 2019 GLOBE International Virtual Science Symposium (IVSS). The IVSS is a way for primary through undergraduate students from all GLOBE countries to showcase their hard work.</p></h5>
                </div>
              </div>
              <div class="carousel-item" id="slideshow">
                <img class="d-block w-100" src="images/globe.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block text-justify">
                  <h3>Active U.S. GLOBE Partnerships/Partners: Nominations for 2019 U.S. Partner Forum Due 09 November</h3>
                  <h5><p>Date: 10/17/2018<br>Active U.S. GLOBE Partnerships/Partners: Please consider putting your knowledge, skills, and talents to excellent use and apply to become a part of the U.S. Partner Forum. This year, there are two openings. Nominations are due 09 November 2018! </p></h5>
                </div>
              </div>
              <div class="carousel-item" id="slideshow">
                <img class="d-block w-100" src="images/mosquito.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block text-justify">
                  <h3>Today (17 October) Join GLOBE Mission Mosquito Kick-off Webinar</h3>
                  <h5><p>Date: 10/17/2018<br>Mosquitoes are the world’s most dangerous animal – and you can do something to shed light on this critical problem. Join the Mission Mosquito Field Measurement Campaign! Scientists around the world are finding ways to better understand the preferred environmental conditions and types of habitats that mosquitoes prefer. Are you ready to help?</p></h5>
                </div>
            	</div>
			</div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            	<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            	<span class="carousel-control-next-icon" aria-hidden="true"></span>
            	<span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Download ours API" src="images/icon_api.png" width="40px" height="40px"></div>
            <div class="col-lg-6 col-10 ml-1">
              <a href="api.html"> <h4>Download our API</h4> </a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Download ours APP" src="images/icon_ios.png" width="40px" height="40px"></div>
            <div class="col-lg-6 col-10 ml-1">
              <a href="app.html"> <h4> Download our APP </h4> </a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Be informed" src="images/icon_information.png" width="40px" height="40px"></div>
            <div class="col-lg-6 col-10 ml-1">
				<a href="news.php"> <h4>Be informed</h4> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">RISK MAP</h2>
    <hr>
    <div class="container">
    	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://code.highcharts.com/maps/highmaps.js"></script>
		<script src="https://code.highcharts.com/maps/modules/data.js"></script>
		<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
		<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>

		<div id="container" style="max-width: 1000px" ></div>
       
    </div>
     <div class="row text-center mt-4">
       <div class="col-md-4 pb-1 pb-md-0">
         <div class="card">
           <a href="images/grafic_habitat_mosquito.pdf" ><img class="card-img-top" src="images/grafic_habitat_mosquito.jpg" alt="Grafic Mosquito Habitat by date"></a>
            <div class="card-body">
              <h5 class="card-title">School  Minas Gerais</h5>
              <p class="card-text">Data caunt for mosquito Habitats -Jan 2015 to Jan 2018.</p>
              <a href="images/grafic_habitat_mosquito.pdf" class="btn btn-primary">Visualize</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <a href="images/grafic_air_temperature.pdf"><img class="card-img-top" src="images/grafic_air_temperature.png" alt="Grafic Air Temperature by date"></a>
            <div class="card-body">
              <h5 class="card-title">Brazil GLOBE v-School</h5>
              <p class="card-text">Data Count Daily Averange Temperature - Jan 2015 to Jan 2018.</p>
              <a href="images/grafic_air_temperature.pdf" class="btn btn-primary">Visualize</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
           <a href="images/grafic_temperature_soil.pdf"> <img class="card-img-top" src="images/grafic_temperature_soil.png" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">Hills Home School</h5>
              <p class="card-text">Data count for 30 cm Sensor Soil Moisture - Jan 2015 to Jan 2018.</p>
              <a href="images/grafic_temperature_soil.pdf" class="btn btn-primary">Visualize</a>
            </div>
          </div>
        </div>
      </div>
    <hr>
	<div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-4">
			<h2 align="center">Year 2018</h2>
          	<hr>
          <div class="progress mt-4">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> WASTE TREATMENT </div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> MOSQUITOES</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> DISEASES HISTORIC</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> MORE THAN 60 YEARS</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> LESS THAN 10 YEARS OLD</div>
          </div>
		  </div>
    </div>
    <div class="col-md-4 pb-1 pb-md-0">
     	<div class="card"> 
        </div>
    </div>
	<div class="row text-center ">
      <div class="col-md-4">    
	</div>
    <hr>
     <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Marcos Nunes C. dos Santos</a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a> </li>
                <li class="btn-link"> <a></a>Bruno Rodrigues Peixoto Uzeda</li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Victor Antonio de S. da Silva</a> </li>
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
    
    <footer class="text-center" align="center">
      <div class="container" align="center">
        <div class="row" align="center">
          <div class="col-12" align="center">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
		 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
	<script src="js/slider_auto.js"></script>
	<script src="js/map.js"></script>
  </body>
</html>