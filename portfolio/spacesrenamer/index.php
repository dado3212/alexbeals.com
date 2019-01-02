<?php
	$title = "Alex Beals | Spaces Renamer";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>Spaces Renamer | October 2018</h3>
			<h4>Objective-C (SIMBL), Swift</h4>
			<a class="github" href="//github.com/dado3212/spaces-renamer">&#xf09b;</a>
			<p>
				Spaces Renamer is something that I thought of about two years ago.  I tend to use a LOT of desktops on Mac (or Spaces, as they're called internally).  Each one would be something different I was working on, and I would just swipe between them whenever I need something.  It's super useful because you can keep different Chrome windows/text editors in their own desktop for different purposes.  However, they're all called things like 'Desktop 1', which can make it hard to remember which desktop you're trying to switch to without just scrolling through them all.
			</p>
			<div class="image">
				<img src="Icon-2.png" height="250px"/>
				<span>Spaces Renamer icon</span>
			</div>
			<p>
				So like always when a problem is posed without a clear solution, I figured I could try and solve it myself.  There exists paid software called TotalSpaces which sort of has this functionality, but it pretty drastically modifies the base macOS experience, and was pretty buggy, so I wanted to write my own solution using SIMBL.  I've done a lot of projects using the Theos development suite, which is a toolchain for iOS that allows you to hook into iOS functions and modify how they work.  SIMBL is roughly the same thing for macOS, where you can "swizzle" a method into doing something different.  I'd used this to create another tweak called <a href="//github.com/dado3212/message-indicator">Message Indicator</a> (which adds an indicator icon on iMessage chats if you weren't the last person to respond), so I knew it could probably be done.
			</p>
			<p>
				Unfortunately, despite the fact that nearly every part of Apple's software is built on Obj-C, Dock and the correlating spaces switching is written in Swift!  While you can do some method swizzling in Swift, and there's even an <a href="//github.com/kuglee/BatteryExtra">open source SIMBL tweak on GitHub</a> that does just that, I couldn't find available headers, and I'm reasonably sure that it wasn't written in Swift when I first looked into it in macOS 10.10.  So it wasn't possible to hook into the underlying structure that was determining the names of the spaces.  Instead, I had to hook into the rendering.
			</p>
			<div class="image">
				<img src="smallView.jpg"/>
				<span>Spaces switcher in condensed form</span>
			</div>
			<p>
				Because there's a clearly defined structure to the CALayer-ing of the components that make up the visual bar, it was relatively straightforward to identify them, figure out the ordering, map it to the corresponding space UUID information which can be scraped from a .plist file on the computer, and then map <i>that</i> UUID code to a user-set name through a renaming interface.
			</p>
			<div class="image">
				<img src="renameView.jpg"/>
				<span>Spaces Renamer view for setting the names of each space</span>
			</div>
			<p>
				There's a fair amount of hack-y code that figures out exactly how to reorganize them, and makes sure everything's centered and looks right when swiping between them, but it all works out great!  Feel free to <a href="//github.com/dado3212/spaces-renamer">check out the code on GitHub</a>.  The GitHub repo also has installation instructions if you'd like to get it set up on your computer.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>