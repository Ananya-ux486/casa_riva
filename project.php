<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$slug = preg_replace('/[^a-z0-9-]/', '', strtolower((string) ($_GET['slug'] ?? ''))) ?? '';
$project = cr_find_by_slug($CR_PROJECTS, $slug);
if (!$project) {
    http_response_code(404);
    $page_title = 'Project not found — CASA RIVA';
    require __DIR__ . '/includes/header.php';
    echo '<header class="page-hero"><div class="wrap"><h1>This project could not be found.</h1><p><a class="btn btn-dark" href="' . cr_e(cr_url('projects')) . '">All projects</a></p></div></header>';
    require __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $project['title'] . ' — CASA RIVA';
$page_description = $project['summary'];
$og_image = $project['image'];
$canonical = cr_url('projects/' . $project['slug']);
require_once __DIR__ . '/includes/header.php';
$related = array_values(array_filter($CR_PROJECTS, static fn(array $item): bool => $item['slug'] !== $project['slug'] && $item['category'] === $project['category']));
if (count($related) < 3) {
    $related = array_values(array_filter($CR_PROJECTS, static fn(array $item): bool => $item['slug'] !== $project['slug']));
}
$related = array_slice($related, 0, 3);
$gallery = $project['gallery'] ?? [$project['image']];
?>

<section class="detail-hero">
    <div class="media">
        <img src="<?= cr_e(cr_img($project['image'])) ?>" alt="<?= cr_e($project['alt']) ?>" width="1600" height="900">
    </div>
</section>

<section class="wrap detail-intro">
    <div data-reveal>
        <span class="kicker"><?= cr_e($project['category']) ?></span>
        <h1><?= cr_e($project['title']) ?></h1>
        <p class="lede"><?= cr_e($project['description']) ?></p>
    </div>
    <div class="facts" data-reveal>
        <?php foreach ($project['info'] as $label => $value): ?>
            <div>
                <span><?= cr_e((string) $label) ?></span>
                <span><?= cr_e((string) $value) ?></span>
            </div>
        <?php endforeach; ?>
        <?php if (!empty($project['location'])): ?>
            <div>
                <span>Setting</span>
                <span><?= cr_e($project['location']) ?></span>
            </div>
        <?php endif; ?>
        <a class="btn btn-dark" href="<?= cr_e(cr_url('contact')) ?>">Enquire about a similar room</a>
    </div>
</section>

<section class="wrap detail-gallery">
    <?php foreach ($gallery as $file): ?>
        <div class="media" data-reveal>
            <img src="<?= cr_e(cr_img($file)) ?>" alt="<?= cr_e($project['title']) ?>" width="1200" height="800" loading="lazy">
        </div>
    <?php endforeach; ?>
</section>

<section class="section section-ivory">
    <div class="wrap">
        <div class="section-head">
            <h2 data-reveal>Related projects</h2>
        </div>
        <div class="related">
            <?php foreach ($related as $item): ?>
                <a class="project-card" href="<?= cr_e(cr_url('projects/' . $item['slug'])) ?>" data-reveal>
                    <figure>
                        <div class="media">
                            <img src="<?= cr_e(cr_img($item['image'])) ?>" alt="<?= cr_e($item['alt']) ?>" width="800" height="550" loading="lazy">
                        </div>
                        <figcaption>
                            <h3><?= cr_e($item['title']) ?></h3>
                            <span class="meta"><?= cr_e($item['category']) ?></span>
                        </figcaption>
                    </figure>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
