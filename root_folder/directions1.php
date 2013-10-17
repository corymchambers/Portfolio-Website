<!DOCTYPE html>
<html lang="en">
	 <head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta name="description" content="">
		 <meta name="author" content="Cory Chambers">
		 <link rel="shortcut icon" href="images/cmcicon1.ico">
		 <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>	
		 <title>Cory M Chambers</title>

		 <!-- Bootstrap core CSS -->
		 <link href="dist/css/bootstrap.css" rel="stylesheet">
		 <link href="dist/css/mystyles.css" rel="stylesheet"><!-- styles override-->

		 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		 <!--[if lt IE 9]>
			 <script src="../../assets/js/html5shiv.js"></script>
			 <script src="../../assets/js/respond.min.js"></script>
		 <![endif]-->
		     <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }

      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: new google.maps.LatLng(41.850033, -87.6500523)
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directions-panel'));

  var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = "1325 Annapolis Rd. Odenton, MD 21113";
  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
     </head>

     <body>


         <!-- Main area-->
         <div class="jumbotron">
			 
			 
			 
			 <div id="control">
      <strong>Start:</strong>
	  <input id="start" type="textbox" value="Starting Address">

	  <input type="button" value="Submit" onclick="calcRoute()">
     
    </div>
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>
   	     </div><!--end Main Area-->

		 <hr>
		 <footer>
			 <p>&copy; CoryMChambers.com 2013</p>
		 </footer>

		 <!-- Bootstrap core JavaScript
		 ================================================== -->
		 <!-- Placed at the end of the document so the pages load faster -->
		 <script src="assets/js/jquery.js"></script>
		 <script src="dist/js/bootstrap.min.js"></script>
    
	 </body>

</html>
