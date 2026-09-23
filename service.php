<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$slug = preg_replace('/[^a-z0-9-]/', '', strtolower((string) ($_GET['slug'] ?? ''))) ?? '';
$service = cr_find_by_slug($CR_SERVICES, $slug);
if (!$service) {
    http_response_code(404);
    $page_title = 'Offering not found — CASA RIVA';
    require __DIR__ . '/includes/header.php';
    echo '<header class="page-hero"><div class="wrap"><h1>This offering could not be found.</h1><p><a class="btn btn-dark" href="' . cr_e(cr_url('services')) . '">All offerings</a></p></div></header>';
    require __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $service['title'] . ' — CASA RIVA';
$page_description = $service['summary'];
$og_image = $service['image'];
$canonical = cr_url('services/' . $service['slug']);
require_once __DIR__ . '/includes/header.php';
$related = array_values(array_filter($CR_SERVICES, static fn(array $item): bool => $item['slug'] !== $service['slug']));
$related = array_slice($related, 0, 3);
?>

<section class="detail-hero">
    <div class="media">
        <img src="<?= cr_e(cr_img($service['image'])) ?>" alt="<?= cr_e($service['alt']) ?>" width="1600" height="900">
    </div>
</section>

<section class="wrap detail-intro">
    <div data-reveal>
        <span class="kicker"><?= cr_e($service['kicker']) ?></span>
        <h1><?= cr_e($service['title']) ?></h1>
        <p class="lede"><?= cr_e($service['description']) ?></p>
    </div>
    <div class="facts" data-reveal>
        <?php foreach ($service['points'] as $point): ?>
            <div>
                <span><?= cr_e($point) ?></span>
            </div>
        <?php endforeach; ?>
        <a class="btn btn-dark" href="<?= cr_e(cr_url('contact')) ?>">Get Estimate</a>
    </div>
</section>

<section class="section section-ivory">
    <div class="wrap">
        <div class="section-head">
            <h2 data-reveal>Further offerings</h2>
        </div>
        <div class="related">
            <?php foreach ($related as $item): ?>
                <a class="service-card" href="<?= cr_e(cr_url('services/' . $item['slug'])) ?>" data-reveal>
                    <div class="media">
                        <img src="<?= cr_e(cr_img($item['image'])) ?>" alt="<?= cr_e($item['alt']) ?>" width="700" height="875" loading="lazy">
                    </div>
                    <h3><?= cr_e($item['title']) ?></h3>
                    <p class="meta"><?= cr_e($item['kicker']) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
