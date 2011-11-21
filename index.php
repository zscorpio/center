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
			$("#me").click(function(){ 
				$("#welcome").fadeOut("slow"); 						
				$("#aboutme").load("me.php");
			});
			$("#blog").click(function(){ 
				$("#welcome").fadeOut("slow"); 						
				$("#aboutblog").load("http://www.zscorpio.com/");
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
				<p>All My Accounts On Net</p>					
			</div>			
		</div>
		<div id="aboutme">
		</div>
		<div id="aboutblog">
		</div>		
	</div>
</body>
</html>
