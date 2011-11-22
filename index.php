<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh_CN" lang="zh_CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Scorpio's Center">
	<meta name="author" content="蝎紫">
	<meta name="keywords" content="蝎紫,中心">
	<title>Scorpio's Center</title>
	<link rel="stylesheet" href="./css/style.css" type="text/css">
	<link rel="shortcut icon" href="./img/favicon.png">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){ 	
			$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
			$("#top").click(function(){ 
				$(".left").fadeOut(1000); 
				$body.animate({scrollTop: $('#welcome').offset().top}, 1000);
				$("#welcome").removeClass("opacity"); 
				$("#top").hide();					
			});			
			$("#me").click(function(){ 
				$("#welcome").addClass("opacity"); 			
				$("#other").load("me.php");			
				$body.animate({scrollTop: 643}, 1000);
				$("#top").show();				
			});
			$("#blog").click(function(){ 
				$("#welcome").addClass("opacity"); 			
				$("#other").load("blog.php");			
				$body.animate({scrollTop: 643}, 1000);
				$("#top").show();
			});	
			$("#email").click(function(){ 
				$("#welcome").addClass("opacity"); 			
				$("#other").load("email.php");			
				$body.animate({scrollTop: 643}, 1000);
				$("#top").show();
			});	
			$("#search").click(function(){ 
				$("#welcome").addClass("opacity"); 			
				$("#other").load("account.php");			
				$body.animate({scrollTop: 643}, 1000);
				$("#top").show();
			});					
		}); 
	</script> 	
</head>
<body>
	<div id="container">
		<div id="welcome">
			<div class="part" id="me">
				<p>Something About Me</p>
				<p>What I Want To Tell You</p>
			</div>
			<div class="part" id="blog">
				<p>This Is My Blog</p>
				<p>It Stores My Memory</p>			
			</div>		
			<div class="part" id="email">
				<p>Contact To Me</p>
				<p>Better To E-mail To Me</p>			
			</div>		
			<div class="part" id="lab">
				<p>Public Scorpio's Lab</p>
				<p>New Beta Productions</p>			
			</div>
			<div class="part" id="resume">
				<p>My Resume For HR</p>
				<p>Sorry It Is Only For HR</p>			
			</div>
			<div class="part" id="search">
				<p>Searching Me</p>
				<p>Most My Accounts On Net</p>					
			</div>
			<a href="http://me.zscorpio.com">			
				<div class="part" id="card">
					<p>Web Card</p>
					<p>Another Card Include Me</p>					
				</div>	
			</a>			
			<div class="part" id="site">
				<p>Some Websites</p>
				<p>Which I Always Go To</p>					
			</div>				
		</div>	
		<div id="other">	
		</div>			
		<div class="right" id="top">
			<p>Nothing Interst!?</p>				
			<p>Then Go Back To Nav</p>				
		</div>	
	</div>
</body>
</html>
