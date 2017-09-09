<?php
	$title = "Alex Beals | The Pack Market";
	include('../../php/header.php');
?>
	<div class="content">
		<article>
			<h3>The Pack Market | December 2014</h3>
			<h4>HTML, CSS, PHP, SQL (MySQL), JS (jQuery)</h4>
			<a class="live" href="https://web.archive.org/web/20161016082921/http://thepackmarket.com/">&#xf0c1;</a>
			<p>
				The Pack Market was a site for purchasing random packs of virtual cards from various sports games, including FIFA
				and MADDEN.  Instead of receiving those players, however, the value of the players can be redeemed into your account
				for purchasing whoever you want later off of the market.
			</p>
			<p>
				By giving a chance to win incredibly valuable packs for a small
				amount of money, this method combines the rush of opening a pack and seeing who you got with the freedom to choose players,
				and possibly win big.
			</p>
			<div class="image">
				<img src="ThePackMarketOld.jpg"/>
				<span>Old The Pack Market front page</span>
			</div>
			<p>
				I originally worked on a this project with another developer using Joomla as our CMS platform, along with our own custom PHP backend for administration and controlling content/available packs/sales and coupons.  However, it became quickly apparent that Joomla was both too much in some areas, and too little in others, so we overhauled the site in 2014 to build our own custom solution.
			</p>
			<div class="image">
				<img src="ThePackMarketNew.jpg"/>
				<span>Freshly updated front page</span>
			</div>
			<p>
				This new page loads quicker, performs faster, and is considerably easier to maintain than the older version.  We additionally overhauled the backend, also written in PHP to make it easier than ever to create packs, modify them, upload specific cards, and adjust the percentage chances of winning individual cards in packs.  By designing our own MVC framework, it also becomes easier to add additional games, such as MADDEN, and a planned expansion into CS:GO.
			</p>
			<p>
				Overall, it was been a fun experience both to work with Joomla on the old site, and to construct a full MVC framework for the new site.  The site is no longer live, but you can <a href="//web.archive.org/web/20161016082921/http://thepackmarket.com/">check out the archive</a>.
			</p>
		</article>
	</div>
<?php include('../../php/footer.php'); ?>