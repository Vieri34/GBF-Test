<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="title" content="Titre du Site">
		<link href="css/base.css" rel="stylesheet" media="all" type="text/css">
		<link href="css/indexstyle.css" rel="stylesheet" media="all" type="text/css">
		<link href="css/lightbox.css" rel="stylesheet" media="all" type="text/css">
		<title>GBF | Site</title>
	</head>

	<body>
<!-- header -->
		<?php
			include 'php/header.php';
		?>
<!-- main -->
		<main>
<!-- hero -->
			<section>
			    <div class="parallax-hero">
					<img class="logoGBF" src="images/logogbf.png" alt="logo GBF">
			    </div>
			</section>
<!-- text 1 -->
			<section class="sectionImg">
				<a href="images/gran.png" data-lightbox="image_gran"><img src="images/gran.png" alt="Gran"></a>
			 	<div class="text">
			 		<h3>Granblue Fantasy</h3>
					<p>Once upon a time, the God of Creation created the world. A world filled with countless islands the world the skydwellers live in today.<br>
					Life was born on the islands, and it grew and prospered.<br>						
					But as time went on, they eventually began to rebel against their creator.<br>						
					Their rebellion tore the god into two.<br>						
					One god held the power of destruction and regeneration, while the other held that of creation. The latter, however, disappeared to the end of the skies.<br>
					The other god remained in the sky world, and so the sky realm has undergone a cycle of destruction and regeneration to the present day.<br>						
					While the God of Creation could create from nothing, it could not destroy. Thus, with every world it would create, stagnation would be each realm's only destiny.</p>
			 	</div>
			</section>
<!-- parallax 2 -->
			<section>
				<div class="parallax-two">
				  <h2  class="title1">Navigation</h2>
				</div>
			  </section>			  
<!-- images -->
			<section>
				<div class="IndexdDiv">
					<figure class="imgCool"><a href="characters.html"><img src="images/Test-Granblue-Fantasy-Versus-New-Game-Plus-01-scaled.jpg" alt="Characters"></a>
						<figcaption class="captionCool"><a href="characters.html">Characters</a></figcaption>
					</figure>
					<figure class="imgCool"><a href="classes.html"><img src="images/systembg.jpg" alt="Classes"></a>
						<figcaption class="captionCool"><a href="classes.html">Classes</a></figcaption>
					</figure>
					<figure class="imgCool"><a href="world.html"><img src="images/A1GKAs+6ykL.jpg" alt="World"></a>
						<figcaption class="captionCool"><a href="world.html">World</a></figcaption>
					</figure>
					<figure class="imgCool"><a href="projects.html"><img src="images/gbfv-online-lobby-promo-art.jpg" alt="Projects"></a>
						<figcaption class="captionCool"><a href="projects.html">Projects</a></figcaption>
					</figure>
				</div>
			</section>
<!-- parallax 3 -->
			<section>
			<div class="parallax-three">
				<h2  class="title1">Contacts</h2>
			</div>
			</section>
<!-- text 2 -->
			<section class="sectionImg">
				<div class="text">
					<h3>Granblue Fantasy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<a href="images/katalina.png" data-lightbox="image_katalina"><img src="images/katalina.png" alt="Katalina"></a>
		   </section>
		</main>
<!-- footer -->
		<?php
			include 'php/footer.php';
		?>
<!-- javascript -->
		<script type="text/javascript" src="js/jquery.js" ></script>
		<script type="text/javascript" src="js/lightbox.js" ></script>
		<script>
			lightbox.option({
			  'fitImagesInViewport': false,
			})
		</script>

	</body>
</html>