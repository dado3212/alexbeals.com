<?php
	$title = "Alex Beals | Programmer";
	include("php/header.php");

	$base_dir = dirname(__FILE__) . "/portfolio/";

	function displaySnippets($projects) {
		global $base_dir;

		foreach ($projects as $file) {
			$snippet = $base_dir . $file . "/snippet.php";
			if (file_exists($snippet)) {
				include($snippet);

				echo "
				<article class='preview'>
					<div class='image'>
						<img src='portfolio/$file/$image'>
					</div>
					<h3><a href='portfolio/$file'>$title</a></h3>
					<h4>$stack</h4>" . 
					(strlen($live) > 0 ? "<a class='live' href='$live'>&#xf0c1;</a>" : "") . 
					(strlen($github) > 0 ? "<a class='github' href='$github'>&#xf09b;</a>" : "") . "
					<p>
						$description
					</p>
					<a href='portfolio/$file' aria-label='Continuation of Dartmouth Room Search writeup'>Read More &rsaquo;</a>
				</article>";
			}
		}
	}
?>
	<div class="content">
		<div id="about">
			<div class="left">
				<h1>Alex Beals</h1>
				<p>
					Developer, hacker, student at Dartmouth College
				</p>
				<a class="resume" href="/assets/Resume.pdf">View my Resume</a>
				<div class="external">
					<a href="https://github.com/dado3212"><span class="icon-github"></a>
					<a href="https://www.linkedin.com/in/alexbeals"><span class="icon-linkedin"></a>
				</div>
			</div>
			<div id="hexmap">
				<canvas width="660" height="624"></canvas>
				<span>Hexagonal Game of Life</span>
			</div>
		</div>
		<div id="portfolio">
			<h1>Portfolio</h1>
			<div class="columns">
				<?php
					$projects = ["dartmouthroomsearch", "colorize", "classy", "groupme", "thepackmarket"];

					displaySnippets($projects);
				?>
			</div>
			<div class="columns">
				<?php
					$projects = ["dogaday", "dartdine", "surfshield", "whatsline"];

					displaySnippets($projects);
				?>
			</div>
			<div class="columns">
				<?php
					$projects = ["shiftcycle", "passcodeactivator", "oncemore", "safarisearchhider"];

					displaySnippets($projects);
				?>
			</div>
		</div>
		<div id="contact">
			<h1>Contact Me</h1>
			<span class="alert"></span>
			<form method="post">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="in" autocomplete="off"/>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" class="in" autocomplete="off"/>
				<label for="message">Message</label>
				<textarea name="message" id="message" rows="10" cols="30" class="in" autocomplete="off"></textarea>
			</form>
			<button class="circlebutton noselect email"><span class="circle"></span><span>Send Email</span></button>
		</div>
	</div>

	<script src="js/home.js"></script>
	<?php include('php/footer.php'); ?>
