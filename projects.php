<?php
declare(strict_types=1);
$page_title = 'Projects — CASA RIVA';
$page_description = 'Selected interior architecture and interior design projects by CASA RIVA: living rooms, bedrooms, kitchens, wardrobes and architecture.';
require_once __DIR__ . '/includes/header.php';
$categories = array_values(array_unique(array_map(static fn(array $p): string => $p['category'], $CR_PROJECTS)));
?>

<header class="page-hero page-hero--projects">
    <div class="page-hero__bg" aria-hidden="true">
        <img src="<?= cr_e(cr_img('1.jpg')) ?>" alt="" class="page-hero__bgimg">
        <div class="page-hero__bgoverlay"></div>
    </div>
    <div class="wrap page-hero__inner" data-reveal>
        <div class="page-hero__copy">
            <span class="kicker">Projects</span>
            <h1>Houses, room by room.</h1>
            <p>An edit of interiors designed and delivered by the studio — from reception rooms to kitchens and dressing rooms.</p>
        </div>
        <div class="page-hero__aside" aria-hidden="true">
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">2500+</span>
                <span class="page-hero__stat-label">Projects Delivered</span>
            </div>
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">14</span>
                <span class="page-hero__stat-label">Featured Projects</span>
            </div>
            <div class="page-hero__tag">Living &amp; Dining</div>
            <div class="page-hero__tag">Bedroom &amp; Wardrobe</div>
            <div class="page-hero__tag">Kitchen &amp; Architecture</div>
        </div>
    </div>
    <div class="page-hero__scroll-line" aria-hidden="true"></div>
</header>

<section class="section">
    <div class="wrap">
        <div class="filters" role="toolbar" aria-label="Project categories">
            <button type="button" class="is-on" data-filter="all">All</button>
            <?php foreach ($categories as $category): ?>
                <button type="button" data-filter="<?= cr_e($category) ?>"><?= cr_e($category) ?></button>
            <?php endforeach; ?>
        </div>
        <div class="project-grid">
            <?php foreach ($CR_PROJECTS as $project): ?>
                <a class="project-card" href="<?= cr_e(cr_url('projects/' . $project['slug'])) ?>" data-category="<?= cr_e($project['category']) ?>" data-reveal>
                    <figure>
                        <div class="media">
                            <img src="<?= cr_e(cr_img($project['image'])) ?>" alt="<?= cr_e($project['alt']) ?>" width="1200" height="825" loading="lazy">
                        </div>
                        <figcaption>
                            <h3><?= cr_e($project['title']) ?></h3>
                            <span class="meta"><?= cr_e($project['category']) ?></span>
                        </figcaption>
                    </figure>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
