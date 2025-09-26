<?php
// Simple PHP development server for the static HTML site
// Run with: php -S localhost:8000 -t public

// Enable CORS for local development
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle requests
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Route to index.html for root and any undefined routes
if ($path === '/' || !file_exists(__DIR__ . '/public' . $path)) {
    $path = '/index.html';
}

// Serve the file
$file = __DIR__ . '/public' . $path;
if (file_exists($file)) {
    // Set appropriate content type
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    switch ($ext) {
        case 'css':
            header('Content-Type: text/css');
            break;
        case 'js':
            header('Content-Type: application/javascript');
            break;
        case 'jpg':
        case 'jpeg':
            header('Content-Type: image/jpeg');
            break;
        case 'png':
            header('Content-Type: image/png');
            break;
        case 'gif':
            header('Content-Type: image/gif');
            break;
        case 'webp':
            header('Content-Type: image/webp');
            break;
        case 'mp4':
            header('Content-Type: video/mp4');
            break;
        case 'webm':
            header('Content-Type: video/webm');
            break;
        default:
            header('Content-Type: text/html');
    }
    
    readfile($file);
} else {
    http_response_code(404);
    echo "File not found: " . $path;
}
?>
