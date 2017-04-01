<?php
require_once("funciones_db.php");


function cargarHome(){
	$personas = cargarPersonas();
	$contador = 0;
	
	foreach($personas as $x){
		$foto=$x['foto'];
		$contador++;
	?>
		 <div class="grid_6">
					<div class="img_block fleft">
						<?php if($foto==''){?>
							<img src="images/no-image.png"  class="img_inner" height="235" width="220">
						<?php } else {?>
						<img src="images/team/thumbnail_<?php echo $x['foto'] ?>"  class="img_inner" height="220" width="220">		
						<?php } ?>			
						<span class="l"></span>
						<span class="ll"></span>
						<span class="r"></span>
						<span class="rr"></span>
						<span class="lb"></span>
						<span class="llb"></span>
						<span class="rb"></span>
						<span class="rrb"></span>
					</div>
					
					<div class="extra_wrapper">
						<div class="text1"> <?php echo $x['nombre'] ?></div><br>
						<b><?php echo $x['titulo'] ?><br></b>
						
						<?php echo $x['descripcion'] ?>
					</div>
				</div>
		<?php }

}
function cargarTrabajo(){
	$trabajo = cargarOurWork();
	$contador = 0;
	
	foreach($trabajo as $x){
		$contador++;
	?>
		 <div class="grid_3">
			 	<a href="images/Fotos/<?php echo $x['imagen'] ?>" class="gal">																<div class="img_block">

			 	<img src="images/Fotos/thumbnail_<?php echo $x['imagen'] ?>" alt="" class="img_inner" height="235" width="220">
								<span class="l"></span>
								<span class="ll"></span>
								<span class="r"></span>
								<span class="rr"></span>
								<span class="lb"></span>
								<span class="llb"></span>
								<span class="rb"></span>
								<span class="rrb"></span>
							</div>
					
					</a>
						<div class="title"><a href="#"></a></div>
						<?php  
						if ($contador%4==0){
							?><br><br><?php
						}
					?>

		</div>
		<?php }

}

	
function cargarProyectos(){
	$proyecto = cargarProjects();
	$contador = 0;
	
	foreach($proyecto as $x){
		$contador++;
	?>
		 <div class="grid_3">
			 	<a href="images/Planos/<?php echo $x['imagen'] ?>" class="gal">																<div class="img_block">

			 	<img src="images/Planos/thumbnail_<?php echo $x['imagen'] ?>" alt="" class="img_inner" height="235" width="220">
								<span class="l"></span>
								<span class="ll"></span>
								<span class="r"></span>
								<span class="rr"></span>
								<span class="lb"></span>
								<span class="llb"></span>
								<span class="rb"></span>
								<span class="rrb"></span>
							</div>
					
					</a>
						<div class="title"><a href="#"></a></div>
					<?php  
						if ($contador%4==0){
							?><br><br><?php
						}
					?>

		</div>
		<?php }

}

function cargarPrensa(){
	$prensa = cargarPress();
	$contador = 0;
	
	foreach($prensa as $x){
		$contador++;
	?>
		 <div class="grid_3">
			 	<a href="images/Prensa/<?php echo $x['imagen'] ?>" class="gal">																<div class="img_block">

			 	<img src="images/Prensa/thumbnail_<?php echo $x['imagen'] ?>" alt="" class="img_inner" height="235" width="220">
								<span class="l"></span>
								<span class="ll"></span>
								<span class="r"></span>
								<span class="rr"></span>
								<span class="lb"></span>
								<span class="llb"></span>
								<span class="rb"></span>
								<span class="rrb"></span>
							</div>
					
					</a>
						<div class="title"><a href="#"></a></div>
					<?php  
						if ($contador%4==0){
							?><br><br><?php
						}
					?>

		</div>
		<?php }

}
?>
		
		

