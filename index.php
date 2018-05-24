<!DOCTYPE html>
<?php require 'functions.php'; ?>
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

						<!-- Neural Network -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="neuralnetwork.webm">
									<video controls autoplay loop muted>
										<source src="media/neuralnetwork.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Digit Recognition (JS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-1" />
								<label for="item-1" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">A neural network made from scratch that can recognize handwritten digits. This is my most difficult, but most rewarding project that I have undertaken so far! I had a lot of fun getting introduced to the topic of artificial intelligence while working on it!</p>
										<!--<p><a href='' target='_blank'>Full Video on Youtube</a></p>-->
										<p class="text-align-left"><a href='https://github.com/nenslen/digit-recognition' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='projects/demos/digit-recognition/'>Demo</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Neural Network -->



						<!-- Block Puzzle -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="blockpuzzle.webm">
									<video controls autoplay loop muted>
										<source src="media/blockpuzzle.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Block Puzzle (Java)
								</div>

								<input type="checkbox" class="read-more-state" id="item-2" />
								<label for="item-2" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This game is a re-creation of a game on the Google Playstore called 'Block Puzzle'. You place blocks onto the grid, and when a column or row is full, those blocks disappear. While making this game I learned more about how java handles dynamic layouts and events. I'm also currently making an online multiplayer version of this game that uses a NodeJS server to host the lobbies.</p>
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
								<div class="card-media" id="connect-four.webm">
									<video controls autoplay loop muted>
										<source src="media/connect-four.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Connect 4 AI (JS)
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
						<!-- end Neural Network -->



						<!-- Snake -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="snake.webm">
									<video controls autoplay loop muted>
										<source src="media/snake.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Snake (Java)
								</div>

								<input type="checkbox" class="read-more-state" id="item-3" />
								<label for="item-3" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This is a re-creation of the classic game Snake. While making this game, I became much better at dealing with grids and applying user-defined settings (speed, size, wrap, etc.) to the game. I've also started working on an AI that controls the snake using some interesting search methods, and will update the project once finished.</p>
										<p class="text-align-left"><a href='https://www.youtube.com/watch?v=uENgQ7qtVaE' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/Snake' target='_blank'>Project on GitHub</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Snake -->



						<!-- Personal Website -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="site.png">
									<img src="media/site.png"></img>
								</div>

								<div class="card-title">
									This Website (PHP, JS, SCSS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-4" />
								<label for="item-4" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This website has seen many improvements since I started working on it over 2 years ago. The thing I enjoyed most while creating this website was how to make everything responsive. It's really satisfying to see the elements adapt to different screen sizes!</p>
										<p class="text-align-left"><a href='https://github.com/nenslen/PersonalWebsite' target='_blank'>Project on GitHub</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Personal Website -->



						<!-- Calculator -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="calculator.png">
									<img src="media/calculator.png"></img>
								</div>

								<div class="card-title">
									Calculator (JS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-5" />
								<label for="item-5" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This is a calculator that I created for a project on freecodecamp.com. It's fairly basic as far as calculators go, but I found some of the operation chaining to be pretty cool!</p>
										<p class="text-align-left"><a href='https://codepen.io/NicEnslen/pen/BQPvmW/' target='_blank'>Code on Codepen</a></p>
										<p class="text-align-left"><a href='https://codepen.io/NicEnslen/full/BQPvmW/' target='_blank'>Demo</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Calculator -->



						<!-- Othello -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="othello.webm">
									<video controls autoplay loop muted>
										<source src="media/othello.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Othello (C++)
								</div>

								<input type="checkbox" class="read-more-state" id="item-6" />
								<label for="item-6" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This is Othello. I made it for a project in one of my programming classes. In addtion to the full game, we had to include features
										   that would allow the user to change the colors of the player pieces and board.</p>
										<p class="text-align-left"><a href='https://www.youtube.com/watch?v=DcL2g_oJmbg' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/Othello' target='_blank'>Project on GitHub</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Othello -->



						<!-- Computer Site -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="computersite.png">
									<img src="media/computersite.png"></img>
								</div>

								<div class="card-title">
									Database (PHP, Angular, MySQL)
								</div>

								<input type="checkbox" class="read-more-state" id="item-7" />
								<label for="item-7" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This was a project for a class in college. It feels a little dated now compared to other projects I've made since this one, but I learned a lot about PHP, Angular, and MySQL. The main goal was to use PHP to interface with MySQL, then use Angular to display the data.</p>
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
								<div class="card-media" id="tictactoe.webm">
									<video controls autoplay loop muted>
										<source src="media/tictactoe.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Ultimate Tic Tac Toe (JS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-8" />
								<label for="item-8" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">It's like regular tic tac toe, but in order to win you need to win 3 small games in a row. While working on this project I learned more about jQuery and how to handle inputs from 81 different elements.</p>
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



		<!-- Knowledge -->
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
			</div><!-- End section -->
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
