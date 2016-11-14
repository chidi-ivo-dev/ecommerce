<!doctype html>
<?php
	include("includes/db-connect.php");

	// session
	session_start();

?>
<html>
	<head>
		<!-- basic page -->
		<meta charset="utf-8">
		<meta name="description" content="">
			<meta name="author" content="">
		<title>Chairman's Bestfriend </title>

		<!-- mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- font -->
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,500i,600,700" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

		<!-- css -->
		<style>
			@import "css/styles.css";
		</style>

		<!-- js -->
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
		<script type="text/javascript" src="js/main.js"></script> 

		<!-- favicon -->
		<link rel="icon" type="image/png" href="img/favicon.png">	
	</head>
	<header id="header">
		<div class="container">
			<div class="row top-section">
			  	<div class="one-half column">
			    	<a href="home.php"><img class="logo" src="img/logoLettermark.png"></a>
			    </div>
			    <div class="four columns search-input">
			    	<form action="search.php" method="GET">
						<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
						<input class="u-full-width" type="text" name="query" placeholder="Search" id="searchInput">
					</form>
			    </div>
			    <div class="one column u-pull-right icon-text">
			    	<a href="cart.php"><img class="u-full-width" src="img/shoppingCart.png"></a>
			    	<div class="center-align"><a href="cart.php">Cart</a></div>
			    </div>
			    <div class="one column u-pull-right icon-text">
			    	<a href="login.php"><img class="u-full-width" src="img/account.png"></a>
			    	<div class="center-align"><a href="login.php">Account</a></div>
			    </div>
			</div>
		</div>
		<div class="row" id="header-border"></div>
		<div class="container">
			<div class="row">
				<div class="eight columns">
					<ul class="navbar-list">
						<li class="navbar-item">
							<a class="navbar-link" href="catalog.php?category=Desks">Desks</a>
							<a class="navbar-link" href="catalog.php?category=Chairs">Chairs</a>
							<a class="navbar-link" href="catalog.php?category=Tables">Tables</a>
							<a class="navbar-link" href="catalog.php?category=Reception">Reception</a>
							<a class="navbar-link" href="catalog.php?category=Storage">Storage</a>
						</li>
					</ul>
				</div>
				<div class="four columns contact">
					<ul class="navbar-list">
						<li class="navbar-item">
							<p class="u-pull-right">Let us help you: 1 (888) 888-4507</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<body>
