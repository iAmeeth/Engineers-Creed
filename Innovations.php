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
      
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

   
	<style>
		h1{
			    padding-top: 4%;
				padding-left: 7%;
				font-size: -webkit-xxx-large;
				
				color: whitesmoke;
		}
		p{
			padding-top: 4%;
			padding-left: 7%;
			color: white;
			font-size: x-large;
		}
	</style>
</head>

<body style="background-color:black">
	<div class="card">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/Engineering2.jpg">
    		</div>
    		<div class="card-content">
		      <span class="card-title activator grey-text text-darken-4">AI<i class="material-icons right">more_vert</i></span>
		      
	        </div>
	        <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4">AI<i class="material-icons right">close</i></span>
		      <p>Artificial Intelligence for translating facebook photos for the blind</p>
		</div>
  	</div>
	
	<h1>
		INNOVATIONS
	</h1>
	<p>
		From the world's largest semisubmersible vessel to a carbon neutral office buildin that might be the most sustainable workplace ever
	</p>
	
	<p>
		Virtual reality bike rides, Augmented Reality T-shirts
	</p>
	<p>
		Computer chip detects brain waves that could predict seizures
	</p>
	<p>
		Artificial Intelligence for translating facebook photos for the blind.
	</p>
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
      			height: 480,
      			transition: 1200,
      			interval: 3000
      		});
    	});
        
    </script>
</body>
</html>
