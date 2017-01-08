<!DOCTYPE html>

<html>
<head>
	<title>Nicolas Enslen</title>
	<meta charset='utf-8'>
	<!--<meta name='viewport' content='width=device-width, initial-scale=1'>-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel='stylesheet' href='styles/style-home.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="script.js"></script>

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
		
		<!-- About Section -->
		<div class='main-content' id='about'>
			<h1>About</h1>
			<div class='about-content'>
				<img src='media/self-image.jpg' height='200px' width='200' />
			</div>
			<div class='about-content'>
				<p>I love programming! Making cool websites, applications, and games is fun, and it's what I like to do.</p>
				<p>I'm currently in my third year of computer science at the University of Lethbridge.</p>
			</div>
		</div>
		
		

		<!-- Projects Section -->
		<div class='main-content' id='project-description'>
			<h1>Projects</h1>
			<p>
				This is a sample of some of my favorite projects that I've made.
				You can see a larger list of my projects on <a href='https://github.com/nenslen' target='_blank'>GitHub</a>.
			</p>
		</div>
		

		<div id="projects">

			<!-- Block Puzzle -->
			<div class="project">
				<div class='project-video'>
					<div class="project-media" id="blockpuzzle.webm">
						<video controls autoplay loop muted>
							<source src="media/blockpuzzle.webm" type="video/webm">
						</video>
					</div>
				</div>

				<div class="project-title">
					Block Puzzle (Java)
				</div>

				<input type="checkbox" class="read-more-state" id="item-1" />
				<label for="item-1" class="read-more-trigger"></label>
				<div class="read-more-wrap project-description">
					<div class="read-more-target">
						<p>In this game, you place blocks onto the grid. When a column or row is full, those
						blocks disappear. This game is a re-creation of a game on the Google Playstore called
						'Block Puzzle'.</p>
						<p><a href='https://www.youtube.com/watch?v=EL6INBXauik' target='_blank'>Full Video on Youtube</a></p>
						<p><a href='https://github.com/nenslen/BlockPuzzle' target='_blank'>Project on GitHub</a></p>
						<p><a href='https://github.com/nenslen/BlockPuzzle/releases/download/1.0/Block_Puzzle.jar'>Download .jar</a></p>
					</div>
				</div>
			</div>
			<!-- end Block Puzzle -->


			<!-- Snake -->
			<div class="project">
				<div class="project-media" id="snake.webm">
					<video controls autoplay loop muted>
						<source src="media/snake.webm" type="video/webm">
					</video>
				</div>

				<div class="project-title">
					Snake (Java)
				</div>

				<input type="checkbox" class="read-more-state" id="item-2" />
				<label for="item-2" class="read-more-trigger"></label>
				<div class="read-more-wrap project-description">
					<div class="read-more-target">
						<p>This is a re-creation of the classic game 'Snake' with 3 game modes. The demo is showing the survival game mode, where the player's tail is always growing.</p>
						<p><a href='https://www.youtube.com/watch?v=uENgQ7qtVaE' target='_blank'>Full Video on Youtube</a></p>
						<p><a href='https://github.com/nenslen/Snake' target='_blank'>Project on GitHub</a></p>
					</div>
				</div>
			</div>
			<!-- end Snake -->


			<!-- Personal Website -->
			<div class="project">
				<div class="project-media" id="site.png">
					<img src="media/site.png"></img>
				</div>

				<div class="project-title">
					This website (HTML, CSS/SCSS)
				</div>

				<input type="checkbox" class="read-more-state" id="item-3" />
				<label for="item-3" class="read-more-trigger"></label>
				<div class="read-more-wrap project-description">
					<div class="read-more-target">
						<p>I created this website. Nothing fancy, just HTML and CSS/SCSS were used.</p>
						<p><a href='https://github.com/nenslen/PersonalWebsite' target='_blank'>Project on GitHub</a></p>
					</div>
				</div>
			</div>
			<!-- end Personal Website -->


			<!-- Calculator -->
			<div class="project">
				<div class="project-media" id="calculator.png">
					<img src="media/calculator.png"></img>
				</div>

				<div class="project-title">
					Calculator (HTML, CSS/SCSS, JS)
				</div>

				<input type="checkbox" class="read-more-state" id="item-4" />
				<label for="item-4" class="read-more-trigger"></label>
				<div class="read-more-wrap project-description">
					<div class="read-more-target">
						<p>This is a calculator that I created for a project on freecodecamp.com</p>
						<p><a href='https://codepen.io/NicEnslen/pen/BQPvmW/' target='_blank'>Code on Codepen</a></p>
						<p><a href='https://codepen.io/NicEnslen/full/BQPvmW/' target='_blank'>Demo on Codepen</a></p>
					</div>
				</div>
			</div>
			<!-- end Personal Website -->
		</div>
		


		<!-- Knowledge -->
		<div class='main-content' id='knowledge'>
			<h1>Knowledge</h1>
			
			<div>
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
		</div>
		


		<!-- Education -->
		<div class='main-content' id='education'>
			<h1>Education</h1>
			
			<div class='education-content'>
				<!--<img src='media/college-icon.png' width='128px' height='128px' />-->
				<h3 class='education-header'>Lethbridge College</h3>
				<p>Diploma in Computer Information Technology (2016)</p>
			</div>
			<div class='education-content'>
				<!--<img src='media/university-icon.png' width='128px' height='128px' />-->
				<h3 class='education-header'>University of Lethbridge</h3>
				<p>Bachelor of Computer Science (2018)</p>
			</div>
		</div>
		
		
		
		<!-- Contact -->
		<div class='main-content' id='contact'>
			<h1>Contact</h1>
			
			<div class='contact-content' id="contact-email">
				<a href='mailto:nicolas.enslen@gmail.com'><i class='fa fa-envelope fa-5x' aria-hidden='true'></i></a>
				<p><a href='mailto:nicolas.enslen@gmail.com'>nicolas.enslen@gmail.com</a></p>
			</div>
			
			<div class='contact-content'>
				<a href='https://github.com/nenslen' target='_blank'><i class='fa fa-github fa-5x' aria-hidden='true'></i></a>
				<p><a href='https://github.com/nenslen' target='_blank'>github</a></p>
			</div>
			
			<div class='contact-content'>
				<a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'><i class='fa fa-linkedin fa-5x' aria-hidden='true'></i></a>
				<p><a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'>linkedin</a></p>
			</div>
		</div>


		<!--<div id="modal" onclick="this.style.display='none'">-->
		<div id="modal">
			<div class="modal-content"></div>
		</div>


		<footer>
			&copy 2016 - Nic Enslen
		</footer>
	</div> <!-- wrapper -->
</body>
</html>