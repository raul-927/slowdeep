<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
		initial-scale=1">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/
		respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php 
			include"layout/Head.php";
			include"layout/Menu.php";
			include"layout/Header.php";
			include"layout/Arrows.php";
			include"pages/Slide1.php";
			include"pages/Slide2.php";
			include"pages/Slide3.php";
			include"pages/Slide4.php";
			include"pages/Slide5.php";
			include"layout/Footer.php";
			
			$head = new Head();
			$head->ShowHead();
		?>
	</head>
	<body >
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
	  			var js, fjs = d.getElementsByTagName(s)[0];
	  			if (d.getElementById(id)) return;
	  			js = d.createElement(s); js.id = id;
	  			js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
	  			fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk')
		);
	</script>
		<?php 
			$menu = new Menu();
			$menu->showMenu();
			
			$arrows = new Arrows();
			$arrows->showArrows();
			
			$slide1 = new Slide1();
			$slide1->showSlide1();
			
			$slide2 = new Slide2();
			$slide2->showSlide2();
			
			$slide3 = new Slide3();
			$slide3->showSlide3();
			
			$slide4 = new Slide4();
			$slide4->showSlide4();
			
			$slide5 = new Slide5();
			$slide5->showSlide5();
			
			$footer = new Footer();
			$footer->showFooter();
		?>	
	</body>
	<!-- SCRIPTS -->
	<script src="js/html5shiv.js"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="js/script.js"></script>
	
	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>
</html>