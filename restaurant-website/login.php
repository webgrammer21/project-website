<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Website coded by Patricia Georgescu using the design from George Olaru on Behance">
		<meta name="description" content="Template website for a restaurant business. Created using the design of George Olaru on Behance.">
		<meta name="keywords" content="mock-up, website, template, restaurant, design, web development">
		<title> La Rosa </title>
		<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<header id="go_to_top">
			<div class="gradient">
				<div class="container">
					<h2 id="logo"><a href="index.html"> SIGMA CAFE </a></h2>
					<img id="open_menu" class="menu_icon show" src="../assets/img/menu.png" >
					<img id="close_menu" class="menu_icon" src="../assets/img/x.png" >
					<nav>
						<a href="#go_to_top" class="menu_link active"> Welcome </a>
						<a href="#about" class="menu_link"> About </a>
						<a href="#menu" class="menu_link"> Menu </a>
						<a href="#info" class="menu_link"> Contact </a>
						<a href="#login" class="menu_link">Login</a>
					</nav>
				</div>
			</div>
			<div class="welcome_container">
				<h1 class="highlight">Welcome</h1>
				<h1 class="brand"> The Sigma Cafe </h1>
				<span class="symbol"> &#10059; </span>
				<h2> Ready to be opened </h2>
			</div>
			<div>

			</div>
		</header>
		
		<main>
			<section id="about" class="breakpoint">
				<div class="content">
					<h1 class="highlight"> Discover </h1>
					<h1 class="topic"> our story </h1>
					<p class="symbol"> &#10059; </p>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisl augue, pulvinar a arcu id, porttitor consequat risus. Vivamus congue lacus non sem eleifend vestibulum. Morbi pulvinar ligula vitae ornare faucibus. </p>
					<h2><a href="#"> About us </a></h2>
				</div>
				<div class="img_container">
					<img src="./assets/img/tomatoes.jpg" title="Stuffed tomatoes" alt="Stuffed tomatoes"> 
				</div>
			</section>
			
			<section class="divider"> 
					<h1 class="highlight"> Tasteful </h1>
					<h1 class="topic"> recipes </h1>
			</section>
			
			<section id="menu" class="breakpoint"> 
				<div class="img_container">
					<img class="align_end" src="./assets/img/menu1.jpg" title="Fresh salad" alt="Fresh salad image"> 
					<img class="align_end" src="./assets/img/menu2.jpg" title="Fresh fancy salad" alt="Fresh fancy salad image">
					<img class="align_start" src="./assets/img/menu3.jpg" title="Mushroom dish with legumes" alt="Mushroom dish with legumes image">
					<img class="align_start" src="./assets/img/menu4.jpg" title="Dessert with lemon" alt="Dessert with lemon image">
				</div>
				<div class="content">
					<h1 class="highlight"> Discover </h1>
					<h1 class="topic"> our menu </h1>
					<p class="symbol"> &#10059; </p>
					<p> In consectetur sit amet lectus vitae blandit. Aenean eget augue eleifend, ultricies neque consequat, tincidunt elit. In hac habitasse platea dictumst. Phasellus interdum libero ut libero hendrerit. </p>
					<h2><a href="#"> View the full menu </a></h2>
				</div>
			</section>
			
			<section class="divider">
					<h1 class="highlight"> The perfect </h1>
					<h1 class="topic"> blend </h1>			
			</section>
			
			<section id="reservation" class="breakpoint"> 
				<div class="content">
					<h1 class="highlight"> Culinary </h1>
					<h1 class="topic"> delight </h1>
					<p class="symbol"> &#10059; </p>
					<p>  Vestibulum mollis tempus eros eu egestas. Vivamus congue lacus non sem eleifend vestibulum. Morbi pulvinar ligula vitae ornare faucibus. Nulla facilisi. </p>
					<h2><a href="#"> Make a reservation </a></h2>
				</div>
				<div class="img_container">
					<img src="./assets/img/meat.jpg" title="Meat and cheese" alt="Sandwiches image"> 
					<img src="./assets/img/sandwiches.jpg" title="Sandwiches" alt="Sandwiches image">
				</div>			
			</section>
						
		</main>
		
		<footer>
			<div id="top"> 
				<a href="#go_to_top" class="menu_link">
					<p id="arrow"> &lsaquo; </p>
					<p>  Top </p>
				</a>
			</div>
			<div id="info" class="breakpoint">
				<div id="locations">
					<h2> Locations </h2>
					<div  class="address_container">
						<div class="address1">
							<p> 376 Van Brunt St </p>
							<p> Brooklyn, NY — 11231 </p>
						</div>
						<div class="address2">
							<p> 25 Union Square West </p>
							<p> New York, NY — 10003 </p>
						</div>
					</div>
				</div>
				
				<div id="hours">
					<h2> Hours </h2>
					<div class="open_container">
						<div class="open">
							<p> Monday - Thursday </p>
							<p> 5:30pm - 10:00pm </p>
						</div>	
						<div class="open">
							<p> Friday & Saturday </p>
							<p> 5:30pm - 11:00pm </p>
						</div>
						<div class="open">
							<p> Available for private </p>
							<p> events on Sunday </p>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright_container">
				<div id="copyright">
						<div> 
							<p> Copyright 2014 &copy; Handcrafted with love by <a href="#">PixelGrade </a> Team </p>
							<p> Coded with love by Patricia Georgescu 2018 &copy; </p>
						</div>
						<div>
							<p> Permissions and Copyright <span class="dot"> &middot; </span> Contact The Team </p>
						</div>			
				</div>
			</div>	
		</footer>
		
		<script src="./assets/js/scripts.js"> </script>
	</body>
</html>