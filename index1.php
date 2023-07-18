<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Kumar Paradise</title>

	<meta name="description" Content="">

	<meta name="keywords" Content="">

	<!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> -->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<!-- <script src="assets/js/plugins.js" type="text/javascript"></script> -->
	<!-- <script src="assets/js/app88a7.js?v=13821" type="text/javascript"></script> -->
	<link rel="stylesheet" href="assets/css/style.css?v=16124">
	<!-- <link rel="stylesheet" href="assets/css/mobile-desktop.css"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins:wght@600&display=swap" rel="stylesheet">


	<style type="text/css">
		

		.bg {
		    height: 100vh;
/*		    background-image: url('https://assets.codepen.io/2621168/background.jpg');*/
		    background-image: url('http://127.0.0.1/KumarParadise/images/Overview/GreenGirl.jpg');
		    background-size: cover;
		}

		svg {
		    width: 1em;
		    margin: 2em auto;
		    display: block;
		    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
		    position: relative;
		    left: 700px;
		}

		.container {
		    position: relative;
		    top: 0;
		    height: 100vh;
		    width: 100%;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    place-content: center;
		}

		.content {
		    color: white;
		    text-align: center;
		    position: relative;
/*		    top:400px;*/
/*		    left: 100px;*/

		    }
		.content  h1 {
		        font-size: 4rem;
		        margin-bottom: 0;
		        font-weight: normal;
		        position: relative;
/*		        left: 700px;*/
		        color: #000;
		    }

		  .content  p {
		        font-size: 1.3rem;
		        position: relative;
/*		        left: 700px;*/
		        color: #000;
		    }

		    .text-reveal {
		        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
		        transition: all 1.5s;
		        transform: translateY(-3em);
		    }
		}


		.local {
		    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
		    opacity: 0;
		    transform: translateY(2em);
		}

	</style>	

</head>
<body >

	<script>
		// init controller
		var controller = new ScrollMagic.Controller();
	</script>
	<style type="text/css">
		.digit {
			opacity: 0;
			-webkit-transform: translateX(-40px);
				 -moz-transform: translateX(-40px);
					-ms-transform: translateX(-40px);
					 -o-transform: translateX(-40px);
							transform: translateX(-40px);
			-webkit-transition: all 0.6s ease-out;
				 -moz-transition: all 0.6s ease-out;
					-ms-transition: all 0.6s ease-out;
					 -o-transition: all 0.6s ease-out;
							transition: all 0.6s ease-out;
		}
		.digit.visible {
			opacity: 1;
			-webkit-transform: none;
				 -moz-transform: none;
					-ms-transform: none;
					 -o-transform: none;
							transform: none;
		}
		.digit:nth-child(2) {
			margin-top: 50px;
		}
		.digit:nth-child(3) {
			margin-top: 100px;
		}
		.digit:nth-child(4) {
			margin-top: 150px;
		}
		.digit:nth-child(5) {
			margin-top: 200px;
		}
	</style>
	<div class="spacer s2"></div>
	<div class="spacer s0"></div>
	<div class="box2	 white">
		<p>Multiple elements can be looped over and animated as they enter the viewport.</p>
		<a href="#" class="viewsource">view source</a>
	</div>
	<div class="spacer s0"></div>
	<div id="reveal-elements">
		<div class="box1 digit blue"><p>1</p></div>
		<div class="box1 digit turqoise"><p>2</p></div>
		<div class="box1 digit red"><p>3</p></div>
		<div class="box1 digit green"><p>4</p></div>
		<div class="box1 digit orange"><p>5</p></div>
	</div>
	<div class="spacer s2"></div>
	<script>
			// build scenes
			var revealElements = document.getElementsByClassName("digit");
			for (var i=0; i<revealElements.length; i++) { // create a scene for each element
				new ScrollMagic.Scene({
									triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
									offset: 50,												 // start a little later
									triggerHook: 0.9,
								})
								.setClassToggle(revealElements[i], "visible") // add class toggle
								.addIndicators({name: "digit " + (i+1) }) // add indicators (requires plugin)
								.addTo(controller);
			}
	</script>

	<!-- <div class="overlay">
        <img src="images/developerlogo.png" alt="" class="logoLoading" style="width:200px">
   </div> -->

   <!-- <header id="header" class=""> -->
   

<!-- <main> -->
	<!--home Section -->
	<!-- <section id="home" class="home"> -->
			<div class="bg"></div>

			<div class="container">
			    <div class="content" >
			        <div class="content-inner">
			            <h1 class="text-reveal">BEHOLD YOUR VERY</h1>
			            <h1 class="text-reveal">OWN PARADISE!</h1>
			            <!-- <p class="text-reveal">Spend 14 nights in the world's most luxurious locations.</p> -->
			        </div>


			    </div>
				<!-- </div> -->
			</div>



			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

			<script>
				gsap.from('.text-reveal',{opacity:0,duration:5,y:-100,ease: Power2.easeOut})
			</script>
			

			<script>

			let tl = gsap.timeline({Defaults: { Easing: Expo.EaseOut}});

			       tl.from('.bg', { scale: 0.6, duration: 2, opacity: 0, ease: Expo.easeOut, delay: 0.2})
			         .to('.text-reveal', { clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', x:0, stagger: .3, duration: 1}, "-=2.9")
			         // .to('.text-reveal', { clipPath: 'polygon(0 0, 100% 0, 100% 0, 0 0)', y: -200, duration: .2, delay: .5})
			         .to('.text-reveal', { clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', stagger: .3, duration: .3, delay: .5})
			         
			         .to('svg', { clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', y: -150 })
			         .to('.local', { clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',y: 0, stagger: .3, opacity: 1, duration: 1}, "-=1.4" )

			</script>

			


		
			
	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/intlTelInput.js" type="text/javascript"></script>
	<script src="assets/js/jquery.validate.js" type="text/javascript"></script>
	<script src="assets/js/form_validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/form.css?v=27181">
	<link rel="stylesheet" href="assets/css/intlTelInput.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3. .11.4/gsop.min.js"></script>

</body>
</html>
<?php 
// session_destroy();
?>

