<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

$page_title = $page_title ?? 'CASA RIVA';
$page_description = $page_description ?? 'CASA RIVA is an interior architecture and interior design studio composing timeless rooms in a British and European register.';
$page_hero = $page_hero ?? false;
$canonical = $canonical ?? cr_url(ltrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/'));
$og_image = isset($og_image) ? cr_img($og_image) : cr_img('4.jpg');
$body_class = trim(($page_hero ? 'has-hero ' : '') . ($body_class ?? ''));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= cr_e($page_title) ?></title>
    <meta name="description" content="<?= cr_e($page_description) ?>">
    <link rel="canonical" href="<?= cr_e($canonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CASA RIVA">
    <meta property="og:title" content="<?= cr_e($page_title) ?>">
    <meta property="og:description" content="<?= cr_e($page_description) ?>">
    <meta property="og:image" content="<?= cr_e($og_image) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#F6F1E8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= cr_e(cr_asset('css/main.css')) ?>">
</head>
<body class="<?= cr_e($body_class) ?>">
<a class="skip-link" href="#main">Skip to content</a>
<div class="page-transition" aria-hidden="true"></div>

<header class="site-header<?= $page_hero ? ' is-overlay' : ' is-solid' ?>" data-header>
    <div class="header-inner">
        <a class="wordmark" href="<?= cr_e(cr_url('')) ?>" aria-label="CASA RIVA home">
            <span>CASA <em>RIVA</em></span>
        </a>

        <nav class="nav-desktop" aria-label="Primary">
            <ul>
                <?php foreach ($CR_NAV as $item): ?>
                    <?php
                    $href = $item['href'];
                    $path = parse_url($href, PHP_URL_PATH) ?: '/';
                    $active = cr_is_active($path === cr_base() || $path === cr_base() . '/' ? '/' : str_replace(cr_base(), '', $path));
                    ?>
                    <li>
                        <a href="<?= cr_e($href) ?>"<?= $active ? ' aria-current="page"' : '' ?>><?= cr_e($item['label']) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <a class="btn btn-header" href="<?= cr_e(cr_url('contact')) ?>">Get Estimate</a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" data-nav-toggle>
            <span class="nav-toggle__lines" aria-hidden="true"></span>
            <span class="visually-hidden">Open menu</span>
        </button>
    </div>
</header>

<div class="nav-overlay" id="mobile-nav" data-nav-overlay hidden>
    <div class="nav-overlay__panel">
        <p class="nav-overlay__kicker">CASA <em>RIVA</em></p>
        <nav aria-label="Mobile">
            <ul>
                <?php foreach ($CR_NAV as $item): ?>
                    <li><a href="<?= cr_e($item['href']) ?>"><?= cr_e($item['label']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <a class="btn btn-light" href="<?= cr_e(cr_url('contact')) ?>">Book 3D Design Session</a>
    </div>
</div>

<main id="main">
