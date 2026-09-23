<?php
declare(strict_types=1);
$page_title = 'Design Gallery — CASA RIVA';
$page_description = 'A design gallery of CASA RIVA interiors: living rooms, bedrooms, kitchens, wardrobes and architecture.';
require_once __DIR__ . '/includes/header.php';
?>

<header class="page-hero page-hero--gallery">
    <div class="page-hero__bg" aria-hidden="true">
        <img src="<?= cr_e(cr_img('architecture-01.jpg')) ?>" alt="" class="page-hero__bgimg">
        <div class="page-hero__bgoverlay"></div>
    </div>
    <div class="wrap page-hero__inner" data-reveal>
        <div class="page-hero__copy">
            <span class="kicker">Design Gallery</span>
            <h1>The rooms, as they stand.</h1>
            <p>An editorial gallery of interiors composed by the studio. Open any image to view it full screen.</p>
        </div>
        <div class="page-hero__aside" aria-hidden="true">
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">22+</span>
                <span class="page-hero__stat-label">Curated Rooms</span>
            </div>
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">14</span>
                <span class="page-hero__stat-label">Project Styles</span>
            </div>
            <div class="page-hero__tag">Kitchen &amp; Dining</div>
            <div class="page-hero__tag">Bedroom &amp; Bath</div>
            <div class="page-hero__tag">Living &amp; Architecture</div>
        </div>
    </div>
    <div class="page-hero__scroll-line" aria-hidden="true"></div>
</header>

<section class="section">
    <div class="wrap">
        <div class="masonry">
            <?php foreach ($CR_GALLERY as $item): ?>
                <figure tabindex="0" data-lightbox-item data-full="<?= cr_e(cr_img($item['file'])) ?>" data-caption="<?= cr_e($item['caption']) ?>">
                    <img src="<?= cr_e(cr_img($item['file'])) ?>" alt="<?= cr_e($item['alt']) ?>" width="900" height="1100" loading="lazy">
                    <figcaption><?= cr_e($item['caption']) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="lightbox" data-lightbox hidden>
    <button class="lightbox-close" type="button" data-lightbox-close aria-label="Close">×</button>
    <button class="lightbox-nav lightbox-prev" type="button" data-lightbox-prev aria-label="Previous">‹</button>
    <img data-lightbox-image alt="">
    <button class="lightbox-nav lightbox-next" type="button" data-lightbox-next aria-label="Next">›</button>
    <p class="visually-hidden" data-lightbox-caption></p>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
