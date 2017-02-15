<?php include('../../php/header.php'); ?>
	<title>Alex Beals | Safari Search Hider</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/main.js"></script>
</head>
<body>
	<div class="content">
		<article>
			<h3>SafariSearchHider | August 2015</h3>
			<h4>Objective-C</h4>
			<a class="live" href="//cydia.alexbeals.com/SafariSearchHider">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/SafariSearchHider">&#xf09b;</a>
			<p>
				SafariSearchHider is a tweak for iPhones that allows you to customize the things that Safari saves your information on, including history and cookies.
				By creating tailored regex or wildcard strings, SafariSearchHider allows you to selectively use Private browsing without affecting other usage of your
				iPhone.
			</p>
			<div class="image">
				<img src="SafariSearchHider.jpg"/>
				<span>SafariSearchHider Cydia install screen</span>
			</div>
			<p>
				The tweak is written in Objective-C using the Theos development suite, specifically Logos that allows you to hook into iOS headers and modify how they function.  By incorporating regex into the blacklist options, it allows for incredibly complex things: for example .*(cat|dog|bird).*(jpg|gif|png) covers 9 separate wildcard blacklists in one.  Feel free to <a href="//cydia.alexbeals.com/SafariSearchHider">install it from Cydia</a> or just <a href="//github.com/dado3212/SafariSearchHider">check out the code on GitHub</a>.
			</p>
			
		</article>
	</div>
<?php include('../../php/footer.php'); ?>