<?php
	$title = "Alex Beals | OnceMore";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>OnceMore | January 2017</h3>
			<h4>Objective-C</h4>
			<a class="live" href="//cydia.alexbeals.com/OnceMore">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/OnceMore">&#xf09b;</a>
			<p>
				OnceMore is another Cydia tweak that I developed, and probably the one that I use and benefit from the most.  It's incredibly simple: it just adds a 'Restart' button when a timer goes off.  While this is a pretty minor quality of life improvement, I do a ton of things that I try and do in a set time.  Whether it be workout reps, a constrained nap, or a timer for doing laundry, there are countless times when I wish I could just easily click a button and the timer would reset without having to go in, turn off the current one, and set up a new one.  Additionally, if the time isn't a set minute, I would have to retrigger it with Siri.  This solves all of that.
			</p>
			<div class="image">
				<img src="RestartScreen.png"/>
				<span>Showing the added 'Restart Timer' button</span>
			</div>
			<p>
				As you can see, in the bottom of the screen, it simply adds a 'Restart Timer' button.  This tweak works from iOS8+, and handles the various notification types, only showing up on Timer notifications.  It reuses the same alarm sound, and restarts to the same time value, even if it's configured through Siri.  You can get it from <a href="//cydia.alexbeals.com/OnceMore">my personal repo</a>, <a href="http://cydia.saurik.com/package/com.hackingdartmouth.oncemore/">BigBoss</a>, or check <a href="https://github.com/dado3212/OnceMore">out the GitHub repo</a>.  While I'm not currently recording download stats from my personal repo, so far it has around 3k downloads through BigBoss.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>