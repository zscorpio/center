$(document).ready(function(){ 	
	$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');	
	$("#rss").click(function(){ 
		$("#sblank").show();
		$("#sother").load("me.php");			
		$body.animate({scrollTop: 643*2}, 1000);		
	});		
}); 