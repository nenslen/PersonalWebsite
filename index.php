<!DOCTYPE html>
<?php require 'functions.php'; ?>
<?php
	// Check for apple devices
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	$appleDevice = false;
	if(stripos($userAgent, 'Chrome') == false && stripos($userAgent, 'Safari') == true) {
		$appleDevice = true;
    }
?>
<html>
<head>
	<?php drawHead('Nicolas Enslen - Programmer, Web Developer', ''); ?>
	<meta name="description" content="I love programming! Making cool websites, applications, and games is fun, and it's what I like to do. I'm currently in my final semester of computer science at the University of Lethbridge.">

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src='js/home.js'></script>
</head>
<body>
	<?php drawHeader('large'); ?>
	
	
	<div class='wrapper'>
		
		<!-- About -->
		<div class='section-wrapper'>
			<div class="section" id="about">
				<h1 class="section-header" id="about-header">About</h1>
				<div class="section-content grid grid-2-2-1" id="about-content">
					<div id="about-image-outer">
						<div id='about-image'>
							<img src='media/self-image.jpg' />
						</div>
					</div>
					<div id='about-description'>
						<div id="about-description-inner">
							<p class="text-align-left">I love programming! Making cool websites, applications, and games is fun, and it's what I like to do.</p>
							<p class="text-align-left">This website serves as my personal portfolio. Below you can find projects, demos, and contact information.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End About -->
		


		<!-- Projects -->
		<div class='section-wrapper' id="projects-wrapper">
			<div class="section" id="projects">
				<h1 class="section-header" id="projects-header">Projects</h1>
				<div class="section-content" id="projects-content">
					<p id="projects-description">This is a sample of some of my favorite projects that I've made. You can see a larger list of my projects on <a href='https://github.com/nenslen' target='_blank'>GitHub</a>.</p>
		
					<div class="grid grid-3-2-1">

						<!-- Digit Recognition -->
						<div class="card-outer">
							<div class="card">
							<?php if($appleDevice) : ?>
								<div class="card-media" id="neuralnetwork.png">
									<img src="media/neuralnetwork.png"></img>
								</div>
							<?php else : ?>
								<div class="card-media" id="neuralnetwork.webm">
									<video controls autoplay loop muted>
										<source src="media/neuralnetwork.webm" type="video/webm">
									</video>
								</div>
							<?php endif; ?>

								<div class="card-title">
									Digit Recognition
								</div>

								<input type="checkbox" class="read-more-state" id="item-1" />
								<label for="item-1" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">A neural network made from scratch that can recognize handwritten digits. In its current state, it's about 80% accurate when it looks at numbers I draw, and was 90% accurate on the data it was trained with. This is far from perfect (the record is 99.79% accuracy), but I wanted to show it now because I learned so much and had a lot of fun while working on it! I am currently learning the necessary math to bring the accuracy up to ~99%, and will update once that is achieved.</p>
										<!--<p><a href='' target='_blank'>Full Video on Youtube</a></p>-->
										<p class="text-align-left"><a href='https://github.com/nenslen/digit-recognition' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='projects/demos/digit-recognition/'>Demo</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Digit Recognition -->



						<!-- Block Puzzle -->
						<div class="card-outer">
							<div class="card">
								<?php if($appleDevice) : ?>
									<div class="card-media" id="blockpuzzle.png">
										<img src="media/blockpuzzle.png"></img>
									</div>
								<?php else : ?>
									<div class="card-media" id="blockpuzzle.webm">
										<video controls autoplay loop muted>
											<source src="media/blockpuzzle.webm" type="video/webm">
										</video>
									</div>
								<?php endif; ?>

								<div class="card-title">
									Block Puzzle
								</div>

								<input type="checkbox" class="read-more-state" id="item-2" />
								<label for="item-2" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This game is a re-creation of a game on the Google Playstore called 'Block Puzzle'. You place blocks onto the grid, and when a column or row is full, those blocks disappear. While making this game I learned more about how java handles dynamic layouts and events. I'm also currently making an online multiplayer version of this game that uses NodeJS to host the lobbies.</p>
										<p class="text-align-left"><a href='https://www.youtube.com/watch?v=EL6INBXauik' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/BlockPuzzle' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/BlockPuzzle/releases/download/1.0/Block_Puzzle.jar'>Download .jar</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Block Puzzle -->



						<!-- Connect Four -->
						<div class="card-outer">
							<div class="card">
								<?php if($appleDevice) : ?>
									<div class="card-media" id="connect-four.png">
										<img src="media/connect-four.png"></img>
									</div>
								<?php else : ?>
									<div class="card-media" id="connect-four.webm">
										<video controls autoplay loop muted>
											<source src="media/connect-four.webm" type="video/webm">
										</video>
									</div>
								<?php endif; ?>

								<div class="card-title">
									Connect Four AI
								</div>

								<input type="checkbox" class="read-more-state" id="item-9" />
								<label for="item-9" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">Connect Four, featuring an AI opponent that uses some neat methods to play. This project started as an assignment question for a university class and quickly became one of my favorite projects so far! While working on this project I gained a much deeper understanding of how to precisely define a problem and then solve it using smart search algorithms. 
										<p class="text-align-left"><a href='https://github.com/nenslen/connect-four' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='projects/demos/connect-four/'>Demo</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Connect Four -->



						<!-- Personal Website -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="site.png">
									<img src="media/site.png"></img>
								</div>

								<div class="card-title">
									nicolasenslen.com
								</div>

								<input type="checkbox" class="read-more-state" id="item-4" />
								<label for="item-4" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This website has seen many iterations and improvements since I started working on it over 2 years ago. Every time I learn a new tool or technique, I see if I can find a way to apply it to my website. This allows me to improve both my skills and website through hands-on experimentation.</p>
										<p class="text-align-left"><a href='https://github.com/nenslen/PersonalWebsite' target='_blank'>Project on GitHub</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Personal Website -->



						<!-- Computer Site -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="computersite.png">
									<img src="media/computersite.png"></img>
								</div>

								<div class="card-title">
									Parts Database
								</div>

								<input type="checkbox" class="read-more-state" id="item-7" />
								<label for="item-7" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This college project accesses and displays information stored in a database. The interface feels dated considering all that I've learned since I created it, but the main focus of this project was to utilize technologies such as PHP, Angular, and MySQL.</p>
										<p class="text-align-left"><a href='https://github.com/nenslen/computer-site' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='projects/demos/computer-site/'>Demo</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Computer Site -->



						<!-- Ultimate Tic Tac Toe -->
						<div class="card-outer">
							<div class="card">
								<?php if($appleDevice) : ?>
									<div class="card-media" id="tictactoe.png">
										<img src="media/tictactoe.png"></img>
									</div>
								<?php else : ?>
									<div class="card-media" id="tictactoe.webm">
										<video controls autoplay loop muted>
											<source src="media/tictactoe.webm" type="video/webm">
										</video>
									</div>
								<?php endif; ?>

								<div class="card-title">
									Ultimate Tic Tac Toe
								</div>

								<input type="checkbox" class="read-more-state" id="item-8" />
								<label for="item-8" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">It's like regular tic tac toe, but in order to win you need to win 3 small games in a row. While working on this project I specifically learned more about jQuery and how to handle inputs from a large amount of dynamic elements.</p>
										<p class="text-align-left"><a href='https://youtu.be/6TgGcMFGhXo' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/ultimate-tic-tac-toe' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='projects/demos/ultimate-tic-tac-toe/'>Demo</a></p>
									</div>
								</div>
							</div>
						</div><!-- end Ultimate Tic Tac Toe -->
					</div><!-- End grid -->
				</div><!-- End section content -->
			</div><!-- End section -->
		</div><!-- End section wrapper -->



		<!-- Knowledge --
		<div class='section-wrapper'>
			<div class="section" id="knowledge">
				<h1 class="section-header" id="knowledge-header">Knowledge</h1>
				<div class="section-content" id="knowledge-content">
					<div class='knowledge-square'><div class='knowledge-content'>HTML</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>CSS/SCSS</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>JavaScript</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>PHP</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>AngularJS</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>C++</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>C#</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>Java</div></div>
					<div class='knowledge-square'><div class='knowledge-content'>SQL</div></div>
				</div>
			</div><!-- End section --
		</div><!-- End Knowledge -->
		


		<!-- Education -->
		<div class='section-wrapper'>
			<div class="section" id="education">
				<h1 class="section-header" id="education-header">Education</h1>
				<div class="section-content" id="education-content">
		
					<div class="grid grid-2-2-1">

						<!-- Lethbridge College -->
						<div class="card-outer equal-height">
							<div class="card">
								<div class="card-media no-zoom">
									<img src="media/college-icon.png"></img>
								</div>
								<div class="card-title">Lethbridge College</div>
								<div class="card-description">
									<p>Diploma in Computer Information Technology (2016)</p>
								</div>
							</div>
						</div><!-- End Lethbridge College -->
						
						<!-- University of Lethbridge -->
						<div class="card-outer equal-height">
							<div class="card">
								<div class="card-media no-zoom">
									<img src="media/university-icon.png"></img>
								</div>
								<div class="card-title">University of Lethbridge</div>
								<div class="card-description">
									<p>Bachelor of Computer Science (2018)</p>
								</div>
							</div>
						</div><!-- End University of Lethbridge -->

					</div><!-- End grid -->
				</div><!-- End section content -->
			</div><!-- End section -->
		</div><!-- End Education -->
		


		<!-- Contact -->
		<div class='section-wrapper'>
			<div class="section" id="contact">
				<h1 class="section-header" id="contact-header">Contact</h1>
				<div class="section-content" id="contact-content">
			
					<div class="grid grid-3-3-1">
						<div>
							<a href='mailto:nicolas.enslen@gmail.com'><i class='fa fa-envelope fa-5x' aria-hidden='true'></i></a>
							<p><a href='mailto:nicolas.enslen@gmail.com'>nicolas.enslen@gmail.com</a></p>
						</div>
						
						<div>
							<a href='https://github.com/nenslen' target='_blank'><i class='fa fa-github fa-5x' aria-hidden='true'></i></a>
							<p><a href='https://github.com/nenslen' target='_blank'>github</a></p>
						</div>
						
						<div>
							<a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'><i class='fa fa-linkedin fa-5x' aria-hidden='true'></i></a>
							<p><a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'>linkedin</a></p>
						</div>
					</div><!-- End grid -->
				</div><!-- End section content -->
			</div><!-- End section -->
		</div><!-- End Contact -->
		

		<?php drawModal(); ?>
		<?php drawFooter(); ?>

	</div><!-- wrapper -->
</body>
</html>
