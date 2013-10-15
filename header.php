<?php
session_start();
require_once('conn.php');

if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Today's Schedule</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]>
<style type="text/css">
#sidebar #calendar {
	background-position: 0px 20px;
}
</style>
<![endif]-->
</head>
<body>
<div id="logo">
	<h1><a href="#">Today's Schedule</a></h1>
	<h2>By Sweekriti Smith</h2>
</div>
<div id="menu">
	<ul>
		<li class="first"><a href="index.php" accesskey="1" title="">Home</a></li>
		<li><a href="create.php" accesskey="2" title="">Create Event</a></li>
		<li><a href="preview.php" accesskey="2" title="">Your Events</a></li>
		
	</ul>
	<div id="search">
		<form name="search" method="post" action="search.php">
			<fieldset>
			<input id="s" type="search" name="s" placeholder="Enter occasion name" />
			<input id="x" type="image" name="imageField" src="images/img10.jpg" />
			</fieldset>
		</form>
	</div>
</div>
<hr />
<div id="banner"><img src="images/bg.png" alt="" width="960" height="147" /></div>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h2 class="title"><a href="#">Welcome to Today's Schedule</a></h2>
			<div class="entry">
				<h3>Your daily scheduler.</h3>
				<img src="images/logo.jpg" alt=""  class="left" />
				<p>			