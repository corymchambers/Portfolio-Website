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
						 <li><a href="resume.php">Resume</a></li>
						 <li><a href="resources.php">Resources</a></li>
					 </ul>
				 </div>
			 </div><!-- end nav-bar -->

			 <!-- Main area-->
			 <div class="jumbotron">
				 <h1>Shopping Cart</h1><br>
				 <p>This is a shopping cart that demonstrates HTML5 properties such as Drag and Drop and Sliders. The slider will gray out products not in price range when it is moved. You can drag and drop an item into the area and the item will be added to your cart. The technology behind this comes from a few JavaScripts I found online. I had to edit one of the scripts to provide a button that would clear the cart.
                 </p>
                 
                         <div class="row"> <!-- row that is used to break down section into columns -->
							 <div class="col-lg-3"><!-- 25% of the left part of the screen dedicated to slider and cart -->
								 <div class="widget"><!-- holder for the slider -->
									 <h2>Price Slider</h2>
									 <form name="form1" method="post" action="">
										 <p>
											 <input id="slider" type="range" min="50" max="400" step="25" value="400" onchange="printValue('slider','rangeValue')" />
											 <input id="rangeValue" type="text" size="2"/>
										 </p>
									 </form>
								 </div><!-- end of slider -->
								 <div id="favorites" class="widget"><!-- section that holds selections aka cart or favorites -->
									 <h2>Favorites</h2>
									 <p>Drag Products Here</p>
									 <ul id="faves"></ul>
								 </div><!-- end of cart -->
								 <button onclick="clearAll()">Clear All</button><!-- button that clears cart -->
							 </div><!-- end of col-lg-3 section -->
								
							 <div class="col-lg-9"> <!-- Products for sale --> 
								 <article id="gallery" class="post">
									 <div id="item1" style="float:left;margin:10px;" class="items" draggable="true"><img src="images/cart_images/coat.jpg" width="190" height="190" alt="Arrows">
										 <p>Coat - <span class="price">$250</span></p>
									 </div>
									 <div id="item2" style="float:left;margin:10px;" class="items" draggable="true"> <img src="images/cart_images/hat.jpg" width="190" height="190" alt="Eye">
										 <p>Hat - <span class="price">$400</span></p>
									 </div>
									 <div id="item3" style="float:left;margin:10px;" class="items" draggable="true"> <img src="images/cart_images/pants.jpg" width="190" height="190" alt="Graffiti">
										<p>Pants - <span class="price">$75</span></p>
									 </div> 
									 <div id="item4" style="float:left;margin:10px;;" class="items" draggable="true"><img src="images/cart_images/shirt.jpg" width="190" height="190" alt="Orange Star">
										 <p>Shirt - <span class="price">$150</span></p>
									 </div>
									 <div id="item5" style="float:left;margin:10px;" class="items" draggable="true"><img src="images/cart_images/shoe.jpg" width="190" height="190" alt="Patterns">
										 <p>Shoe - <span class="price">$200</span></p>
									 </div>
									 <div id="item6" style="float:left;margin:10px;" class="items" draggable="true"> <img src="images/cart_images/umbrella.jpg" width="190" height="190" alt="Rabbigt">
										 <p>Umbrella - <span class="price">$350</span></p>
									 </div> 
								 </article>
							 </div><!-- end of products for sale --> 
                         </div> <!-- end of row -->
                 
                
			 </div><!--end Jumbo -->
		 </div>
		 <hr>
		 <footer>
			 <p>&copy; CoryMChambers.com 2013</p>
		 </footer>

		 <!-- Bootstrap core JavaScript
		 ================================================== -->
		 <!-- Placed at the end of the document so the pages load faster -->
		 <script src="assets/js/jquery.js"></script>
		 <script src="dist/js/bootstrap.min.js"></script>
         
         <!-- JavaScript files for the dragndrop, slider, and cart -->
         <script type="text/javascript" src="js/jquery.ndd.js"></script>
		 <script type="text/javascript" src="js/dragdrop.js"></script>
         <script type="text/javascript" src="js/slider_favorites.js"></script>

    
	 </body>

</html>
