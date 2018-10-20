<?php
	$title = "Alex Beals | Markov Messages";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>Markov Messages | March 2017</h3>
			<h4>JS (Node)</h4>
			<a class="live" href="//alexbeals.com/projects/markovmessages">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/markov-messages">&#xf09b;</a>
			<p>
				I was talking to a friend from college about automatically generating flavortext and death messages for a game, to keep it unique.  We were talking through markov chains (<a href="http://setosa.io/ev/markov-chains/" alt="Markov Chains explanation and visualization">here's a great resource to read up on them</a>), and he mentioned the possibility of using your iMessage chat database from your phone.
			</p>
			<p>
				I had some free time, so I looked into it.  My phone is jailbroken, so it's easy to extract the sms.db chat file from the phone.  However, that wouldn't work for larger audiences, and the difficulty in extracting the chat databases from iTunes backups were too much of a hassle.  Luckily though, most people who have iPhones have linked their chats to a laptop, and the chat.db file is present and readable.
			</p>
			<p>
				Originally I wrote a <a href="https://gist.github.com/dado3212/97c8f30de08f99f218386c3127f624ee">Python script</a> to do this, and if you have a Python environment set up, this is the way I'd recommend going, due to the speed increase.  Install the package `markovify`, and then just run the script on a Mac.  However, that again limits the audience, and I'd been wanting to mess around with <a href="https://electron.atom.io/">Electron</a> as well. 
			</p>
			<div class="image">
				<img src="MarkovMessages.png"/>
				<span>Markov Messages logo</span>
			</div>
			<p>
				Luckily, someone wrote a <a href="https://github.com/bdchauvette/markov-chains-text">Node library</a> that is a near-copy of the Python package I was using (though admittedly slower), which could be easily integrated into the Electron build.  You can see the finished product below.
			</p>
			<div class="image">
				<img src="Screenshot.png"/>
				<span>Markov Messages screenshot</span>
			</div>
			<p>
				This was the first time I'd used Electron, and it was a really satisfying experience.  Most of my experience is in web technologies, so being able to build apps with it was great.  That being said, this was an incredibly simple app, and the final build was around a 120mB .app file, with a 60mB .dmg.  For smaller projects like this, it just doesn't make sense.  You can download the .dmg file <a href="//alexbeals.com/projects/markovmessages/">from here</a>, or check out <a href="//github.com/dado3212/markov-messages">the source on Git</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>