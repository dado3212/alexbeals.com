<?php include('php/header.php'); ?>
		<meta property="og:title" content="Alex Beals | Programmer">
		<meta property="og:image" content="http://alexbeals.com/assets/images/transparent-logo.png">
		<meta property="og:url" content="http://alexbeals.com">
		<meta property="og:description" content="Check out my resume, some of my past projects, or get in contact with me.">

		<meta name="description" content="Check out my resume, some of my past projects, or get in contact with me.">

		<title>Alex Beals | Programmer</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">

	</head>
	<body>
		<div class="header">
			<div class="link">
				<a href="#contact">Contact Me</a>
			</div>
			<div class="link">
				<a href="#portfolio">Portfolio</a>
			</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="logo" x="0px" y="0px" width="150px" height="80px" viewBox="0 0 145 66">
					<g>
						<path id="logoPath" fill="none" stroke="grey" stroke-width="6" stroke-miterlimit="10" d="M66.017,2.866L83.128,22.31  C87.251,11.052,98.035,3,110.721,3c16.238,0,29.403,13.165,29.403,29.404c0,16.24-13.165,29.404-29.403,29.404  c-8.653,0-16.434-3.737-21.813-9.688L54.479,12.979C49.09,6.86,41.198,3,32.404,3C16.165,3,3,16.165,3,32.404  c0,16.24,13.165,29.404,29.404,29.404c12.686,0,23.495-8.032,27.618-19.291l17.084,19.426"/>
					</g>
				</svg>
			</div>
			<div class="link">
				<a href="//blog.alexbeals.com">Blog</a>
			</div>
			<div class="link">
				<a href="//cydia.alexbeals.com">Cydia Repo</a>
			</div>
			<button class="menu"></button>
			<ul class="lowerMenu">
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact Me</a></li>
				<li><a href="//blog.alexbeals.com">Blog</a></li>
				<li><a href="//cydia.alexbeals.com">Cydia Repo</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="about">
				<!-- Image courtesy of www.nickwestphoto.co.uk -->
				<h1>Alex Beals</h1>
				<!-- Dartmouth SVG -->
				<div class='icon'>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="125px" height="125px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
						<polygon fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="47.958,26.25 139.792,26.25 161.958,45.917   161.958,151.083 140.292,170.917 47.958,170.917 47.958,126.083 53.125,126.083 53.125,70.75 47.958,70.75 "/>
						<polygon fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="58.458,36.584 58.458,60.417 63.792,60.417   63.792,136.583 58.458,136.583 58.458,160.583 135.792,160.583 151.292,146.917 151.292,51.584 135.625,36.584 "/>
						<polygon fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="86.125,57.25 86.125,139.917   123.958,139.917 128.792,135.25 128.792,62.084 123.958,57.25 "/>
						<rect x="97.125" y="68.084" fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" width="21.167" height="61"/>
						<circle fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" cx="99" cy="99" r="97.5"/>
					</svg>
					<div class='subtext'>
						<b>Dartmouth College</b><br>
						Computer Science<br>
						Math
					</div>
				</div>

				<a class="resume" href="/assets/Resume.pdf">View my Resume</a>
				<div class="external">
					<!--<a target="_blank" href="https://codepen.io/dado3212"></a>-->
					<a href="https://github.com/dado3212"></a>
					<!--<a target="_blank" href="https://dribbble.com/dado3212"></a>-->
					<a href="https://www.linkedin.com/in/alexbeals"></a>
				</div>
			</div>
			<div id="portfolio">
				<h1>Portfolio</h1>
				<?php
					$files = ["dartmouthroomsearch", "colorize", "groupme", "dogaday", "thepackmarket", "shiftcycle", "whatsline", "passcodeactivator", "safarisearchhider"];

					$base_dir = dirname(__FILE__) . "/portfolio/";

					foreach ($files as $file) {
						$snippet = $base_dir . $file . "/snippet.php";
						if (file_exists($snippet)) {
							include($snippet);
						}
					}
				?>
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

		<script src="/js/jquery-2.1.3.min.js"></script>
		<script src="/js/main.js"></script>
		<?php include('php/footer.php'); ?>
