<?php
	class Menu
	{
		function showMenu()
		{
?>
		
		<div class="navbar navbar-fixed-top" data-activeslide="1">
		
		<div class="container">
			<img src="images/s04.png" class ="imagenMenu">
			<div class="fb-like col-sm-4 com-md-12 col-sm-offset-8 col-md-offset-8" data-href="http://www.slowdeep.com" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="nav-collapse collapse navbar-responsive-collapse">
			
				<ul class="nav ">
					
					<li data-slide="1" class="col-10 col-sm-1 col-md-3"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">INICIO </span></a></li>
					<li data-slide="2" class="col-10 col-sm-2 col-md-3"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">QUIENES SOMOS</span></a></li>
					<li data-slide="3" class="col-10 col-sm-2 col-md-3"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">APRENDE SLOWDEEP</span></a></li>
					<li data-slide="4" class="col-10 col-sm-2 col-md-3"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">SLOWDEEP ANTI ESTRES </span></a></li>
					<li data-slide="5" class="col-10 col-sm-3 col-md-3"><a id="menu-link-5" href="#slide-5" title="Next Section"><span class="icon icon-heart"></span> <span class="text"> CAPACITACIONES</span></a></li>
					<li data-slide="6" class="col-10 col-sm-1 col-md-3"><a id="menu-link-6" href="#slide-6" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">CONTACT0</span></a></li>
					
				</ul>
				
				<div class="row">
					
					<div class="col-sm-2 active-menu"></div>
					
				</div>
			</div><!-- /.nav-collapse -->
			
		</div><!-- /.container -->
	</div><!-- /.navbar -->
<?php 
		}
	}
?>