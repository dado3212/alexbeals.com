<?php
	$title = "Alex Beals | Mercury";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>Mercury | August 2017</h3>
			<h4>Objective-C</h4>
			<a class="live" href="//cydia.alexbeals.com/Mercury">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/mercury">&#xf09b;</a>
			<p>
				Mercury is a Cydia tweak that adds a customizable indicator to messages that you haven't responded to. I'd been using it personally for a bit over a year now, so figured it was time to polish it up a little and release it. I have developed a less fully-featured Mac version as well, which you can download/install using SIMBL <a href="//github.com/dado3212/message-indicator">(found in this repo)</a>.<br>
			</p>
			<div class="image">
				<img src="messages.jpg"/>
				<span>Sample indicator on unread conversations</span>
			</div>
			<p>
				The tweak is written in Objective-C using the Theos development suite, specifically Logos that allows you to hook into iOS functions and modify how they work.  It uses a repo called <a href="//github.com/atomikpanda/libcolorpicker/">libcolorpicker</a> to be allow high customization of the indicator.
			</p>
			<div class="video">
				<video controls autoplay loop muted>
				  <source src="settings.m4v" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
				<span>Settings pane</span>
			</div>
			<p>
				Feel free to <a href="//cydia.alexbeals.com/Mercury">install it from Cydia</a> or just <a href="//github.com/dado3212/mercury">check out the code on GitHub</a>.  This project also led to some pretty interesting coding that I talk about <a href="//blog.alexbeals.com/posts/mercury-tweak-and-fun-code">on my blog</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>