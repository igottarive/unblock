<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>

<title>UnblockMySite Private Browsing</title>
<meta name="description" content="<!--[meta_description]-->">
<meta name="keywords" content="<!--[meta_keywords]-->">
<style type="text/css">
	/* GLOBAL ELEMENTS */
	html,body {
		margin: 0; padding: 0;
		background: linear-gradient(#0594be, #023149);
		font-size: 100%;
		font-family: "trebuchet ms", arial, verdana;
		color: #444;
		text-align: center;
	}
	a {
		color: #fff;
		text-decoration:none; 
	}
	a:hover {
		text-decoration: underline;
	}
	p {
		color: #444;
		line-height: 170%; margin: 5px 0;
	}
	p, td, th, ul {
		font-size: 80%;
	}
	
	/* LAYOUT */
	#wrapper {
		width: 700px;
		padding-top: 15vh;
		margin: 0 auto 0 auto;
		text-align: left;
	}
	
	#content {
		background: transparent;
		padding: 20px;
	}
	
	/* ELEMENTS */
	h1 {
		font: 250% "trebuchet ms";
		color: #fff;
		padding: 40px 0 10px 10px;
		margin: 0;
	}
	h1 span {
		color: #6BAD42;
	}
	h1 a {
		color: #FFFFFF;
	}
	h1 a:hover {
		color: #6BAD42;
		text-decoration: none;
	}
	h1 a:hover span {
		color: #FFFFFF;
	}
	h2 {
		font: 100% arial, verdana, sans-serif;
		color: #bcd6dd;
		text-align: center;
		padding-bottom: 3px;
		margin: 25px 0 10px 0;
	}
	p+p {
		padding-top: 1em;
	}
	form.form {
		font-size: 80%;
		background-color: transparent;
		padding: 10px;
		text-align: center;
	}
	#options {
		list-style-type: none;
		width: 500px;
		margin: 10px; padding: 0;
	}
	#options li { 
		float: left;
		width: 240px;
		border-left: 5px solid #ccc;
	}
	#footer {
		margin: 10px 0 0 0; 
		font-size: 80%;
		color: #ccc;
	}
	#nav {
		text-align: right;
		list-style-type: none;
		font-size: 80%;
		border-top: 1px solid #ccc;
		margin: 20px 0 0 0;
		padding: 0;
	}
	#nav li {
		padding: 0 5px 0 5px;
		display: inline;
		border-left: 1px solid #ccc;
	}
	.left {
		float: left;
	}
	
	/* STYLES */
	.first {
		margin-top: 0;
	}
	input.textbox {
		width: 100%;
		font: 120% arial, verdana, sans-serif;
		border-radius: 4px;
		border: none;
	}
	input.button {
		margin-top: 10px;
    font-family: arial, verdana, sans-serif;
    font-size: 120%;
    color: #3379b7;
    font-weight: bold;
    background-color: #fff;
    border: none;
    text-align: center;
    min-width: 15%;
    /* margin: 0 auto; */
    border-radius: 4px;
    text-transform: uppercase;
    padding: 3px 10px;
	}
	label {
		font-weight: light;
	}
	#error {
		border: 1px solid red;
		border-left: 5px solid red;
		padding: 2px;
		margin: 5px 0 15px 0;
		background: #eee;
	}
	
	/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
	table {
		border-color: #666;
		border-width: 0 0 1px 1px;
		border-style: solid;
		width: 50%;
	}
	th {
		font-size: normal;
		background: #ccc;
		border-width: 2px;
	}
	td, th {
		border-color: #666;
		border-width: 1px 1px 0 0;
		border-style: solid;
		padding: 2px 10px 2px 10px;
	}
	td {
		background-color: #EEEEEE;
	}
	.full-width {
		width: 98%;
	}
	.large-table { 
		width: 75%; 
		margin-top: 15px;
	}
	.large-table td, .large-table th {
		padding: 5px;
	}
	td.small-note {
		font-size: 60%;
		padding: 2px;
		text-align: right;
	}
	
	/* TOOLTIP HOVER EFFECT */
	label {
		font-weight: bold;
		line-height: 20px;
		cursor: help;
	}
	#tooltip {
		width: 20em;
		color: #fff;
		font-size: 12px;
		font-weight: normal;
		padding: 5px;
		border: 3px solid #333;
		text-align: left;
		background-color: #555555;
	}
</style>
<?=injectionJS();?>
<script type="text/javascript">
	window.addDomReadyFunc(function() {
		document.getElementById('options').style.display = 'none';
		document.getElementById('input').focus();
	});
	disableOverride();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86278502-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86278502-2');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- homepage -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1017297966155312"
     data-ad-slot="1318282260"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="index.php"><?php
			# Just a bit of PHP to auto-color a multiple word name
			global $themeReplace;
			if (isset($themeReplace['site_name'])) {
				$wc=0;
				$words = explode(' ', $themeReplace['site_name']);
				foreach ($words as $word) {
					$wc++;
					if ($wc%2==1) {
						echo $word.' ';
					} else {
						echo '<span>'.$word.'</span> ';
					}
				}
			}
		?></a></h1>
	</div>
	<div id="content">

		<!-- CONTENT START -->

		<!--[error]-->

		<h2 class="first">Enter any website address below to enjoy full and unlimited access to the site. Select the nearest server to your location for faster performance.</h2>

		<!--[description]-->


		<!--[index_above_form]-->

		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
			<input type="text" name="u" id="input" size="40" class="textbox">
			<input type="submit" value="Go" class="button"> &nbsp; <a style="margin-top: 10px;
    font-family: arial, verdana, sans-serif;
    font-size: 120%;
    color: #3379b7;
    font-weight: bold;
    background-color: #fff;
    border: none;
    text-align: center;
    min-width: 15%;
    /* margin: 0 auto; */
    border-radius: 4px;
    text-transform: uppercase;
    padding: 3px 10px;" style="cursor:pointer;" onclick="document.getElementById('options').style.display=(document.getElementById('options').style.display=='none'?'':'none')">options</a>
			<ul id="options">
				<?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'><label for="'.$option['name'].'" class="tooltip" onmouseover="tooltip(\''.$option['escaped_desc'].'\')" onmouseout="exit();">'.$option['title'].'</label></li>';?>
			</ul>
			<br style="clear: both;">
		</form>
	 
		<!--[index_below_form]-->

		<!-- CONTENT END -->
	 
		<ul id="nav">
			<li class="left"><a href="index.php">Home</a></li>
			<li class="left"><a href="edit-browser.php">Edit Browser</a></li>
			<li class="left"><a href="cookies.php">Manage Cookies</a></li>
			<li><a href="disclaimer.php">Disclaimer</a></li>            
		</ul>
	</div>
	<div id="footer">
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	</div>
</div>
</body>
</html>