<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>Cape Cod Healthcare Foundation</title>
		<link rel="stylesheet" href="css/style.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script>
				
			$(document).ready(function(){
			$("div.pane").hide();
			$("div.pane:first").show();
			$("div.toggle").hide();

			
			$("a#link1").click(function(event){
			event.preventDefault();
			$(".pane").hide("slow");
			$("#pane2").show("slow");
			});
			
			$("a#link2").click(function(event){
			event.preventDefault();
			$(".pane").hide("slow");
			$("#pane3").show("slow");
			});
							
			$("a.back").click(function(event){
			event.preventDefault();
			$("div.pane").hide("slow");
			$("div.pane:first").show("slow");
			});	

			$("#contact-sidebar a").click(function(event){
				event.preventDefault();
				$(this).next("p.answer").toggle();
			});
			
			
			$('input[type=checkbox]').click(function(){
				if ( this.checked == true ) {
					$(this).parent().next(".hidden").show();	
				}
				else
				{
					$(this).parent().next(".hidden").hide();	
				}
				
				});
				  
				$('a.show-gifts').click(function(event){
					event.preventDefault();
					$(this).parent().next(".toggle").toggle("slow");	
				
				});	
			


			
			
			

	});

	</script>

	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.php"><img src="http://placehold.it/300x100&text=LOGO" /></a>
				<a id="donate" href="donate.php">Donate Online Now</a>
			</header>
			
			<nav>
			<a href="give.php">Ways To Give</a>
			<a href="planned-giving.php">Planned Giving</a>			
			<a href="lightkeepers.php">Lightkeepers</a>
			<a href="events.php">Events</a>
			<a href="who-we-are.php">About Us</a>
			<a href="contact.php">Contact Us</a>
			<a id="search" href="#">Search</a>
			</nav>
		</div>