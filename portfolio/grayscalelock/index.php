<?php
	$title = "Alex Beals | Grayscale Lock";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>Grayscale Lock | March 2018</h3>
			<h4>Objective-C</h4>
			<a class="live" href="//cydia.alexbeals.com/GrayscaleLock">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/GrayscaleLock">&#xf09b;</a>
			<p>
				Grayscale Lock is a Cydia tweak that allows you to set grayscale status on an app-by-app basis. This is mainly to curb phone addiction, while making it harder to turn off than just manually turning it on.  It also allows the grayscale to not interfere with other apps that still need full color, such as the Camera and Photos app.<br>
			</p>
			<p>
				There are quite a few articles touting grayscale mode as a way to help curb phone addiction:
				<ul>
					<li><a href="https://lifehacker.com/change-your-screen-to-grayscale-to-combat-phone-addicti-1795821843">LifeHacker - Change Your Screen to Grayscale to Combat Phone Addiction</a></li>
					<li><a href="https://www.nytimes.com/2018/01/12/technology/grayscale-phone.html">New York Times - Is the Answer to Phone Addiction a Worse Phone?</a></li>
					<li><a href="https://www.theguardian.com/technology/2017/jun/20/turning-smartphone-greyscale-attention-distraction-colour">
TheGuardian - Will turning your phone to greyscale really do wonders for your attention?</a></li>
				</ul>
				While I'm not convinced that it's the magic solution, it's definitely made me much less happy using my phone, which I think will push me out of using it over time, as there's no endorphin rush for getting a notification or even checking my phone.  Right now, it's too early to tell.
			</p>
			<p>
				The tweak is written in Objective-C using the Theos development suite, specifically Logos that allows you to hook into iOS functions and modify how they work.
			</p>
			<div class="video">
				<video controls autoplay loop muted>
				  <source src="in_action.MOV">
				  Your browser does not support the video tag.
				</video>
				<span>Tweak in action</span>
			</div>
			<p>
				Feel free to <a href="//cydia.alexbeals.com/GrayscaleLock">install it from Cydia</a> or just <a href="//github.com/dado3212/mercGrayscaleLockury">check out the code on GitHub</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>