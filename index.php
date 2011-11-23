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
				$("#welcomeblank").hide();
				$(".left").fadeOut();			
				$body.animate({scrollTop: -643}, 1000);
				$("#top").hide(1000);					
			});		
			$("#welcome div").click(function(){
				$("#welcomeblank").show();						
				var click_id = $(this).attr("id");
				var html="all.html"+" "+"#about"+click_id;
				$("#other").load(html);	
				$body.animate({scrollTop: 643}, 1000);
				$("#top").show(1000);
				$.getScript("js/wp.js");
				document.title = click_id +"-Scorpio's Center"				
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
			<div class="part" id="account">
				<p>Searching Me</p>
				<p>Most My Accounts On Net</p>					
			</div>		
			<div class="part" id="site">
				<p>Some Websites</p>
				<p>Which I Always Go To</p>					
			</div>
			<a href="http://me.zscorpio.com">			
				<div class="part" id="card">
					<p>Web Card</p>
					<p>Another Card Include Me</p>					
				</div>	
			</a>	
			<a href="http://resume.zscorpio.com/">
				<div class="part" id="resume">
					<p>My Resume For HR</p>
					<p>Sorry It Is Only For HR</p>			
				</div>
			</a>			
		</div>	
		<div id="welcomeblank" class="blank">
		</div>
		<div class="right" id="top">
			<p>Nothing Interst!?</p>				
			<p>Then Go Back To Nav</p>				
		</div>	
		<div id="other">	
		</div>
		<div id="sblank" class="blank">
		</div>		
		<div id="sother">	
		</div>					
	</div>
</body>
</html>
