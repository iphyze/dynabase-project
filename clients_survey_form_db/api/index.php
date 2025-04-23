<?php

// Set CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Max-Age: 86400");
header("Content-Type: application/json");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

include_once('includes/connection.php');

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $basePath = '/htdocs/dynabase/clients_survey_form_db/api';
$basePath = '/clients_survey_form_db/api';
$relativePath = str_replace($basePath, '', $requestUri);

// Define route mappings
$routes = [
    '/'         => 'routes/welcome.php',
    '/welcome'  => 'routes/welcome.php',
    '/clientdata' => 'routes/data/form_data.php',
];

// Check if the route exists
if (array_key_exists($relativePath, $routes)) {
    if (is_callable($routes[$relativePath])) {
        $routes[$relativePath](); // Execute function
    } else {
        include_once($routes[$relativePath]);
    }
    exit;
}

http_response_code(404);
echo json_encode(["message" => "Page not found!"]);
exit;

// Close connection
mysqli_close($conn);

?>
