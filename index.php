<?php $title = 'Sitecore 6: New User training';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title><?php print $title;?></title>
	<script type="text/javascript" src="//use.typekit.net/cfo3gqy.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.scrollTo-1.4.3.1.min.js"></script>
	<script src="js/jquery.scrollorama.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.scrolldeck.js"></script>
	<script>
	  $(document).ready(function() {
			var deck = new $.scrolldeck({
				easing: 'easeInOutExpo'
			});
			// Table of Contents
			$('#toc_menu').hide();
			$('a.toc-link').mouseover(function(){
				$('#toc_menu').show();
				return false;
			});
			$('.slide').click(function(){
				$('#toc_menu').hide();
			});
			buildTOC('h2','toc_menu');
	  });
	</script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="logo">
				<img src="img/sheridan-logo.png" alt="Sheridan College logo" />
			</div>
			<h1><?php print $title;?></h1>
		</div>
		<a class="toc-link" href="#">Table of Contents</a>
		<nav id="toc_menu"></nav>
	</div>


	<div class="slide">
		<div class="container">
			<h2>What is Sitecore?</h2>
			<p>
				Sitecore is a commercial, enterprise-level Content Management System (CMS).
			</p>
			<img src="img/sitecore-logo.gif" class="center" />
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>What is a Content Management System?</h2>
			<p>
				A Content Management System (CMS) is a web application designed to make managing content on a website easier.
			</p>
			<h3 class="animate-build" data-build="1" data-animation="fly-in-left">Why Use a CMS?</h3>
			<ol>
				<li class="animate-build" data-build="2">Users do not have to edit code to update content</li>
				<li class="animate-build" data-build="3">Users can simply login to a website and make changes in a graphical user interface</li>
			</ol>
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Editing using a Content Management System</h2>
			<img src="img/edit-cms.png" alt="Screenshot of the Sitecore CMS" class="center animate-in" data-animation="fly-in-left">
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Not Using a Content Management System</h2>
			<img class="center animate-in" src="img/edit-nocms.png" alt="HTML file in Sublime Text editor" data-animation="fly-in-right">
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Examples of Content Management Systems</h2>
			<div class="half">
				<p>Other examples of CMS' include:</p>
				<ul>
					<li>WordPress</li>
					<li>Drupal</li>
					<li>Tumblr</li>
					<li>Blogger/Blogspot</li>
				</ul>
			</div>
			<div class="half aside animate-in" data-animation="fly-in-right">
				<p>
					Some of these are designed for a specific purpose (e.g. blogs) while others are more flexible (e.g. Drupal and Sitecore).
				</p>
			</div>
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Training Reference Links</h2>
			<p>
				Please copy the following links for future reference.
			</p>
			<ol>
				<li class="animate-build" data-build="1">
					Instruction Manual – <a href="http://web.sheridanc.on.ca/sc6train">web.sheridanc.on.ca/sc6train</a>
				</li>
				<li class="animate-build" data-build="2">
					Slides – <a href="http://web.sheridanc.on.ca/sc6train/slides">web.sheridanc.on.ca/sc6train/slides</a>
				</li>
			</ol>
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Let's Get Started</h2>
			<p>
				Log in to the training server using your Sitecore username and password.
			</p>
			<h3 class="center">
				<a href="http://sc6train.sheridancollege.ca/sitecore/login" target="_blank">sc6train.sheridancollege.ca/sitecore/login</a>
			</h3>
		</div>
	</div>
	
	<div class="slide">
		<div class="container">
			<h2>Important Links</h2>
			<ul>
				<li class="animate-build" data-build="1">
					Instruction Manual – <a href="http://web.sheridanc.on.ca/sc6train">web.sheridanc.on.ca/sc6train</a>
				</li>
				<li class="animate-build" data-build="2">
					Slides – <a href="http://web.sheridanc.on.ca/sc6train/slides">web.sheridanc.on.ca/sc6train/slides</a>
				</li>
				<li class="animate-build" data-build="3">
					Training Server <b>(sc6train)</b> – <a href="http://sc6train.sheridancollege.ca/sitecore/login">sc6train.sheridancollege.ca/sitecore/login</a>
				</li>
				<li class="animate-build" data-build="4">
					Real SiteCore CMS <b>(sc6cms)</b> – <a href="http://sc6cms.sheridancollege.ca/sitecore/login">sc6cms.sheridancollege.ca/sitecore/login</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2>Contact</h2>
			
			<p>
				Christina Holly – <a href="mailto:christina.holly@sheridancollege.ca">christina.holly@sheridancollege.ca</a>
			</p>
			<p>
				Missing pages? Old pages? – <a href="mailto:askmarketing@sheridancollege.ca">askmarketing@sheridancollege.ca</a>
			</p>
			
			<h3>Need a username and password?</h3>
			<ol>
				<li>Use the Forgot Password form on the login page</li>
				<li class="animate-build" data-build="1">Contact Jean Lu to have one created – <a href="mailto:jean.lu@sheridancollege.ca">jean.lu@sheridancollege.ca</a></li>
			</ol>
		</div>
	</div>

	<div class="slide">
		<div class="container">
			<h2 class="center">Thank you &nbsp; :)</h2>
		</div>
	</div>

	<script>
	$(document).ready(function(){
		jQuery(function() {
			jQuery('a[href*=#]').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var $target = jQuery(this.hash);
					var $url = this.hash.slice(1);
					var $scrollTime = 600;

					function updateUrl() {
						window.location.hash = encodeURIComponent($url);
					}
					$target = $target.length && $target || jQuery('[name=' + $url + ']');
					if ($target.length) {
						var targetOffset = $target.offset().top;
						jQuery('html,body').animate({scrollTop: targetOffset - 160}, $scrollTime);
						//setTimeout(updateUrl, $scrollTime + 100)
						return false;
					}
				}
			});
		});
	});
	// Build TOC
	function buildTOC(findTag, whereGoes) {
		var anchorCount = 0;
		// Create a list that will hold the TOC
		var List = $("<ul id='theTOC'>");

		// for each one of the header tags, create a new named anchor and insert it into, the header tag. Then add a new link to the list that points to the named anchor
		$("div:not([id=nav]) " + findTag).each(function(){
			$(this).html("<a name='toc" + anchorCount + "'></a>" + $(this).html());
			List.append($("<li><a href='#toc" + anchorCount++ + "'>" + $(this).text() + "</a></li>"));
		});
		$("#" + whereGoes).append(List);
	}
	</script>
</body>
</html>