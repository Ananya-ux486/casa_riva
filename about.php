<?php
declare(strict_types=1);
$page_title = 'About — CASA RIVA';
$page_description = 'CASA RIVA is an interior architecture studio composing rooms with proportion, material and light, with expert execution from start to finish.';
require_once __DIR__ . '/includes/header.php';
?>

<header class="page-hero">
    <div class="wrap" data-reveal>
        <span class="kicker">About</span>
        <h1>A studio for lasting interiors.</h1>
        <p>CASA RIVA works as one practice across interior design, architecture, kitchens, wardrobes and turnkey execution — so a house reads as a single composition.</p>
    </div>
</header>

<section class="section">
    <div class="wrap split">
        <div class="media media--land" data-reveal>
            <img src="<?= cr_e(cr_img('4.jpg')) ?>" alt="Sunlit reception room with arched window and herringbone floor" width="1400" height="875" loading="eager">
        </div>
        <div class="split-copy" data-reveal>
            <span class="kicker">The work</span>
            <h2>Beautifully designed interiors with smart planning.</h2>
            <p>The studio begins with how a household actually lives: light at different hours, the path from the door to the kitchen, the rooms that need quiet. Planning is exact. Pricing is transparent. Execution is directed until the last fitting is set.</p>
            <p>More than 2500 projects have been delivered with a network of 500 expert designers, in 15 cities across India. The client rating of 4.9 reflects work that is finished, not merely presented.</p>
        </div>
    </div>
</section>

<section class="section section-ivory">
    <div class="wrap">
        <div class="section-head">
            <div data-reveal>
                <span class="kicker">Philosophy</span>
                <h2>What the rooms are asked to hold.</h2>
            </div>
            <p class="lede" data-reveal>Luxury, here, is a matter of spacing, joinery and light — not ornament for its own sake.</p>
        </div>
        <div class="values">
            <?php foreach ($CR_VALUES as $value): ?>
                <article class="value-card" data-reveal>
                    <h3><?= cr_e($value['title']) ?></h3>
                    <p><?= cr_e($value['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap split reverse">
        <div class="media media--portrait" data-reveal>
            <img src="<?= cr_e(cr_img('study-01.jpg')) ?>" alt="Oak-lined study with leather armchair and stone fireplace" width="900" height="1125" loading="lazy">
        </div>
        <div class="split-copy" data-reveal>
            <span class="kicker">Partners</span>
            <h2>Materials and fittings chosen with care.</h2>
            <p>Kitchens and wardrobes are specified with trusted houses for hardware, laminates, stone and appliances — Häfele, Hettich, REHAU, Heritage, Merino, Everyday and others — so the finished work lasts as well as it looks.</p>
            <a class="btn btn-dark" href="<?= cr_e(cr_url('contact')) ?>">Book 3D Design Session</a>
        </div>
    </div>
</section>

<section class="section section-ink cta-band">
    <div class="wrap-narrow" data-reveal>
        <span class="kicker">Begin</span>
        <h2>A first conversation about the house.</h2>
        <p>Select your city and book a 3D design session. The first visit is complimentary.</p>
        <a class="btn btn-light" href="<?= cr_e(cr_url('contact')) ?>">Get Estimate</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
