<?php
declare(strict_types=1);
session_start();
$page_title = 'Contact — CASA RIVA';
$page_description = 'Book a complimentary 3D design session or request an estimate from CASA RIVA.';
require_once __DIR__ . '/includes/header.php';

$sent = isset($_GET['sent']);
$selected_city = trim((string) ($_GET['city'] ?? ''));
$errors = $_SESSION['contact_errors'] ?? [];
$old = $_SESSION['contact_old'] ?? [];
unset($_SESSION['contact_errors'], $_SESSION['contact_old']);
if (!isset($old['name']) && isset($_GET['name'])) {
    $old['name'] = trim((string) $_GET['name']);
}
if (!isset($old['phone']) && isset($_GET['phone'])) {
    $old['phone'] = trim((string) $_GET['phone']);
}
?>

<!-- ===== CONTACT HERO ===== -->
<section class="contact-hero">
    <div class="contact-hero__bg" aria-hidden="true">
        <div class="contact-hero__orb contact-hero__orb--1"></div>
        <div class="contact-hero__orb contact-hero__orb--2"></div>
        <div class="contact-hero__orb contact-hero__orb--3"></div>
        <div class="contact-hero__lines" aria-hidden="true">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <span class="contact-hero__line"></span>
            <?php endfor; ?>
        </div>
    </div>
    <div class="contact-hero__inner wrap">
        <div class="contact-hero__left" data-reveal>
            <span class="kicker">Contact</span>
            <h1 class="contact-hero__title">
                <span class="contact-hero__title-row">Get an estimate.</span>
                <span class="contact-hero__title-row"><em>Book a 3D session.</em></span>
            </h1>
            <p class="contact-hero__desc">Tell us about the property, the city, and how you live in the rooms. We will reply with how we would begin — pricing kept transparent, execution held from start to finish.</p>
            <div class="contact-hero__badges">
                <div class="contact-badge">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                    <span>15+ Cities Across India</span>
                </div>
                <div class="contact-badge">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    <span>2500+ Projects Delivered</span>
                </div>
                <div class="contact-badge">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <span>First Session at No Charge</span>
                </div>
            </div>
        </div>
        <div class="contact-hero__right" data-reveal>
            <div class="contact-card-wrap">
                <div class="contact-card-glow" aria-hidden="true"></div>
                <div class="contact-card">
                    <div class="contact-card__header">
                        <span class="kicker">Studio</span>
                        <h2>A first conversation.</h2>
                        <p>The complimentary 3D design session is the usual beginning. Bring plans if you have them; if not, we will work from photographs and a conversation about the house.</p>
                    </div>
                    <?php if ($sent): ?>
                        <div class="contact-success">
                            <div class="contact-success__icon">
                                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <h3>Thank you.</h3>
                            <p>Your note has been received. We will reply personally.</p>
                        </div>
                    <?php endif; ?>
                    <form class="contact-form" method="post" action="<?= cr_e(cr_url('contact-submit.php')) ?>" data-contact-form novalidate>
                        <div class="cf-row cf-row--2">
                            <div class="cf-field">
                                <input type="text" name="name" id="cf-name" required value="<?= cr_e((string) ($old['name'] ?? '')) ?>" placeholder=" " autocomplete="name">
                                <label for="cf-name">Full Name <span aria-hidden="true">*</span></label>
                                <span class="cf-line" aria-hidden="true"></span>
                                <?php if (!empty($errors['name'])): ?>
                                    <span class="cf-error"><?= cr_e($errors['name']) ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="cf-field">
                                <input type="email" name="email" id="cf-email" required value="<?= cr_e((string) ($old['email'] ?? '')) ?>" placeholder=" " autocomplete="email">
                                <label for="cf-email">Email Address <span aria-hidden="true">*</span></label>
                                <span class="cf-line" aria-hidden="true"></span>
                                <?php if (!empty($errors['email'])): ?>
                                    <span class="cf-error"><?= cr_e($errors['email']) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="cf-row cf-row--2">
                            <div class="cf-field">
                                <input type="tel" name="phone" id="cf-phone" value="<?= cr_e((string) ($old['phone'] ?? '')) ?>" placeholder=" " autocomplete="tel" inputmode="numeric">
                                <label for="cf-phone">Phone Number</label>
                                <span class="cf-line" aria-hidden="true"></span>
                            </div>
                            <div class="cf-field cf-field--select">
                                <select name="city" id="cf-city" required>
                                    <option value="" disabled <?= empty($old['city'] ?? '') && empty($selected_city) ? 'selected' : '' ?>></option>
                                    <?php foreach ($CR_CITIES as $city): ?>
                                        <option value="<?= cr_e($city) ?>"<?= ($old['city'] ?? $selected_city) === $city ? ' selected' : '' ?>><?= cr_e($city) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="cf-city">Property City <span aria-hidden="true">*</span></label>
                                <span class="cf-line" aria-hidden="true"></span>
                                <span class="cf-select-arrow" aria-hidden="true">
                                    <svg viewBox="0 0 10 6" width="10" height="6" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 1l4 4 4-4"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cf-row">
                            <div class="cf-field cf-field--select cf-field--service">
                                <select name="interest" id="cf-interest">
                                    <?php
                                    $interests = ['3D Design Session', 'Get Estimate', 'Interior Design', 'Modular Kitchen', 'Wardrobe', 'Turnkey Project', 'Renovation'];
                                    $currentInterest = $old['interest'] ?? '3D Design Session';
                                    foreach ($interests as $interest):
                                    ?>
                                        <option value="<?= cr_e($interest) ?>"<?= $currentInterest === $interest ? ' selected' : '' ?>><?= cr_e($interest) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="cf-interest">How Can We Help? <span aria-hidden="true">*</span></label>
                                <span class="cf-line" aria-hidden="true"></span>
                                <span class="cf-select-arrow" aria-hidden="true">
                                    <svg viewBox="0 0 10 6" width="10" height="6" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 1l4 4 4-4"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cf-row">
                            <div class="cf-field cf-field--textarea">
                                <label for="cf-message" class="cf-label-static">About the House <span aria-hidden="true">*</span></label>
                                <textarea name="message" id="cf-message" rows="4" required placeholder="Tell us about your property — rooms, city, style, budget..."><?= cr_e((string) ($old['message'] ?? '')) ?></textarea>
                                <span class="cf-line" aria-hidden="true"></span>
                                <?php if (!empty($errors['message'])): ?>
                                    <span class="cf-error"><?= cr_e($errors['message']) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button class="cf-submit" type="submit">
                            <span class="cf-submit__text">Send Enquiry</span>
                            <span class="cf-submit__icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </span>
                            <span class="cf-submit__ripple" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll hint -->
    <div class="contact-hero__scroll" aria-hidden="true">
        <span></span>
    </div>
</section>

<!-- ===== INFO STRIP ===== -->
<section class="contact-info-strip">
    <div class="wrap contact-info-grid">
        <div class="contact-info-item" data-reveal>
            <div class="contact-info-item__icon contact-info-item__icon--phone">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 11.6 19.79 19.79 0 0 1 1.61 3a2 2 0 0 1 1.99-2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16l.19.92z"/></svg>
            </div>
            <div>
                <h3>Call Us</h3>
                <p><a href="tel:+91XXXXXXXXXX">+91 XXXXX XXXXX</a></p>
                <p>Mon – Sat, 9am – 7pm</p>
            </div>
        </div>
        <div class="contact-info-item" data-reveal>
            <div class="contact-info-item__icon contact-info-item__icon--email">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
                <h3>Write to Us</h3>
                <p><a href="mailto:xxxx@gmail.com">xxxx@gmail.com</a></p>
                <p>We reply within 24 hours</p>
            </div>
        </div>
        <div class="contact-info-item" data-reveal>
            <div class="contact-info-item__icon contact-info-item__icon--whatsapp">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
            </div>
            <div>
                <h3>WhatsApp</h3>
                <p><a href="<?= cr_e(cr_whatsapp_link()) ?>" target="_blank" rel="noopener noreferrer">Chat with us directly</a></p>
                <p>Quick responses guaranteed</p>
            </div>
        </div>
        <div class="contact-info-item" data-reveal>
            <div class="contact-info-item__icon contact-info-item__icon--calendar">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div>
                <h3>Book a Session</h3>
                <p>Free 3D design consultation</p>
                <p>At your schedule, your city</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY CASA RIVA ===== -->
<section class="section section-ivory contact-why">
    <div class="wrap">
        <div class="section-head" data-reveal>
            <div>
                <span class="kicker">Why CASA RIVA</span>
                <h2>Design that works for you.</h2>
            </div>
            <p class="lede">Every project starts with a conversation, not a catalogue. We listen before we design.</p>
        </div>
        <div class="contact-why__grid">
            <div class="contact-why__item" data-reveal>
                <span class="contact-why__num">01</span>
                <h3>Transparent Pricing</h3>
                <p>No hidden costs, no surprise bills. We share detailed estimates before a single nail is hammered.</p>
            </div>
            <div class="contact-why__item" data-reveal>
                <span class="contact-why__num">02</span>
                <h3>3D Visualisation</h3>
                <p>See your rooms in full detail before execution begins. Change anything until it feels exactly right.</p>
            </div>
            <div class="contact-why__item" data-reveal>
                <span class="contact-why__num">03</span>
                <h3>End-to-End Execution</h3>
                <p>From design to delivery, one team holds the thread. You deal with one studio, not ten vendors.</p>
            </div>
            <div class="contact-why__item" data-reveal>
                <span class="contact-why__num">04</span>
                <h3>Pan-India Presence</h3>
                <p>Operating in 15+ cities with local expertise and national design standards on every project.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BAND ===== -->
<section class="contact-cta-band">
    <div class="contact-cta-band__bg" aria-hidden="true">
        <div class="contact-cta-band__orb contact-cta-band__orb--1"></div>
        <div class="contact-cta-band__orb contact-cta-band__orb--2"></div>
        <img src="<?= cr_e(cr_img('wardrobe-01.jpg')) ?>" alt="" class="contact-cta-band__bgimg" aria-hidden="true">
    </div>
    <div class="wrap-narrow contact-cta-band__inner" data-reveal>
        <span class="kicker">Ready to begin?</span>
        <h2>Tell us about the house.</h2>
        <p>Book a 3D design session, or send a note with the rooms you wish to change. We will reply personally with how we would begin.</p>
        <div class="contact-cta-band__actions">
            <a class="btn contact-cta-band__btn-primary" href="<?= cr_e(cr_url('contact')) ?>#top">Book 3D Design Session</a>
            <a class="btn contact-cta-band__btn-secondary" href="<?= cr_e(cr_url('gallery')) ?>">See the Design Gallery</a>
        </div>
        <div class="contact-cta-band__stats">
            <div><strong>2500+</strong><span>Projects Delivered</span></div>
            <div class="contact-cta-band__divider" aria-hidden="true"></div>
            <div><strong>15+</strong><span>Cities Across India</span></div>
            <div class="contact-cta-band__divider" aria-hidden="true"></div>
            <div><strong>4.9 ★</strong><span>Client Rating</span></div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
