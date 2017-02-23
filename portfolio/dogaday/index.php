<?php include('../../php/header.php'); ?>
	<title>Alex Beals | Dog-a-Day</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/main.js"></script>
</head>
<body>
	<div class="content">
		<article>
			<h3>Dog-a-Day | March 2016</h3>
			<h4>HTML, PHP, JS, CSS, MySQL, MailChimp</h4>
			<a class="live" href="//alexbeals.com/projects/puppies">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/dog-a-day">&#xf09b;</a>
			<p>
				Dog-a-Day started as a Christmas present for my father (a cute dog picture every day for a year), but it ballooned into a subscription based service for daily puppy images.  I've built a backend for the images, and use MailChimp for easy sending and subscription services.
			</p>
			<div class="image">
				<img src="DogADayEmail.png"/>
				<span>Sample Dog-a-Day email</span>
			</div>
			<p>
				You can check out previous dogs and subscribe to the newsletter by <a href="http://eepurl.com/cd9UQf">following this link</a>. It may at some point change to its own website, but at this point it didn't seem worth it. I also built in an admin panel, which allows you to view those subscribed, as well as view all of the future images that are loaded into the system (and add more images).
			</p>
			<p>
				Originally I used a Gmail account to send the emails, but the subscriber list grew to a point where Gmail began throttling and not sending all of the emails.  MailChimp has a free tier for up to 2,000 subscribers and 12,000 emails per month.  At one email a day, the free tier will last up to over 350 subscribers, which as it nears I'll slowly convert it into a paid model (currently there are around 100 subscribers, with an opening percentage of around 70%).
			</p>
			<p>
				If you want to check out the source code on GitHub, <a href="//github.com/dado3212/colorize">follow this link instead</a>.  If you want to subscribe, <a href="http://eepurl.com/cd9UQf">here's the link again.</a>
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>