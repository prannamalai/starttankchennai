<!doctype>
<html>

<head>
<meta charset="utf-8">

<meta http-equiv="cache-control" content="no-cache" /> 
<meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml" /> 
<meta name="HandheldFriendly" content="True" /> 
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta name="description" content="Shared innovation space for startups in Boston" />

<link rel="shortcut icon" href="http://where-spotlight.s3.amazonaws.com/start-tank/favicon.png" />
<link rel="apple-touch-icon" href="https://www.paypalobjects.com/en_US/i/pui/apple-touch-icon.png" />
<link href="http://starttank.com/c/master.css" rel="stylesheet" type="text/css" />
<link href="/42vmy3zq/c/chennai.css" rel="stylesheet" type="text/css" />

<!--[if IE]>
<link href="../c/desktop.css" rel="stylesheet" type="text/css" />
<link href="../c/ie9.css" rel="stylesheet" type="text/css" />
<style>.startups img, .mentors img {opacity:1;}</style>
<![endif]-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../j/ppmn.js"></script>
<script type="text/javascript" src="../j/nbw-parallax.js"></script>
<script type="text/javascript" src="../j/jquery.inview.js"></script>


<title><?php 
	$uri = "{$_SERVER['REQUEST_URI']}";
	$uri_clean = ucwords(basename($uri));
	if ($uri_clean == NULL){ echo "Start Tank";}
	else { echo $uri_clean . " | Start Tank"; }

?></title>

<script type="text/javascript">
$(document).ready(function(){
	$("#rulesandregulations").click(function(){
		$("#rulesandregulations_content, #blackbg").show();
	});
	$("a.close").click(function(){
		$("#rulesandregulations_content, #blackbg").hide();
	});
});
</script>
</head>

<body class="<?php 
	$uri = "{$_SERVER['REQUEST_URI']}";
	$random_photo = "about" .rand(1,4) ." ";
	echo $random_photo .basename($uri) .("_page");
	?>">
	
	<div class="navParent">
		<div class="navChild">
			<a href="/"><img class="logo" src="http://where-spotlight.s3.amazonaws.com/start-tank/starttank_0093c2.svg"/></a>
			<ul>
				<?php /*
				<li><a href="calendar">Calendar</a></li>
				<li><a href="/42vmy3zq/press">Press</a></li>
				*/ ?>
				<li class="contact"><a href="http://paypal.com"><img src="https://where-spotlight.s3.amazonaws.com/start-tank-chennai/paypal.svg"></a></li>
				<li class="contact"><a href="/42vmy3zq/incubation">Apply</a></li>
				<li><a href="/42vmy3zq/community"><span class="hideOnMobile">Current </span>Startups</a></li>
				<li><a href="/42vmy3zq/about">About</a></li>
				
			</ul>
		</div><!-- /navChild -->
	</div><!-- /navParent -->
