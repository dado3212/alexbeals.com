<?php
	$title = "Alex Beals | DartDine";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>DartDine | February 2016</h3>
			<h4>Java (Android)</h4>
			<a class="live" href="//alexbeals.com/projects/dartdine">&#xf0c1;</a>
			<a class="github" href="//github.com/dado3212/dart-dine">&#xf09b;</a>
			<p>
				DartDine was the culmination project for CS89, Human Computer Interaction.  Our goal was to revamp the Dartmouth meal site, which is located at http://nutrition.dartmouth.edu:8088. Our goal was to make a mobile app that would solve all of the UX/UI problems that the current site had, especially when accessing it on mobile, and also combine all dining information into a useful format.
			</p>
			<p>
				One of the major contributions I made to the project was fully building out the app, which was the main product.  We decided to develop for Android, as the development environment is easier to quickly build prototypes in.  Due to the nature of the product, the app was constructed as a proof of concept, and is not fully functional. For example, it currently doesn't pull the food data from the working site, despite having a hidden API that I could have leveraged. Additionally, ideally I would've created a function that would guess at how full the different dining locations were based on measured data for a few weeks. However, in the PoC, that data is randomly generated on application open.
			</p>
			<div class="image">
				<img src="MainMenu.png"/>
				<span>DartDine home page</span>
			</div>
			<p>
				This is what the home page looks like: it provides customized open times based on what day it is, along with specials for each location, and buttons for specifics for the three main meal areas.
			</p>
			<div class="image">
				<img src="FoCo.png"/>
				<span>FoCo main page</span>
			</div>
			<p>
				Clicking on 'FoCo' brings you to this page, one of the three meal home pages.  It displays more specific time information, as well as estimated crowd levels.  Clicking "Search Menu" will show all of the menu items in a searchable, scrollable list, and displays nutritional information by tapping on any of the food items, as displayed below.
			</p>
			<div class="image">
				<img src="Nutrition.png"/>
				<span>Menu item nutrition display</span>
			</div>
			<p>
				Going back to the "FoCo Main Page", and clicking on "Make a New Meal" will take you to the meal page (below), where you can choose items to add to a meal, and it will keep track of all the health statistics of your constructed meal, including calories, total fat, and protein. You can also save it for later use.
			</p>
			<div class="image">
				<img src="MealCreation.png"/>
				<span>Build a meal screen</span>
			</div>
			<p>
				The "Load a Meal" button, from the meal home page, will allow you to load a meal from previously saved options.
			</p>
			<div class="image">
				<img src="SavedMeals.png"/>
				<span>Load meal screen</span>
			</div>
			<p>
				Overall, it was a fun project to hack out, even though it will in all likelihood never go beyond the proof of concept stage.  You can download the .apk file to install on your Android phone, and check out the source code on <a href="//github.com/dado3212/dart-dine">my GitHub</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>