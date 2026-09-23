(() => {
    const header = document.querySelector("[data-header]");
    const toggle = document.querySelector("[data-nav-toggle]");
    const overlay = document.querySelector("[data-nav-overlay]");
    const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    const setHeader = () => {
        if (!header) return;
        const overlayMode = header.classList.contains("is-overlay");
        if (window.scrollY > 40) {
            header.classList.add("is-scrolled");
        } else if (overlayMode) {
            header.classList.remove("is-scrolled");
        }
    };

    setHeader();
    window.addEventListener("scroll", setHeader, { passive: true });

    if (toggle && overlay) {
        const label = toggle.querySelector(".visually-hidden");
        const close = () => {
            toggle.setAttribute("aria-expanded", "false");
            overlay.classList.remove("is-open");
            overlay.setAttribute("hidden", "");
            document.body.style.overflow = "";
            if (label) label.textContent = "Open menu";
        };
        const open = () => {
            toggle.setAttribute("aria-expanded", "true");
            overlay.removeAttribute("hidden");
            requestAnimationFrame(() => overlay.classList.add("is-open"));
            document.body.style.overflow = "hidden";
            if (label) label.textContent = "Close menu";
        };
        toggle.addEventListener("click", () => {
            const expanded = toggle.getAttribute("aria-expanded") === "true";
            expanded ? close() : open();
        });
        overlay.querySelectorAll("a").forEach((link) => link.addEventListener("click", close));
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") close();
        });
    }

    const reveals = document.querySelectorAll("[data-reveal]");
    if (reveals.length) {
        if (reduce || !("IntersectionObserver" in window)) {
            reveals.forEach((el) => el.classList.add("is-in"));
        } else {
            const io = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("is-in");
                            io.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.16, rootMargin: "0px 0px -8% 0px" }
            );
            reveals.forEach((el) => io.observe(el));
        }
    }

    const transition = document.querySelector(".page-transition");
    if (transition && !reduce) {
        // Always clear the overlay immediately on any page load/restore
        // This fixes the blank page when using browser back button (bfcache)
        const clearTransition = () => {
            transition.classList.remove("is-leaving");
            document.body.classList.remove("is-entering");
            transition.style.opacity = "0";
            transition.style.transform = "translateY(-100%)";
            transition.style.pointerEvents = "none";
        };

        // Handle normal forward navigation entrance animation
        document.body.classList.add("is-entering");
        transition.style.opacity = "";
        transition.style.transform = "";
        transition.style.pointerEvents = "";
        transition.addEventListener("animationend", () => {
            document.body.classList.remove("is-entering");
        }, { once: true });

        // Fix back/forward navigation — bfcache restores page with overlay stuck
        window.addEventListener("pageshow", (e) => {
            if (e.persisted) {
                // Page was restored from bfcache — clear overlay immediately
                clearTransition();
            }
        });

        // Also handle popstate (hash/history navigation)
        window.addEventListener("popstate", () => {
            clearTransition();
        });

        document.querySelectorAll('a[href]').forEach((link) => {
            const url = new URL(link.href, window.location.href);
            const sameHost = url.origin === window.location.origin;
            const newTab = link.target === "_blank" || link.hasAttribute("download");
            if (!sameHost || newTab || url.hash && url.pathname === window.location.pathname) return;
            link.addEventListener("click", (e) => {
                if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || e.button !== 0) return;
                if (url.href === window.location.href) return;
                e.preventDefault();
                // Reset inline styles before adding leaving class
                transition.style.opacity = "";
                transition.style.transform = "";
                transition.style.pointerEvents = "";
                transition.classList.add("is-leaving");
                setTimeout(() => {
                    window.location.href = url.href;
                }, 620);
            });
        });
    }

    const filters = document.querySelectorAll("[data-filter]");
    const cards = document.querySelectorAll("[data-category]");
    filters.forEach((btn) => {
        btn.addEventListener("click", () => {
            filters.forEach((b) => b.classList.remove("is-on"));
            btn.classList.add("is-on");
            const value = btn.getAttribute("data-filter");
            cards.forEach((card) => {
                const show = value === "all" || card.getAttribute("data-category") === value;
                card.classList.toggle("hidden-card", !show);
            });
        });
    });

    const lightbox = document.querySelector("[data-lightbox]");
    if (lightbox) {
        const img = lightbox.querySelector("[data-lightbox-image]");
        const caption = lightbox.querySelector("[data-lightbox-caption]");
        const items = [...document.querySelectorAll("[data-lightbox-item]")];
        let index = 0;

        const show = (i) => {
            index = (i + items.length) % items.length;
            const item = items[index];
            img.src = item.getAttribute("data-full") || item.querySelector("img").src;
            img.alt = item.querySelector("img").alt || "";
            if (caption) caption.textContent = item.getAttribute("data-caption") || "";
        };
        const openAt = (i) => {
            show(i);
            lightbox.classList.add("is-open");
            lightbox.removeAttribute("hidden");
            document.body.style.overflow = "hidden";
        };
        const hide = () => {
            lightbox.classList.remove("is-open");
            lightbox.setAttribute("hidden", "");
            document.body.style.overflow = "";
        };

        items.forEach((item, i) => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                openAt(i);
            });
            item.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    openAt(i);
                }
            });
        });

        lightbox.querySelector("[data-lightbox-close]")?.addEventListener("click", hide);
        lightbox.querySelector("[data-lightbox-prev]")?.addEventListener("click", () => show(index - 1));
        lightbox.querySelector("[data-lightbox-next]")?.addEventListener("click", () => show(index + 1));
        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) hide();
        });
        document.addEventListener("keydown", (e) => {
            if (!lightbox.classList.contains("is-open")) return;
            if (e.key === "Escape") hide();
            if (e.key === "ArrowLeft") show(index - 1);
            if (e.key === "ArrowRight") show(index + 1);
        });
    }

    const partners = document.querySelector("[data-partners]");
    if (partners) {
        const slides = [...partners.querySelectorAll("[data-partner-slide]")];
        const dots = [...partners.querySelectorAll("[data-partner-dot]")];
        let index = 0;
        let timer;
        const show = (i) => {
            index = (i + slides.length) % slides.length;
            slides.forEach((slide, n) => slide.classList.toggle("is-on", n === index));
            dots.forEach((dot, n) => dot.classList.toggle("is-on", n === index));
        };
        const play = () => {
            if (reduce || slides.length < 2) return;
            stop();
            timer = window.setInterval(() => show(index + 1), 4200);
        };
        const stop = () => {
            if (timer) window.clearInterval(timer);
        };
        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                show(i);
                play();
            });
        });
        partners.addEventListener("mouseenter", stop);
        partners.addEventListener("mouseleave", play);
        let startX = 0;
        partners.addEventListener("pointerdown", (e) => {
            startX = e.clientX;
        });
        partners.addEventListener("pointerup", (e) => {
            const dx = e.clientX - startX;
            if (Math.abs(dx) < 40) return;
            show(index + (dx < 0 ? 1 : -1));
            play();
        });
        play();
    }

    const form = document.querySelector("[data-contact-form]");
    if (form) {
        form.addEventListener("submit", (e) => {
            const name = form.querySelector('[name="name"]');
            const email = form.querySelector('[name="email"]');
            const message = form.querySelector('[name="message"]');
            let valid = true;

            const setError = (field, msg) => {
                // Support both old .error and new .cf-error selectors
                const hold = field.closest('.cf-field')?.querySelector(".cf-error")
                           || field.parentElement.querySelector(".error");
                if (hold) hold.textContent = msg;
                if (msg) valid = false;
            };

            if (name)    setError(name,    name.value.trim().length < 2 ? "Please enter your name." : "");
            if (email)   setError(email,   !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim()) ? "Please enter a valid email." : "");
            if (message) setError(message, message.value.trim().length < 12 ? "Please tell us a little about the project." : "");
            if (!valid) e.preventDefault();
        });
    }
})();
