<!DOCTYPE html>
<html lang="en">
	 <head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta name="description" content="">
		 <meta name="author" content="">
		 <link rel="shortcut icon" href="images/tree_logo.jpg">
		 <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
		 <title>Trees</title>

		 <!-- Bootstrap core CSS -->
		 <link href="dist/css/bootstrap.css" rel="stylesheet">
		 <link href="dist/css/mystyles.css" rel="stylesheet"><!-- styles override-->


		 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		 <!--[if lt IE 9]>
		     <script src="../../assets/js/html5shiv.js"></script>
		     <script src="../../assets/js/respond.min.js"></script>
		 <![endif]-->
	 </head>

	 <body>

		 <div class="container"><!-- container for header and body -->

			 
			 <div class="navbar navbar-default"><!-- navbar/header section of the page -->
				 <div class="img_and_name"><!-- image name and hours -->
					 <div class="hidden-xs"><!-- hide the tree logo on mobile but tablets and larger will display -->
						 <img style="float:left;" src="images/tree_logo.jpg" alt="picture of tree">			
					 </div>
					 <h3 style="float:left;" class = "MaceysName">Macey's Christmas Tree Farm
					 </h3><br>     
					 <div class ="hours">Hours: Friday: 2 - 5 Saturday: 9 - 5 Sunday: 12 - 5
					 </div>
					 <br><br>      	
				 </div><!-- close image name and hours section-->
				 <div class="navbar-header"><!-- menu button for mobile device nag -->
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					 </button>
				 </div>	 <!-- close menu button -->
				 <div class="navbar-collapse collapse"><!-- nav links -->
					 <ul class="nav nav-justified">
						 <li><a href="index.php">Home</a></li>
						 <li><a href="about.php">About</a></li>
						 <li class="active"><a href="trees.php"><strong>Trees</strong></a></li>
						 <li><a href="directions.php">Directions</a></li>
						 <li><a href="contact.php">Contact</a></li>
						 <li><a href="troops.php">Troops</a></li>
					 </ul>
				 </div><!--close nav links-->
			 </div><!--close navbar/header section-->

			 <div class="jumbotron">
				 <h1>Types of Trees:</h1><br>
				 <p class="trees_list">
					 <strong>White Pine</strong><br><img src="images/whitepine_new.jpg" class="center-image" alt="picture of whitepine trees"/><br>
					 <strong>Blue Spruce</strong><br><img src="images/blue_spruce_new.jpg" class="center-image" alt="picture of blue spruce trees"/><br>
					 <strong>Leyland Cypress</strong><br><img src="images/leyland_cypress_new.jpg" class="center-image" alt="picture of leyland cypress trees"/><br>
				 </p>
			 </div>

		</div> <!-- end of container area -->

		<hr>
		<footer>
			<p>&copy; Macey's Christmas Tree Farm 2013</p>
		</footer>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
	  </body>
</html>
