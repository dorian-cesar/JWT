<?php
header("Content-Type: application/json");
header('Access-Control-Allow-Headers: Content-Type, Authorization');
$headers=apache_request_headers();


// Verificar si se proporcionó el encabezado de autenticación
($authHeader = $headers['Authorization']);
if (!$authHeader || $authHeader !== 'Bearer mi_token_secreto') {
    http_response_code(401);
    
    exit(json_encode(["error" => "No autorizado"]));
}



// Array de productos (ficticios)
$productos = [
    ["id" => 1, "nombre" => "Producto 1", "precio" => 10.99],
    ["id" => 2, "nombre" => "Producto 2", "precio" => 20.49],
    ["id" => 3, "nombre" => "Producto 3", "precio" => 5.99],
    ["id" => 4, "nombre" => "Producto 4", "precio" => 15.79],
    ["id" => 5, "nombre" => "Producto 5", "precio" => 8.29]
];

// Convertir el array de productos a formato JSON
echo json_encode($productos);
