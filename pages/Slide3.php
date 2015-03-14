<?php
	include"pages/slide3/QueEsSlowDeep.php";
	include"pages/slide3/ExplicacionDeLaPractica.php";
	include"pages/slide3/ComoRespirar.php";
	include"pages/slide3/SlowDeepMantra.php";
	class Slide3
	{
		function showSlide3()
		{
?>
			<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-4" data-slide="3">
		
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Aprende <span class="font-semibold">SlowDeep</span></div>
			</div><!-- /row -->
			<?php 
				$queEsSlowDeep = new QueEsSlowDeep();
				$queEsSlowDeep->showQueEsSlowDeep();
				
				$explicacionDeLaPractica = new ExplicacionDeLaPractica();
				$explicacionDeLaPractica->showExplicacionDeLaPractica();
				
				$comoRespirar = new ComoRespirar();
				$comoRespirar->showComoRespirar();
				
				$slowDeepMantra = new SlowDeepMantra();
				$slowDeepMantra->showSlowDeepMantra();
			?>

		</div><!-- /container -->
	</div><!-- /slide3 -->
<?php 
		}
	}
?>