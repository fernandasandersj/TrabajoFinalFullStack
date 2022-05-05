<?php 
//LOCAL
$db_config=[
    'host'=>'localhost',
    'dbname'=>'tiendaceliagolbano',
    'user'=>'root',
    'pass'=>'',
];

//SERVER
//CONEXION BBDD RECUPERACION CONTRASEÑA
// $db_contrasena=[
//     'host'=>'localhost',
//     'dbname'=>'recuperaciontceliag',
//     'user'=>'root',
//     'pass'=>'',
// ];

// $dsnContrasena='mysql:host='.$db_contrasena['host'].';dbname='.$db_contrasena['dbname'];
// Conexion BBDD tienda SERVER

// $db_config=[
//     'host'=>'localhost',
//     'dbname'=>'celiagolbano_comtienda_celia',
//     'user'=>'celiagolbano_comtienda_celia',
//     'pass'=>'adminadmin123',
// ];

$dsn='mysql:host='.$db_config['host'].';dbname='.$db_config['dbname'];

$tienda_config=[
    'productosPorPagina'=>6,
    'carpetaImg'=>'img/',
    
];
$admin_config=[
    'productosPorPagina'=>8,
    'carpetaImg'=>'../img/Tienda/',
];
?>