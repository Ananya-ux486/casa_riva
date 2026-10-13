</main>

<footer class="site-footer">
    <div class="footer-top">
        <div class="footer-brand" data-reveal>
            <a class="wordmark wordmark--footer" href="<?= cr_e(cr_url('')) ?>">CASA <em>RIVA</em></a>
            <p>Interior architecture and interior design. Rooms composed for living — in a British and European register of light, material and proportion.</p>

            <ul class="social-icons" aria-label="Follow CASA RIVA">
                <li>
                    <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="CASA RIVA on Facebook">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M13.5 21v-7.6h2.55l.38-2.96h-2.93V8.55c0-.86.24-1.44 1.47-1.44h1.57V4.46A21 21 0 0 0 14.6 4.3c-2.2 0-3.7 1.34-3.7 3.8v2.35H8.34v2.96h2.56V21h2.6Z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="CASA RIVA on Instagram">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="CASA RIVA on LinkedIn">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5a2.02 2.02 0 1 1 0 4.04 2.02 2.02 0 0 1 0-4.04ZM3.5 9h3v11.5h-3V9Zm6.4 0h2.87v1.57h.04c.4-.76 1.38-1.57 2.85-1.57 3.05 0 3.61 2 3.61 4.6v6.9h-3v-6.12c0-1.46-.03-3.33-2.03-3.33-2.04 0-2.35 1.6-2.35 3.23v6.22h-2.99V9Z"/></svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h2>Studio</h2>
            <ul>
                <li><a href="<?= cr_e(cr_url('about')) ?>">About</a></li>
                <li><a href="<?= cr_e(cr_url('projects')) ?>">Projects</a></li>
                <li><a href="<?= cr_e(cr_url('gallery')) ?>">Design Gallery</a></li>
                <li><a href="<?= cr_e(cr_url('contact')) ?>">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h2>Services</h2>
            <ul>
                <?php foreach ($CR_SERVICES as $service): ?>
                    <li><a href="<?= cr_e(cr_url('services/' . $service['slug'])) ?>"><?= cr_e($service['nav']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer-col footer-enquire">
            <h2>Enquire</h2>
            <a class="btn btn-ghost footer-enquire-btn" href="<?= cr_e(cr_url('contact')) ?>">Get Estimate</a>
            <div class="footer-contact-lines">
                <p>
                    <svg viewBox="0 0 16 16" width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14.65 10.85l-2-.2a1.36 1.36 0 0 0-1.12.38l-1.45 1.45a10.55 10.55 0 0 1-4.57-4.57l1.46-1.46a1.36 1.36 0 0 0 .38-1.12l-.2-2A1.37 1.37 0 0 0 5.79 2H3.84A1.36 1.36 0 0 0 2.5 3.52 11.82 11.82 0 0 0 12.48 13.5a1.36 1.36 0 0 0 1.52-1.34v-1.95a1.37 1.37 0 0 0-1.35-1.36Z"/></svg>
                    <span class="footer-contact-entry">
                        <span class="footer-contact-label">Call us</span>
                        <a href="tel:+919005952202">+91 90059 52202</a>
                    </span>
                </p>
                <p>
                    <svg viewBox="0 0 16 16" width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 3h12c.6 0 1 .4 1 1v8c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V4c0-.6.4-1 1-1z"/><path d="M15 4l-7 5-7-5"/></svg>
                    <span class="footer-contact-entry">
                        <span class="footer-contact-label">Email</span>
                        <a href="mailto:care.casariva@gmail.com">care.casariva@gmail.com</a>
                    </span>
                </p>
                <p>
                    <svg viewBox="0 0 16 16" width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M13 6.5c0 3.5-5 8-5 8s-5-4.5-5-8a5 5 0 1 1 10 0Z"/><circle cx="8" cy="6.5" r="1.5"/></svg>
                    <span class="footer-contact-entry">
                        <span class="footer-contact-label">Visit us</span>
                        <a href="https://www.google.com/maps/search/?api=1&amp;query=Venture%20X%20Landmark%20Tower%20Sector%2068%20Gurugram%20Haryana%20122101" target="_blank" rel="noopener noreferrer">Venture X, Landmark Tower,<br>Sector 68, Gurugram 122101</a>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <!-- Gold divider line with RIVA mark -->
    <div class="footer-divider" aria-hidden="true">
        <span class="footer-divider__line"></span>
        <span class="footer-divider__mark">✦</span>
        <span class="footer-divider__line"></span>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> CASA RIVA. All rights reserved. Designed &amp; developed by <a href="https://tasmafivesolutions.com" target="_blank" rel="noopener noreferrer">Tasmafive Solutions</a>.</p>
        <p class="footer-bottom__tagline">Interior architecture · Interior design · Turnkey</p>
    </div>
</footer>

<a class="whatsapp-float" href="<?= cr_e(cr_whatsapp_link()) ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with CASA RIVA on WhatsApp">
    <svg viewBox="0 0 32 32" width="30" height="30" fill="currentColor" aria-hidden="true"><path d="M16.02 3C9.4 3 4 8.36 4 14.96c0 2.24.62 4.34 1.7 6.14L4 29l8.1-1.63a13.1 13.1 0 0 0 3.92.6h.01C22.65 28 28 22.63 28 16.03 28 9.42 22.65 3 16.02 3Zm7.45 18.4c-.32.9-1.6 1.66-2.6 1.87-.7.15-1.6.27-4.66-1-3.9-1.62-6.42-5.57-6.62-5.83-.19-.26-1.58-2.1-1.58-4.02s.99-2.85 1.35-3.24c.32-.35.7-.44.94-.44h.68c.22 0 .5-.02.79.6.33.72 1.13 2.48 1.23 2.66.1.18.16.4.03.65-.13.25-.2.4-.4.62-.2.22-.42.5-.6.67-.2.19-.4.4-.18.79.23.4 1 1.68 2.16 2.72 1.49 1.33 2.74 1.74 3.14 1.94.4.2.63.16.87-.1.24-.26 1-1.16 1.27-1.56.27-.4.53-.33.9-.2.36.13 2.31 1.09 2.7 1.29.4.2.66.3.75.46.1.17.1.98-.22 1.92Z"/></svg>
</a>

<script src="<?= cr_e(cr_asset('js/main.js')) ?>" defer></script>
</body>
</html>
