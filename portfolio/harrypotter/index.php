<?php
	$title = "Alex Beals | Guess the Book";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>Guess the Book | September 2017</h3>
			<h4>HTML, CSS, JS (jQuery, Turn.js), PHP</h4>
			<a class="live" href="//alexbeals.com/projects/guessthebook">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/guess-the-book">&#xf09b;</a>
			<p>
				I was working on a project in extracting typing from hand movement in 3D space, and needed an API for generating sentences.  I found a few ones online, but most of them weren't high enough quality sentences, or weren't free.  So I decided to make my own, sourcing it from random book files.  Then, as a proof of concept, I figured I'd make a short game out of it.  The game that I settled on pulls a random quote from one of the 7 Harry Potter books, and you have to decide which book it belongs to.
			</p>
			<p>
				This project has gone through quite a few iterations from the beginning, mainly in terms of design.  If you want to read more about this, you can check out the writeup that I did <a href="//blog.alexbeals.com/posts/guessing-harry-potter">over on my blog</a>.
			</p>
			<p>
				The finalized version has a list of books on the left side that you can choose from, and a quote with hidden context on the right.  After you make a choice (right or wrong) it reveals the additional context and displays the correct title. To do that, my extractor gets the main quote (with a min of 45 characters), and also tries to pull 750 total characters from the surrounding text.
			</p>
			<div class="video">
				<video controls autoplay loop style="max-width: 100%;">
				  <source src="./pageFlipAndTrying.mov" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
			</div>
			<p>
				Feel free to <a href="//alexbeals.com/projects/guessthebook">play the game</a>, or <a href="//github.com/dado3212/guess-the-book">look at the code on GitHub!</a>
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>