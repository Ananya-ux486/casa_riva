<?php
declare(strict_types=1);
$page_title = 'CASA RIVA — Interior Architecture & Design';
$page_description = 'Get beautifully designed interiors with smart planning, transparent pricing, and expert execution from start to finish.';
$page_hero = true;
require_once __DIR__ . '/includes/header.php';
$featured_services = array_slice($CR_SERVICES, 0, 3);
?>

<section class="hero">
    <video class="hero-video" autoplay muted loop playsinline aria-hidden="true">
        <source src="<?= cr_e(cr_video()) ?>" type="video/mp4">
    </video>
    <div class="hero-content">
        <div class="hero-copy" data-reveal>
            <h1>Rooms composed <em>with care</em></h1>
            <p class="hero-lead">Get beautifully designed interiors with smart planning, transparent pricing, and expert execution from start to finish.</p>
            <div class="hero-actions">
                <a class="btn" href="<?= cr_e(cr_url('contact')) ?>">Book 3D Design Session</a>
                <a class="btn" href="<?= cr_e(cr_url('gallery')) ?>">Design Gallery</a>
            </div>
        </div>
        <aside class="session-card" data-reveal>
            <p class="session-card__kicker">Design for every budget</p>
            <h2>Book a 3D design session</h2>
            <p>Tell us who to reach and your property city — we will arrange a complimentary walkthrough of how the house could live.</p>
            <form class="session-card__form" action="<?= cr_e(cr_url('contact')) ?>" method="get">
                <label class="visually-hidden" for="hero-name">Your name</label>
                <input id="hero-name" type="text" name="name" placeholder="Enter your name" autocomplete="name">

                <label class="visually-hidden" for="hero-phone">Mobile number</label>
                <span class="phone-field">
                    <span aria-hidden="true">+91</span>
                    <input id="hero-phone" type="tel" name="phone" placeholder="Enter mobile number" inputmode="numeric" autocomplete="tel" pattern="[0-9]{10}">
                </span>

                <label class="session-card__toggle" for="hero-whatsapp">
                    <span>Send me updates on WhatsApp</span>
                    <span class="switch">
                        <input id="hero-whatsapp" type="checkbox" name="whatsapp" value="yes" checked>
                        <span class="switch__track" aria-hidden="true"></span>
                    </span>
                </label>

                <label class="visually-hidden" for="hero-city">Select your property city</label>
                <select id="hero-city" name="city" required>
                    <option value="" selected disabled>Select your property city</option>
                    <?php foreach ($CR_CITIES as $city): ?>
                        <option value="<?= cr_e($city) ?>"><?= cr_e($city) ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-cta" type="submit">Book 3D Design Session</button>
            </form>
            <span class="session-card__badge">Free<br>Gift</span>
        </aside>
    </div>
</section>

<!-- ===== TRUSTED PARTNERS ===== -->
<section class="partners-wrap" aria-labelledby="partners-title">
    <div class="wrap">
        <div class="partners" data-partners>
            <h2 id="partners-title" class="partners-title">Our Trusted Partners</h2>
            <div class="partners-viewport">
                <?php foreach ($CR_PARTNER_SLIDES as $i => $slide): ?>
                    <ul class="partners-slide<?= $i === 0 ? ' is-on' : '' ?>" data-partner-slide>
                        <?php foreach ($slide as $partner): ?>
                            <li>
                                <div class="partner-logo-wrap" aria-label="<?= cr_e($partner['name']) ?>">
                                    <div class="partner-logo-svg"><?= $partner['logo'] ?></div>
                                    <span class="partner-logo-name"><?= cr_e($partner['name']) ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </div>
            <div class="partners-dots" role="tablist" aria-label="Partner slides">
                <?php foreach ($CR_PARTNER_SLIDES as $i => $slide): ?>
                    <button type="button" class="partners-dot<?= $i === 0 ? ' is-on' : '' ?>" data-partner-dot aria-label="Show partner group <?= $i + 1 ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ===== STUDIO INTRO ===== -->
<section class="section section-ivory">
    <div class="wrap split">
        <div class="media media--portrait" data-reveal>
            <img src="<?= cr_e(cr_img('renovation-01.jpg')) ?>" alt="Renovated drawing room with panelling, fireplace and contemporary seating" width="900" height="1125" loading="eager">
        </div>
        <div class="split-copy" data-reveal>
            <span class="kicker">The studio</span>
            <h2>Interior architecture for houses that are meant to be lived in.</h2>
            <p>CASA RIVA plans, designs and executes interiors with a single language of proportion, material and light. The work is calm, exact and complete — from first conversation through the last object placed in the room.</p>
            <p>Smart planning, transparent pricing and expert execution remain the measure of every project, in more than fifteen cities across India.</p>
            <a class="btn btn-dark" href="<?= cr_e(cr_url('about')) ?>">About the studio</a>
        </div>
    </div>
</section>

<!-- ===== OFFERINGS ===== -->
<section class="section">
    <div class="wrap">
        <div class="section-head">
            <div data-reveal>
                <span class="kicker">Offerings</span>
                <h2>Services held as architecture.</h2>
            </div>
            <p class="lede" data-reveal>Interior design, kitchens, wardrobes and turnkey work are treated as one house — not a catalogue of disconnected products.</p>
        </div>
        <div class="card-grid">
            <?php foreach ($featured_services as $service): ?>
                <a class="service-card" href="<?= cr_e(cr_url('services/' . $service['slug'])) ?>" data-reveal>
                    <div class="media">
                        <img src="<?= cr_e(cr_img($service['image'])) ?>" alt="<?= cr_e($service['alt']) ?>" width="800" height="1000" loading="lazy">
                    </div>
                    <p class="meta"><?= cr_e($service['kicker']) ?></p>
                    <h3><?= cr_e($service['title']) ?></h3>
                    <p><?= cr_e($service['summary']) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
        <p class="section-more"><a class="btn" href="<?= cr_e(cr_url('services')) ?>">All offerings</a></p>
    </div>
</section>

<!-- ===== HOW WE DESIGN YOUR HOME ===== -->
<section class="section section-cream design-process" id="design-process">
    <div class="wrap">
        <div class="design-process__head" data-reveal>
            <span class="kicker">Our Design Process</span>
            <h2>How we design your home.</h2>
            <p class="lede">From the first conversation to handing over the keys — every step is held with the same care as the final room.</p>
        </div>

        <!-- Step connector line (desktop) -->
        <div class="dp-steps" role="list">

            <!-- Step 1: Consultation -->
            <article class="dp-step" data-reveal role="listitem">
                <div class="dp-step__image-wrap">
                    <div class="dp-step__img-circle">
                        <img src="<?= cr_e(cr_img('hallway-01.jpg')) ?>" alt="Initial consultation meeting" loading="lazy">
                    </div>
                    <div class="dp-step__num-ring" aria-hidden="true">
                        <span>01</span>
                    </div>
                </div>
                <div class="dp-step__body">
                    <div class="dp-step__icon" aria-hidden="true">
                        <svg viewBox="0 0 40 40" width="36" height="36" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="20" cy="12" r="6"/>
                            <path d="M8 34c0-6.627 5.373-12 12-12s12 5.373 12 12"/>
                        </svg>
                    </div>
                    <h3>Consultation</h3>
                    <p>We begin by understanding your lifestyle, rooms and how you actually live in the house. No briefs, just a conversation — in person or over a call.</p>
                    <ul class="dp-step__points">
                        <li>Site visit &amp; measurement</li>
                        <li>Understanding needs &amp; budget</li>
                        <li>Scope &amp; timeline discussion</li>
                    </ul>
                </div>
            </article>

            <div class="dp-connector" aria-hidden="true"></div>

            <!-- Step 2: Design & Planning -->
            <article class="dp-step dp-step--alt" data-reveal role="listitem">
                <div class="dp-step__body">
                    <div class="dp-step__icon" aria-hidden="true">
                        <svg viewBox="0 0 40 40" width="36" height="36" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="6" y="6" width="28" height="28" rx="2"/>
                            <line x1="12" y1="14" x2="28" y2="14"/>
                            <line x1="12" y1="20" x2="22" y2="20"/>
                            <line x1="12" y1="26" x2="18" y2="26"/>
                            <polyline points="24,22 28,26 34,18"/>
                        </svg>
                    </div>
                    <h3>Design &amp; Planning</h3>
                    <p>Detailed 3D visualisations, floor plans, material palettes and furniture layouts are drawn until every room feels exactly right — before a single nail is placed.</p>
                    <ul class="dp-step__points">
                        <li>3D renders &amp; walkthroughs</li>
                        <li>Material &amp; finish selection</li>
                        <li>Furniture &amp; lighting layouts</li>
                    </ul>
                </div>
                <div class="dp-step__image-wrap">
                    <div class="dp-step__img-circle">
                        <img src="<?= cr_e(cr_img('study-01.jpg')) ?>" alt="Design planning and 3D visualisation" loading="lazy">
                    </div>
                    <div class="dp-step__num-ring" aria-hidden="true">
                        <span>02</span>
                    </div>
                </div>
            </article>

            <div class="dp-connector" aria-hidden="true"></div>

            <!-- Step 3: Execution -->
            <article class="dp-step" data-reveal role="listitem">
                <div class="dp-step__image-wrap">
                    <div class="dp-step__img-circle">
                        <img src="<?= cr_e(cr_img('kitchen-01.jpg')) ?>" alt="Skilled craftsmen executing the design" loading="lazy">
                    </div>
                    <div class="dp-step__num-ring" aria-hidden="true">
                        <span>03</span>
                    </div>
                </div>
                <div class="dp-step__body">
                    <div class="dp-step__icon" aria-hidden="true">
                        <svg viewBox="0 0 40 40" width="36" height="36" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M10 30 L18 14 L26 24 L30 18"/>
                            <circle cx="30" cy="18" r="3"/>
                            <path d="M6 34 h28"/>
                        </svg>
                    </div>
                    <h3>Execution</h3>
                    <p>Skilled craftsmen and project managers bring your design to life. We supervise every stage — joinery, civil work, flooring, painting — so drawings survive contact with the building.</p>
                    <ul class="dp-step__points">
                        <li>Civil &amp; joinery works</li>
                        <li>On-site quality supervision</li>
                        <li>Transparent progress updates</li>
                    </ul>
                </div>
            </article>

            <div class="dp-connector" aria-hidden="true"></div>

            <!-- Step 4: Handover -->
            <article class="dp-step dp-step--alt" data-reveal role="listitem">
                <div class="dp-step__body">
                    <div class="dp-step__icon" aria-hidden="true">
                        <svg viewBox="0 0 40 40" width="36" height="36" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20 6 L6 14 v12 a14 14 0 0 0 28 0 V14 Z"/>
                            <polyline points="14,21 19,26 27,16"/>
                        </svg>
                    </div>
                    <h3>Handover</h3>
                    <p>The house is styled, checked and handed over complete — ready to be lived in from day one. We remain available for any post-delivery support.</p>
                    <ul class="dp-step__points">
                        <li>Styling &amp; final dressing</li>
                        <li>Quality walkthrough with you</li>
                        <li>Post-handover support</li>
                    </ul>
                </div>
                <div class="dp-step__image-wrap">
                    <div class="dp-step__img-circle">
                        <img src="<?= cr_e(cr_img('1.jpg')) ?>" alt="Beautifully completed and handed over room" loading="lazy">
                    </div>
                    <div class="dp-step__num-ring" aria-hidden="true">
                        <span>04</span>
                    </div>
                </div>
            </article>

        </div><!-- /dp-steps -->

        <div class="design-process__cta" data-reveal>
            <a class="btn btn-dark" href="<?= cr_e(cr_url('contact')) ?>">Start your project</a>
        </div>
    </div>
</section>

<!-- ===== CTA BAND ===== -->
<section class="section section-ink cta-band">
    <div class="wrap-narrow" data-reveal>
        <span class="kicker">Consultation</span>
        <h2>Tell us about the house.</h2>
        <p>Book a 3D design session, or send a note with the rooms you wish to change. We will reply personally with how we would begin.</p>
        <a class="btn btn-light" href="<?= cr_e(cr_url('contact')) ?>">Get Estimate</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
