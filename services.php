<?php
declare(strict_types=1);
$page_title = 'Offerings — CASA RIVA';
$page_description = 'Interior design, architecture, civil construction, modular kitchens, wardrobes, turnkey projects and renovation — offered as one continuous studio.';
require_once __DIR__ . '/includes/header.php';
?>

<header class="page-hero page-hero--services">
    <div class="page-hero__bg" aria-hidden="true">
        <img src="<?= cr_e(cr_img('kitchen-01.jpg')) ?>" alt="" class="page-hero__bgimg">
        <div class="page-hero__bgoverlay"></div>
    </div>
    <div class="wrap page-hero__inner" data-reveal>
        <div class="page-hero__copy">
            <span class="kicker">Offerings</span>
            <h1>Services, held together.</h1>
            <p>Each offering is a part of the same house: planned, drawn and executed so kitchens, wardrobes and reception rooms share one material language.</p>
        </div>
        <div class="page-hero__aside" aria-hidden="true">
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">7</span>
                <span class="page-hero__stat-label">Core Offerings</span>
            </div>
            <div class="page-hero__stat">
                <span class="page-hero__stat-value">15+</span>
                <span class="page-hero__stat-label">Cities Across India</span>
            </div>
            <div class="page-hero__tag">Interior Design</div>
            <div class="page-hero__tag">Modular Kitchen</div>
            <div class="page-hero__tag">Turnkey &amp; Renovation</div>
        </div>
    </div>
    <div class="page-hero__scroll-line" aria-hidden="true"></div>
</header>

<section class="section">
    <div class="wrap service-list">
        <?php foreach ($CR_SERVICES as $i => $service): ?>
            <article class="split<?= $i % 2 ? ' reverse' : '' ?>">
                <div class="media media--land" data-reveal>
                    <img src="<?= cr_e(cr_img($service['image'])) ?>" alt="<?= cr_e($service['alt']) ?>" width="1200" height="750" loading="<?= $i < 2 ? 'eager' : 'lazy' ?>">
                </div>
                <div class="split-copy" data-reveal>
                    <span class="kicker"><?= cr_e($service['kicker']) ?></span>
                    <h2><?= cr_e($service['title']) ?></h2>
                    <p><?= cr_e($service['description']) ?></p>
                    <a class="btn btn-dark" href="<?= cr_e(cr_url('services/' . $service['slug'])) ?>">View offering</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
