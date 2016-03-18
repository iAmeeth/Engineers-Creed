<!DOCTYPE html>
<html>
<head>
	<title>Engineers Creed</title>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<!--Navigation Bar-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper blue-grey darken-3">
				<!--<a href="#start" class="brand-logo center">Engineers Creed</a>-->
				<a href="http://engineerscreed.azurewebsites.net/" class="brand-logo center">Engineers Creed</a>	
				
		

				<a data-activates="mobile-demo" style="cursor: pointer;" class="button-collapse right"> 
					<i class="material-icons">menu</i> 
				</a>

				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#Quotes">Quotes</a> </li>
					<li><a href="#Innovations" >Innovations</a></li>
					<li><a href="#Humour">Humour</a></li>
					<li><a href="#AboutUs">About Us</a></li>		
				</ul>

				<ul id="mobile-demo" class="side-nav">
					<li><a href="#Quotes" class="flow-text">Quotes</a> </li>
					<li><a href="#Innovations" class="flow-text">Innovations</a></li>
					<li><a href="#Humor" class="flow-text">Humor</a></li>
					<li><a href="#AboutUs" class="flow-text">About Us</a></li>		
				</ul>
			</div>
		</nav>	
	</div>
	

	<!--This is the actual content of the Page-->

	<!--Slider to display quick links-->
	<div id="start" class="slider scrollspy z-depth-4" style="background-color: black;">
		<ul class="slides">
			<li>
				<img src="images/jobs.jpg" style="opacity: 1.0" class="responsive-img">
				<div class="caption left-align">
				</div>
			</li>
			
			<li>
				<img src="images/banner1.png">
				<div class="caption right-align" style="opacity: 1.0">
				</div>
			</li>

			<li>
				<img src="images/banner2.png">
				<div class="caption right-align" style="opacity: 1.0">
									</div>
			</li>

			<li>
				<img src="images/plan.png">
				<div class="caption left-align" style="opacity: 1.0">
					
				</div>
			</li>

			<li>
				<img src="images/banner3.png">
				<div class="caption right-align" style="opacity: 1.0">
					
					
				</div>
			</li>

			<li>
				<img src="images/ph.png">
				<div class="caption right-align" style="opacity: 1.0">
					<font color="black"><h3>Patience And Hardwork</h3><h5>The keys to success</h5>
					</font>
				</div>
			</li>

		</ul>
	</div>

	<!--Section 1-->
	<div id="Quotes" class="parallax-container scrollspy" style="height: 400px;">
		<div class="parallax"><img src="images/Engineering3.jpg" style="opacity: 0.4;"></div>
		<div class="row container">
			<h2 class="header">Quotes</h2>
      		<p class="black-text"> A wide collection of Quotes on and about Engineering	</p>
		
			<a class="waves-effect waves-light btn-large center blue-grey darken-3" href="Quotes.php">View</a>
		</div>
	</div>


	<!--Section 2-->
	<div id="Innovations" class="section scrollspy blue-grey lighten-2" style="height: 400px;">
		<div class="row container">
			<h2 class="header">Innovations</h2>
      		<p class="black-text"> A peek into the amazing world of Engineering	</p>
		
			<a class="waves-effect waves-light btn-large center blue-grey darken-3" href="Innovations.php">View</a>
		</div>
	</div>


	<!--Section 3-->
	<div id="Humour" class="parallax-container scrollspy" style="height: 500px;">
		<div class="parallax"><img src="images/Engineering4.jpg" style="opacity: 0.4;"></div>
		<div class="row container">
			<h2 class="header">Humour</h2>
      		<p class="black-text"> Laughter is the best medicine	</p>
		
			<a class="waves-effect waves-light btn-large center blue-grey darken-3" href="Humour.php">View</a>
		</div>
	</div>

	<!--Section 4-->
	<div id="AboutUs" class="section blue-grey lighten-2 scrollspy" style="height: 500px;">
		<div class="row container">
			<h2 class="header">About Us</h2>
      		<p class="black-text">
            A comprehensive collection of Engineering news, jokes ,quotes and many more.<br>
            "As engineers, we were going to be in a position to change the world - not just study it."<br> -  Henry Petroski<br><br>
            <strong>Developer : Ameeth Kanawaday</strong>
              
            </p>
            <div class="col s2">
                        <img src="images/ameeth.jpg" alt="" class="circle responsive-img" style="pointer-events: none;">
              </div>
		</div>
	</div>




	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <!--Initialization for the slider-->
    <script type="text/javascript">
		
    	$(document).ready(function(){
    		//initialize the scrollSpy Effect
    		$('.scrollspy').scrollSpy();
			
			//Initialize the side navigation bar
    		$('.button-collapse').sideNav();    	

    	});

    	$(document).ready(function(){
    		//initialize the Parallax effect
    		$('.parallax').parallax();

    		//Initialize the slider
      		$('.slider').slider({
      			full_width: true,
      			indicators: true,
      			height: 600,
      			transition: 1200,
      			interval: 3000
      		});
    	});
        
    </script>
</body>

</html>
