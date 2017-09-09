<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			if (preg_match("/(iPhone|iPod|iPad|Android|BlackBerry|Mobile)/i", $_SERVER['HTTP_USER_AGENT'])) {
				?><meta name="viewport" content="width=400"><?php
			}
		?>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/home-apple-touch-icon.png?v=QEMGLr35xP">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/home-favicon-32x32.png?v=QEMGLr35xP">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/home-favicon-16x16.png?v=QEMGLr35xP">
		<link rel="manifest" href="/assets/favicon/manifest.json?v=QEMGLr35xP">
		<link rel="mask-icon" href="/assets/favicon/home-safari-pinned-tab.svg?v=QEMGLr35xP" color="#127ec7">
		<link rel="shortcut icon" href="/assets/favicon/home-favicon.ico?v=QEMGLr35xP">
		<meta name="msapplication-config" content="/assets/favicon/browserconfig.xml?v=QEMGLr35xP">
		<meta name="theme-color" content="#127ec7">

		<!-- SEO and Semantic Markup -->

		<meta name="robots" content="index, follow, archive">
		<meta charset="utf-8" />
		<meta http-equiv="Cache-control" content="public">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:creator" content="@alex_beals">

		<meta property="og:type" content="website">
		<meta property="og:title" content="Alex Beals | Programmer">
		<meta property="og:image" content="https://alexbeals.com/assets/images/solid-logo.jpg">
		<meta property="og:url" content="https://alexbeals.com">
		<meta property="og:description" content="Check out my resume, some of my past projects, or get in contact with me.">

		<meta name="description" content="Check out my resume, some of my past projects, or get in contact with me.">

		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
	</head>
	<body>
		<div class="header">
			<div class="link">
				<a href="/#contact">Contact Me</a>
			</div>
			<div class="link">
				<a href="/#portfolio">Portfolio</a>
			</div>
			<div>
				<a href="//alexbeals.com">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="logo" x="0px" y="0px" width="150px" height="80px" viewBox="0 0 145 66">
						<g>
							<path id="logoPath" fill="none" stroke="grey" stroke-width="6" stroke-miterlimit="10" d="M66.017,2.866L83.128,22.31  C87.251,11.052,98.035,3,110.721,3c16.238,0,29.403,13.165,29.403,29.404c0,16.24-13.165,29.404-29.403,29.404  c-8.653,0-16.434-3.737-21.813-9.688L54.479,12.979C49.09,6.86,41.198,3,32.404,3C16.165,3,3,16.165,3,32.404  c0,16.24,13.165,29.404,29.404,29.404c12.686,0,23.495-8.032,27.618-19.291l17.084,19.426"/>
						</g>
					</svg>
				</a>
			</div>
			<div class="link">
				<a href="//blog.alexbeals.com">Blog</a>
			</div>
			<div class="link">
				<a href="//cydia.alexbeals.com">Cydia Repo</a>
			</div>
			<button class="menu"></button>
			<ul class="lowerMenu">
				<li><a href="/#portfolio">Portfolio</a></li>
				<li><a href="/#contact">Contact Me</a></li>
				<li><a href="//blog.alexbeals.com">Blog</a></li>
				<li><a href="//cydia.alexbeals.com">Cydia Repo</a></li>
			</ul>
		</div>
