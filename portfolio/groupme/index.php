<?php
	$title = "Alex Beals | GroupMe Analysis";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>GroupMe Analysis | August 2016</h3>
			<h4>HTML, CSS, JS (jQuery), PHP, SQL (MySQL)</h4>
			<a class="live" href="//groupmeanalysis.com">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/groupme-analysis">&#xf09b;</a>
			<p>
				Over the summer, I wanted to look at some statistics for one of the GroupMe's that I was in. I looked around, and found GroupMe had an open REST API. I wrote a quick script to scrape all the data using my account, and I compiled it into some basic information: who had the most comments, who had the most likes, etc.
			</p>
			<p>
				But then I got to thinking about doing it to other groups. It was kind of cool to see that information, and see what all the best comments were in the group. GroupMe has some of it built into the 'Popular' tab in their app, but it's not nearly as detailed or goes back long enough for what I wanted. So, I decided to try and build out an app. 
			</p>
			<div class="image">
				<img src="header.png"/>
				<span>GroupMe Analysis logo</span>
			</div>
			<p>
				I created a fake user account using a number generated for free through Hushed.  This is the account that powers the application.  There's no way to get a callback script to run when an account is added to a group.  There is, however, a way to search through all of the groups that you are currently in.  The website takes advantage of this, by asking you to add the bot account to the group under a specific unique name.  The bot can then search through all groups that it's in, and figure out which group it was just added to.  It then downloads all messages from the group, and processes them.
			</p>
			<p>
				It stores the relevant information to the final analysis in an encrypted form in a database, which necessitates a password and group ID to access.  It then posts a link to the GroupMe group to view the analysis, and asks for it to be removed (if it removes itself, the group could never have analysis run on it again).
			</p>
			<div class="image">
				<img src="individual_demo.png"/>
				<span>GroupMe Analysis sample individual analysis</span>
			</div>
			<p>
				It's since been run hundreds of times, a number that is growing by the day.  Feel free to <a href="//groupmeanalysis.com">check out the live site</a> to run it on a GroupMe group, or <a href="//github.com/dado3212/groupme-analysis">look at the code on GitHub!</a>
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>