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
		 <link href="dist/css/maps.css" rel="stylesheet"><!-- maps styles -->


		 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		 <!--[if lt IE 9]>
			 <script src="../../assets/js/html5shiv.js"></script>
			 <script src="../../assets/js/respond.min.js"></script>
		 <![endif]-->
		 
							
		 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		 <script src="js/directions.js"></script>
						
		 
		 
     </head>

     <body>

		 <div class="container"> <!-- container-->

			 <!-- navbar -->
			 <div class="navbar navbar-default">
				 <div class="img_and_name">
					 <div class="hidden-xs">
						 <img style="float:left;" src="images/cory.jpg" alt="picture of Cory">			
					 </div>
					 
					 
					 <h3 style="float:left; margin-left:10px;" class = "CorysName">Cory M Chambers <br> <span class="cory_title">Web Designer & Developer</span></h3>   
					 <br><br>
				 </div>
		
				 <div class="navbar-header"><!-- collapse button -->
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					 </button>
				 </div>
			
				 <div class="navbar-collapse collapse">
					 <ul class="nav nav-justified">
						 <li><a href="index.php">Home</a></li>
						 <li><a href="html.php">HTML5/CSS3</a></li>
						 <li><a href="mywork.php">Examples</a></li>
						 <li><a href="intern.php">Intern</a></li>
						 <li class="active"><a href="resume.php">Resume</a></li>
						 <li><a href="resources.php">Resources</a></li>
					 </ul>
				 </div>
			 </div><!-- end nav-bar -->

			 <!-- Main area-->
			 <div class="jumbotron">
				
				<div class="hidden-lg">
					<h1>Directions to Odenton library</h1><br>
					<h2>For Mobile and Tablet browsers</h2><br>
					<p>To get directions to the Odenton Library click <a href="https://maps.google.com/?q=1325+Annapolis+Rd,+Odenton,+MD+21113" target="_blank">here</a> to open the Odenton Library in Google Maps and then click to get directions.<br><br>
				</div>
				
				<div class="visible-lg">
					<h1>Directions to the Odenton library</h1>
					<h2>For Desktop Browsers</h2>
					<p>This is an application that will allow you to enter an address and get directions to the Odenton Library. The code comes the Google Maps API and is written and customized in JavaScript. This would be useful for a business that would like to allow visitors to get custom made directions to the business. Test it out by entering an address and selecting the "GO" button.
					</p>
					<h4><input id="start" type="textbox" value="Starting Address">
					<input type="button" value="GO" onclick="calcRoute()">
					<br><br>
				
					<div class="map_section" style="width:1000px;height:800px;" ><!-- section that holds the map and directions on the desktop browser -->
				
						 <div class="directions-section"><!-- section that displays text directions -->
							 <div id="directions-panel"></div>
						 </div><!-- end of directions text section -->
					
						 <div id="map-canvas"></div><!-- graphical map -->
					</div><!-- end of map_section -->
				 </div><!-- end of desktop browser visible section-->
				 
			 </div><!--end Jumbo -->
		 </div><!-- end container -->
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
