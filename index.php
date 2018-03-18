<!DOCTYPE html>

<html>
<head>
	<title>Nicolas Enslen - Programmer, Web Developer</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel='stylesheet' href='styles/style-home.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="modalScript.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-86102408-1', 'auto');
		ga('send', 'pageview');

	</script>
</head>
<body>
	<div id='header'>
		<div id='titles'>
			<h1 id='full-name'>Nicolas Enslen</h1>
			<h4 id='titles'>Programmer, Web Developer</h4>
		</div>
	</div>
	<!--
	<div id='top-right'>
		<a href='mailto:nicolas.enslen@gmail.com'><i class='fa fa-envelope fa-3x' aria-hidden='true'></i></a>
		<a href='https://github.com/nenslen' target='_blank'><i class='fa fa-github fa-3x' aria-hidden='true'></i></a>
		<a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'><i class='fa fa-linkedin fa-3x' aria-hidden='true'></i></a>
		</br></br>
	</div>
	-->
	

	<div class='wrapper'>
		
		<!-- About -->
		<div class='section-wrapper'>
			<div class="section" id="about">
				<h1 class="section-header" id="about-header">About</h1>
				<div class="section-content grid grid-2" id="about-content">
					<div class='about-image'>
						<img src='media/self-image.jpg' height='200px' width='200' />
					</div>
					<div class='about-description'>
						<p class="text-align-left">I love programming! Making cool websites, applications, and games is fun, and it's what I like to do.</p>
						<p class="text-align-left">I'm currently in my final semester of computer science at the University of Lethbridge.</p>
					</div>
				</div>
			</div>
		</div><!-- End About -->
		


		<!-- Projects -->
		<div class='section-wrapper'>
			<div class="section" id="projects">
				<h1 class="section-header" id="projects-header">Projects</h1>
				<div class="section-content" id="projects-content">
					<p>This is a sample of some of my favorite projects that I've made. You can see a larger list of my projects on <a href='https://github.com/nenslen' target='_blank'>GitHub</a>.</p>
		
					<div class="grid grid-3">

						<!-- Neural Network -->
						<div class="card-outer">
							<div class="card">
								<div class="card-media" id="neuralnetwork.webm">
									<video controls autoplay loop muted>
										<source src="media/neuralnetwork.webm" type="video/webm">
									</video>
								</div>

								<div class="card-title">
									Digit Recognition (NodeJS/HTML/CSS/JS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-1" />
								<label for="item-1" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">A neural network made from scratch that can recognize handwritten digits. It was made as a final project
										for my data mining class at university. This was my most difficult, but most rewarding project
										that I have undertaken so far! I had a lot of fun getting introduced to the topic of artificial
										intelligence while working on it!</p>
										<!--<p><a href='' target='_blank'>Full Video on Youtube</a></p>-->
										<p class="text-align-left"><a href='https://github.com/nenslen/NeuralNetMNIST' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='http://nicolasenslen.com/NeuralNetwork/' target='_blank'>Demo</a></p>
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
										<p class="text-align-left">In this game, you place blocks onto the grid. When a column or row is full, those
										blocks disappear. This game is a re-creation of a game on the Google Playstore called
										'Block Puzzle'.</p>
										<p class="text-align-left"><a href='https://www.youtube.com/watch?v=EL6INBXauik' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/BlockPuzzle' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/BlockPuzzle/releases/download/1.0/Block_Puzzle.jar'>Download .jar</a></p>
									</div>
								</div>
							</div>
						</div>
						<!-- end Block Puzzle -->



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
										<p class="text-align-left">This is a re-creation of the classic game 'Snake' with 3 game modes. The demo is showing the survival game mode, where the player's tail is always growing.</p>
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
									This website (HTML, CSS/SCSS)
								</div>

								<input type="checkbox" class="read-more-state" id="item-4" />
								<label for="item-4" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">I created this website. Nothing fancy, just HTML and CSS/SCSS were used.</p>
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
									Calculator (Javascript)
								</div>

								<input type="checkbox" class="read-more-state" id="item-5" />
								<label for="item-5" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This is a calculator that I created for a project on freecodecamp.com</p>
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
									UI Project (PHP, AngularJS, MySQL)
								</div>

								<input type="checkbox" class="read-more-state" id="item-7" />
								<label for="item-7" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">This was a project for my User Interface class. The goal was to make a website that was obvious
										   and easy to use. I used a very simple design to show some computer hardware information.</p>
										<p class="text-align-left"><a href='https://github.com/nenslen/ComputerSite' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='http://nicolasenslen.com/ComputerSite/' target='_blank'>Demo</a></p>
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
									Ultimate Tic Tac Toe (Javascript)
								</div>

								<input type="checkbox" class="read-more-state" id="item-8" />
								<label for="item-8" class="read-more-trigger"></label>
								<div class="read-more-wrap card-description">
									<div class="read-more-target">
										<p class="text-align-left">Players must play the board that corresponds to the square from the previous player. If the next move 
										is to a board that has already been won, then that player may choose any board for their turn.</p>
										<p class="text-align-left"><a href='https://youtu.be/6TgGcMFGhXo' target='_blank'>Full Video on Youtube</a></p>
										<p class="text-align-left"><a href='https://github.com/nenslen/UltimateTicTacToe' target='_blank'>Project on GitHub</a></p>
										<p class="text-align-left"><a href='http://nicolasenslen.com/UltimateTicTacToe/' target='_blank'>Demo</a></p>
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
		
					<div class="grid grid-2">

						<!-- Lethbridge College -->
						<div class="card-outer">
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
						<div class="card-outer">
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
			
					<div class="grid grid-3">
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
		


		<div id="modal">
			<div class="modal-content"></div>
		</div>



		<footer>
			&copy 2018 - Nic Enslen
		</footer>
	</div><!-- wrapper -->
</body>
</html>