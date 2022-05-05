<?php require_once 'admin/config.php'; 
// Función que comprueba si existe conexión con la BBDD
	$conexion=function() use($db_config,$dsn){
		try {
			return new PDO($dsn,$db_config['user'],$db_config['pass']);
			
		} catch (PDOException $e) {
			return false;
			
		};
	};
	// // Base de datos recuperar contraseña 
	// $conexionContrasena=function() use($dsnContrasena,$db_contrasena){
	// 	try {
	// 		return new PDO($dsnContrasena,$db_contrasena['user'],$db_contrasena['pass']);
			
	// 	} catch (PDOException $e) {
	// 		return false;
			
	// 	};
	// };
	// Funcion que se reutilizará varias veces para que se pueda hacer la paginacion y se enseñen los productos 
	$paginaActual=function()  {
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;
	};
		
	
	// Funcion para obtener los productos de la base de datos y enseñarlos. Creo una funcion ya que la llamare varias veces desde diferentes puntos
	$obtenerProductos=function($productosPorPagina) use($conexion,$paginaActual){
    
		$productosInicio=$paginaActual()>1 ? $paginaActual() * $productosPorPagina-$productosPorPagina : 0 ;
	
		$stmt=$conexion()->prepare("SELECT * FROM productos LIMIT $productosInicio,$productosPorPagina");
	
		$stmt->execute();
	
		return $stmt->fetchAll();
	};
	// Funcion que localice el producto que estamos señalando y se enseñe o se hagan lo cambios pertienentes. Dependiendo de cuando se utilice la función.
	$recogerId=function($id) {
		return isset($id) ? (int)$id : false;
	};
	
	// Funcion para poder obtener el id del producto seleccionado y así editarlo para saber a quien estamos haciendo referencia. Se utilizará además para la paginación y para abrir el producto en especifico y ver su descripción. 
	$obtenerProductosPorId=function($id) use($conexion){
		$stmt=$conexion()->prepare("SELECT * FROM productos WHERE id=:id LIMIT 1");
		$stmt->execute([
			':id'=>$id
		]);
		return $stmt->fetch();
	};
	
// Función de filtrado de productos que solo sean Fan arts 
$tiendaFanArts=function($productosPorPagina) use($conexion,$paginaActual){
	$fanArt='FAN ARTS';
	
	$productosInicio= $paginaActual()>1 ? $paginaActual()*$productosPorPagina-$productosPorPagina : 0;
	
	$stmt=$conexion()->prepare("SELECT * FROM productos WHERE categoria LIKE :fanArt LIMIT $productosInicio,$productosPorPagina");
	
	$stmt->execute([
		':fanArt'=>$fanArt
	]);
	
	return $stmt->fetchAll();
	
	
};
	
// Función de filtrado de productos que solo sean retratos 
$tiendaRetrato=function($productosPorPagina) use($conexion,$paginaActual){
	$Retrato='RETRATO';
	
	$productosInicio= $paginaActual()>1 ? $paginaActual()*$productosPorPagina-$productosPorPagina : 0;
	
	$stmt=$conexion()->prepare("SELECT * FROM productos WHERE categoria LIKE :Retrato LIMIT $productosInicio,$productosPorPagina");
	
	$stmt->execute([
		':Retrato'=>$Retrato
	]);
	
	return $stmt->fetchAll();
	
};
// Función de filtrado de productos que solo sean originales 
	
$tiendaOriginal=function($productosPorPagina) use($conexion,$paginaActual){
	$Original='ORIGINAL';
	
	$productosInicio= $paginaActual()>1 ? $paginaActual()*$productosPorPagina-$productosPorPagina : 0;
	
	$stmt=$conexion()->prepare("SELECT * FROM productos WHERE categoria LIKE :Original LIMIT $productosInicio,$productosPorPagina");
	
	$stmt->execute([
		':Original'=>$Original
	]);
	
	return $stmt->fetchAll();
	
};
	
	// PAGINACION PARA PODER DELIMITAR LOS PRODUCTOS.
	//Tienda General 
	$numerosPaginas=function($productosPorPagina) use($conexion){
		$stmt=$conexion()->prepare("SELECT COUNT(*) filas FROM productos");
		$stmt->execute();
	
		$totalFilas=$stmt->fetch()['filas'];
	
		return ceil($totalFilas/$productosPorPagina);
	};
	// Tienda Original | Paginacion
	$numerosPaginasOriginal=function($productosPorPagina) use($conexion){
		$Original='ORIGINAL';
		
		$stmt=$conexion()->prepare("SELECT COUNT(*) filas FROM productos WHERE categoria LIKE :Original ");
			
		$stmt->execute([
			':Original'=>$Original
		]);
	
		$totalFilas=$stmt->fetch()['filas'];
	
		return ceil($totalFilas/$productosPorPagina);
	};
	// Tienda Fan Arts | Paginacion 
	$numerosPaginasFanArts=function($productosPorPagina) use($conexion){
		$fanArt='FAN ARTS';
		$stmt=$conexion()->prepare("SELECT COUNT(*) filas FROM productos  WHERE categoria LIKE :fanArt ");
			
		$stmt->execute([
			':fanArt'=>$fanArt
		]);
	
		$totalFilas=$stmt->fetch()['filas'];
	
		return ceil($totalFilas/$productosPorPagina);
	};
	// Tienda Retrato  | Paginacion
	$numerosPaginasRetrato=function($productosPorPagina) use($conexion){
		$Retrato='RETRATO';
		$stmt=$conexion()->prepare("SELECT COUNT(*) filas FROM productos  WHERE categoria LIKE :Retrato ");
			
		$stmt->execute([
			':Retrato'=>$Retrato
		]);
	
		$totalFilas=$stmt->fetch()['filas'];
	
		return ceil($totalFilas/$productosPorPagina);
	};
	// Contenido Generico | Paginacion
	$numerosPaginasGenerico=function($productosPorPagina) use($conexion){
		$stmt=$conexion()->prepare("SELECT COUNT(*) filas FROM portada");
			
		$stmt->execute();
	
		$totalFilas=$stmt->fetch()['filas'];
	
		return ceil($totalFilas/$productosPorPagina);
	};
 ?>