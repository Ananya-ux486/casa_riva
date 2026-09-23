<?php
declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rawurldecode($uri);

if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false;
}

$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/services' => 'services.php',
    '/projects' => 'projects.php',
    '/gallery' => 'gallery.php',
    '/contact' => 'contact.php',
    '/contact-submit.php' => 'contact-submit.php',
];

$trimmed = rtrim($path, '/') ?: '/';
if (isset($routes[$trimmed])) {
    require __DIR__ . '/' . $routes[$trimmed];
    return true;
}

if (preg_match('#^/services/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/service.php';
    return true;
}

if (preg_match('#^/projects/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/project.php';
    return true;
}

http_response_code(404);
$page_title = 'Page not found — CASA RIVA';
require __DIR__ . '/includes/header.php';
echo '<header class="page-hero"><div class="wrap"><h1>Page not found.</h1><p><a class="btn btn-dark" href="/">Return home</a></p></div></header>';
require __DIR__ . '/includes/footer.php';
return true;
