<?php
	$title = "Alex Beals | SurfShield";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>SurfShield | September 2016</h3>
			<h4>HTML, CSS, JS, Python</h4>
			<a class="github" href="//github.com/dado3212/surfshield">&#xf09b;</a>
			<p>
				In September, me and a few friends entered HackDartmouth III, a Dartmouth-based hackathon.  I'd signed up for the one the year before, but me and my roommate slept through it, so this was the first one that I'd be doing at Dartmouth (I did one junior year of high school).  We were undecided as to which project to pursue: a webgame that would involve phones and a main computer screen (<a href="//blog.alexbeals.com/posts/sardines-jumping-into-multiplayer-web-games-part-i">similar to what I did here</a>), or something that more closely suited the APIs that were offered by sponsors, and the possible prizes associated with them.
			</p>
			<p>
				We ended up deciding to go more in the sponsor route, and settled on 'SurfShield', a Chrome extension that would strip the text out of websites, and then run it through tone and sentiment analysis, before finally determining an overall 'safety' score for the website.  It generated 4 scores on a 1-5 scale.  These scores, 'Anger', 'Cyberbullying', 'Profanity', and 'Audience' would be combined to create the overall score, which would determine the color of the extension icon in the toolbar, and in the notification popup that would show when the page loaded.
			</p>
			<div class="image">
				<img src="MainDisplay.jpg"/>
				<span>SurfShield main screen</span>
			</div>
			<p>
				The first three scores were determined by the sentiment analysis, and were saved upon computation for static pages, to reduce the processing time for future visits.  The last score was crowdsourced, as a combination of all of the votes that people made for the site (based on the bottom slider score).
			</p>
			<div class="image">
				<img src="Icon.png" style="max-width: 4em;" />
				<span>SurfShield icon</span>
			</div>
			<p>
				The Chrome extension was built using HTML, CSS, JS, and used Python for the processing/API that it communicated with for the caching of scores and counting of votes.  We ended up winning the 'Best Hack Against Online Harassment' award, as well as the first place prize for the competition as a whole!  Our extension was featured in Devpost's newsletter, and I got a drone out of it, so definitely a great experience.  You can check it out <a href="https://devpost.com/software/surfshield">on Devpost's site</a>, or look at the source <a href="https://github.com/dado3212/surfshield">on GitHub</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>