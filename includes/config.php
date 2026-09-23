<?php
declare(strict_types=1);

if (!defined('CR_ROOT')) {
    define('CR_ROOT', dirname(__DIR__));
}

function cr_base(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }

    $docRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? CR_ROOT);
    $appRoot = realpath(CR_ROOT);
    $base = '';

    if ($docRoot && $appRoot) {
        $doc = rtrim(str_replace('\\', '/', $docRoot), '/');
        $app = rtrim(str_replace('\\', '/', $appRoot), '/');
        if (str_starts_with($app, $doc)) {
            $base = substr($app, strlen($doc));
        }
    }

    return $base = rtrim(str_replace('\\', '/', $base), '/');
}

function cr_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    $base = cr_base();
    if ($path === '') {
        return $base === '' ? '/' : $base . '/';
    }
    return ($base === '' ? '' : $base) . '/' . $path;
}

function cr_asset(string $path): string
{
    return cr_url(ltrim($path, '/'));
}

function cr_img(string $file): string
{
    return cr_asset('assests/images/' . ltrim($file, '/'));
}

function cr_video(): string
{
    return cr_asset('assests/videos/video1.mp4');
}

/**
 * TODO: replace with CASA RIVA's real WhatsApp business number (digits only, country code first, no + or spaces).
 * Example for an Indian mobile: '91' . '9876543210'
 */
if (!defined('CR_WHATSAPP_NUMBER')) {
    define('CR_WHATSAPP_NUMBER', '911234567890');
}

function cr_whatsapp_link(string $message = 'Hello CASA RIVA, I would like to book a design session.'): string
{
    return 'https://wa.me/' . CR_WHATSAPP_NUMBER . '?text=' . rawurlencode($message);
}

function cr_is_active(string $needle): bool
{
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $base = cr_base();
    if ($base !== '' && str_starts_with($uri, $base)) {
        $uri = substr($uri, strlen($base)) ?: '/';
    }
    $uri = rtrim($uri, '/') ?: '/';
    $needle = rtrim($needle, '/') ?: '/';
    if ($needle === '/') {
        return $uri === '/';
    }
    return $uri === $needle || str_starts_with($uri, $needle . '/');
}

function cr_e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function cr_find_by_slug(array $items, string $slug): ?array
{
    foreach ($items as $item) {
        if (($item['slug'] ?? '') === $slug) {
            return $item;
        }
    }
    return null;
}
