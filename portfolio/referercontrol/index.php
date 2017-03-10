<?php
	$title = "Alex Beals | RefererControl";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>RefererControl | March 2017</h3>
			<h4>Objective-C</h4>
			<a class="live" href="//cydia.alexbeals.com/RefererControl">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/referer-control">&#xf09b;</a>
			<p>
				RefererControl is a tweak that allows you to customize the HTTP referer on a per-website basis. Works in Safari and Chrome.  This can allow you to disguise where your traffic is coming from, or take advantage of sites that check the referer to determine if you have viewing access.
			</p>
			<div class="image">
				<img src="RefererControl.jpg"/>
				<span>RefererControl preferences screen</span>
			</div>
			<p>
				The tweak is written in Objective-C using the Theos development suite, specifically Logos that allows you to hook into iOS headers and modify how they function. Feel free to <a href="//cydia.alexbeals.com/RefererControl">install it from Cydia</a>, or just <a href="//github.com/dado3212/referer-control">check out the code</a>.
			</p>
			
		</article>
	</div>
<?php include('../../php/footer.php'); ?>