<?php $paginas=$numerosPaginasRetrato($tienda_config['productosPorPagina']) ;
	
?>
<!-- PAGINACION -->
<div class="cajaPaginacion" >
	
<!-- FLECHA ANTERIOR -->
	<p <?php echo $paginaActual()<=1 ? 'disabled' : false ?>">
		<a href="tiendaRetrato.php?p=<?php echo $paginaActual()-1 ?>">Anterior</a>
	</p>
	<!-- NUMERO PAGINAS -->
	<?php for($i=1;$i<=$paginas;$i++) :?>
		<p  <?php echo ($paginaActual()==$i) ? 'active' :false ?>">
			<a href="tiendaRetrato.php?p=<?php echo $i ?>"> <?php echo $i ?> </a>
		</p>
	 		
	<?php endfor ?>
	
	<!-- FLECHA SIGUIENTE -->
	 	
	<p <?php echo $paginaActual()>=$paginas ? 'disabled':false ?>"><a href="tiendaRetrato.php?p=<?php echo $paginaActual()+1 ?>" >Siguiente</a></p>
	 		
</div>