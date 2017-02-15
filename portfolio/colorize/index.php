<?php include('../../php/header.php'); ?>
	<title>Alex Beals | Colorize</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/main.js"></script>
</head>
<body>
	<div class="content">
		<article>
			<h3>Colorize | August 2016</h3>
			<h4>HTML, CSS, PHP, MySQL</h4>
			<a class="live" href="//alexbeals.com/projects/colorize">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/colorize">&#xf09b;</a>
			<p>
				A while ago I was designing a website, and wanted a good color blue. However, I'm incredibly indecisive when it comes to choosing color palettes. I envisioned some site that would allow me to type in 'blue', and it would give me the ideal blue color. This idea was fleshed out into Colorize. It takes in a search criteria, and then averages the colors returned in the first page of Google Image results to return a single hex color.
			</p>
			<div class="image">
				<img src="ColorizeMain.png"/>
				<span>Colorize front page</span>
			</div>
			<p>
				The home page gives a quick explanation of how it works and gives three examples: '<a href="//alexbeals.com/projects/colorize/search.php?q=sky">sky</a>', '<a href="//alexbeals.com/projects/colorize/search.php?q=purple">purple</a>', and '<a href="//alexbeals.com/projects/colorize/search.php?q=sand">sand</a>'. Obviously an application like this is going to give good colors for things that already have solid colors, such as '<a href="//alexbeals.com/projects/colorize/search.php?q=grass">grass</a>' and '<a href="//alexbeals.com/projects/colorize/search.php?q=ocean">ocean</a>', and give muddy/tan colors for searches that return a wide variety of colors, as would usually happen with people's names and more abstract terms.
			</p>
			<div class="image">
				<img src="ColorizeDetail.png"/>
				<span>Colorize result for ocean</span>
			</div>
			<p>
				Some searches stood out. '<a href="//alexbeals.com/projects/colorize/search.php?q=hack">Hack</a>' was a dark green because of the tendency of popular media to portray hacking with a black terminal screen with green text. '<a href="//alexbeals.com/projects/colorize/search.php?q=light">Light</a>' was a pretty dark color, as to show off light you typically did so against a dark background. '<a href="//alexbeals.com/projects/colorize/search.php?q=pink">Pink</a>' surprisingly was more fleshy than pink because Google returned images of the artist, not the color.
			</p>
			<p>
				I thought other people would have fun with it, so I posted it to Reddit to the /r/InternetIsBeautiful subreddit and /r/web_design. From the 1st of September to the 12th, the site received over 16,000 separate users, and over 150,000 page views. Over 34,000 unique searches have been run, with over 160,000 total color searches.
			</p>
			<p>
				If you want to try out the site, <a href="//alexbeals.com/projects/colorize">follow this link</a>. If you want to check out the source code on GitHub, <a href="//github.com/dado3212/colorize">follow this link instead</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>