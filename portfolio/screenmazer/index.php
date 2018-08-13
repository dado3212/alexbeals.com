<?php
	$title = "Alex Beals | ScreenMazer";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>ScreenMazer | August 2018</h3>
			<h4>Swift</h4>
			<a class="github" href="//github.com/dado3212/screenmazer">&#xf09b;</a>
			<p>
				I had seen a series of animated gifs of automatic maze solving a year or two ago, and at the time had jotted a note to myself that it would make a cool idea for a macOS screensaver.  For one of my final CS classes, I was brainstorming a list of tech that I hadn't developed anything for or worked with, and screensavers on Mac were on the list as something that would probably lend itself to an easy short-term project.  And lo and behold, it did!  Without further ado, here it is in action.
			</p>
			<div class="video">
				<video muted autoplay loop style="max-width: 100%;">
				  <source src="./sample.mov" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
			</div>
			<p>
				I wanted it to be pretty customizeable, so I built in a series of options.  With the settings pane, you can customize the maze color, solve color, time it takes to build the maze, time it takes to solve the maze, how large each square for the maze should be, how large the clock display should be, whether or not it should solve the maze after it finishes, and whether the clock is 12-hour or 24-hour.
			</p>
			<div class="image">
				<img src="settings.jpg" height="250px">
				<span>ScreenMazer settings</span>
			</div>
			<p>
				Feel free to <a href="//github.com/dado3212/ScreenMazer/releases/download/v1.0/ScreenMazer.zip">download the screensaver</a>, or <a href="//github.com/dado3212/screenmazer">look at the code on GitHub!</a>
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>