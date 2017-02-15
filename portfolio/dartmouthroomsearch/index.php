<?php include('../../php/header.php'); ?>
	<title>Alex Beals | Dartmouth Room Search</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/main.js"></script>
</head>
<body>
	<div class="content">
		<article>
			<h3>Dartmouth Room Search | April 2015</h3>
			<h4>HTML, CSS, PHP, SQL (MySQL)</h4>
			<a class="live" href="//DartmouthRoomSearch.com">&#xf0c1;</a>
			<a class="github" href='//github.com/dado3212/Dartmouth-Room-Search'>&#xf09b;</a>
			<p>
				After freshman year, all students at Dartmouth are assigned a housing number.  This number determines
				your priority in getting the room you want.  Prior to Dartmouth Room Search being launched, to find 
				the perfect room you would have to comb through numerous poorly formatted floor plans, with unclear room dimensions
				and unlabeled gender restrictions.
			</p>
			<div class="image">
				<img src="DartmouthRoomSearch.jpg"/>
				<span>Dartmouth Room Search front page</span>
			</div>
			<p>
				This site amalgamates all the data including size, bathrooms, gender, number 
				of people, and rooms into one easy convenient place.  It then allows you to filter by your preferences, 
				and sort the results by square feet per person, number of people, and more through an easy to use sentence-based search
				method.
			</p>
			<p>
				To get the data, I wrote a quick PHP script that takes in room information, and formats it into 
				the MySQL database.  It auto-remembers most of the information to make it quick to add, and auto-incremented
				room numbers to facilitate it even further.  Then, I sat down for around three hours and went through all
				of the floor plans to extract all information.
			</p>
			<p>
				From there, it was relatively quick to put it all together, and adding in locations, easy to save links, and
				the sorting options took around an hour more.  Fixing up SEO was a longer story, but it's the first result for
				"dartmouth room search" on Google, and it's on the first page for "dartmouth rooms".  The entire site is built
				upon PHP and interfaces with the MySQL database.
			</p>
			<p>
				Since its creation it's had over 15k pageviews, with an average session of over 1 and a half
				minute.  Considering the niche nature of the site, and the fact that the site is really only useful
				during the time shortly before and during room search, I'm pretty happy with these results.  It
				definitely accomplished its goal of making it easier to find your perfect room, and after all, coding is about
				solving problems.  Feel free to <a href="//DartmouthRoomSearch.com">check out the live site</a> or <a href='//github.com/dado3212/Dartmouth-Room-Search'>look at the code on GitHub!</a>
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>