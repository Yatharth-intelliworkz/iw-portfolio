document.addEventListener('DOMContentLoaded', function () {
    // console.log('Script loaded!');

    // Check if gsap is loaded
    if (typeof gsap === 'undefined') {
        console.error('GSAP is not loaded!');
        return;
    }

    // console.log('GSAP is loaded!');

    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // index script
    // Selectors
    const cards = document.querySelectorAll('.project-card');
    const bgs = document.querySelectorAll('.bg');
    const fgs = document.querySelectorAll('.fg');
    const btns = document.querySelectorAll('.filter-btn');

    let activeIndex = -1;

    // INITIAL SETUP — Hide everything once
    gsap.set(bgs, { opacity: 0 });
    gsap.set(fgs, {
        opacity: 0,
        position: 'fixed',
        top: '50%', left: '50%',
        xPercent: -50, yPercent: -50,
        pointerEvents: 'none'
    });
    gsap.set('.fg img', { width: 0, opacity: 0 });

    // FILTER FUNCTION
    function filterProjects(type) {
        // Reset hover state completely
        if (activeIndex !== -1) hoverOut();

        btns.forEach(b => b.classList.toggle('active', b.dataset.filter === type));

        cards.forEach(card => {
            const show = type === 'all' || card.dataset.filters.includes(type);
            card.classList.toggle('dimmed', !show);
            card.style.pointerEvents = show ? 'auto' : 'none';
            if (show) gsap.set(card, { opacity: 1 });
        });
    }

    // HOVER IN
    function hoverIn(i) {
        if (activeIndex === i || cards[i].classList.contains('dimmed')) return;

        hoverOut(); // Clean previous
        activeIndex = i;
        cards[i].classList.add('active-hover');

        // Background fade in
        gsap.to(bgs[i], { opacity: 1, duration: 0.7, ease: "power2.out" });

        // Image expand from center
        gsap.to(fgs[i], { opacity: 1, duration: 0.01 });
        gsap.fromTo(fgs[i].querySelector('img'),
            { width: 0, opacity: 0 },
            { width: 600, opacity: 1, duration: 1.1, delay: 0.1, ease: "expo.out" }
        );

        // Dim other cards
        cards.forEach((c, idx) => {
            if (idx !== i && !c.classList.contains('dimmed')) {
                gsap.to(c, { opacity: 0.15, duration: 0.6 });
            }
        });
    }

    // HOVER OUT — Super clean
    function hoverOut() {
        if (activeIndex === -1) return;

        const i = activeIndex;
        cards[i].classList.remove('active-hover');

        gsap.to(fgs[i].querySelector('img'), { width: 0, opacity: 0, duration: 0.5, ease: "expo.in" });
        gsap.to(fgs[i], { opacity: 0, duration: 0.4 });
        gsap.to(bgs[i], { opacity: 0, duration: 0.6 });

        activeIndex = -1;

        // Restore visible cards
        cards.forEach(c => {
            if (!c.classList.contains('dimmed')) {
                gsap.to(c, { opacity: 1, duration: 0.6, ease: "power2.out" });
            }
        });
    }

    // EVENTS
    cards.forEach((card, i) => {
        card.addEventListener('mouseenter', () => hoverIn(i));
        card.addEventListener('mouseleave', hoverOut);
    });

    btns.forEach(btn => {
        btn.addEventListener('click', () => filterProjects(btn.dataset.filter));
    });

    // INIT
    filterProjects('all');
    // index script

    // listing page script
    document.querySelectorAll('.case-row').forEach(row => {
        const media = row.querySelector('.case-media');
        const img = media.querySelector('img');
        const text = row.querySelector('.case-text');

        let isHovering = false;

        const enter = () => {
            if (isHovering) return;
            isHovering = true;

            // Add active class immediately for overlay + text color
            row.classList.add('active');

            // Kill any running tweens to prevent conflicts
            gsap.killTweensOf([media, text, img]);

            gsap.to(media, { width: "60%", duration: 1.4, ease: "expo.out" });
            gsap.to(text, { width: "40%", duration: 1.4, ease: "expo.out" });
            gsap.to(img, { x: "0%", duration: 1.6, ease: "expo.out", delay: 0.2 });
        };

        const leave = () => {
            if (!isHovering) return;
            isHovering = false;

            gsap.killTweensOf([media, text, img]);

            gsap.to(media, {
                width: 0,
                duration: 1.1,
                ease: "expo.in"
            });
            gsap.to(text, {
                width: "100%",
                duration: 1.25,
                ease: "expo.out"
            });
            gsap.to(img, {
                x: "-100%",
                duration: 0.9,
                ease: "expo.in",
                onComplete: () => {
                    // Only remove active class AFTER all animations finish
                    row.classList.remove('active');
                }
            });
        };

        row.addEventListener('mouseenter', enter);
        row.addEventListener('mouseleave', leave);

        // Mobile tap (toggle)
        row.addEventListener('click', () => {
            if (window.innerWidth <= 1024) {
                isHovering ? leave() : enter();
            }
        });
    });
    // index page script

    // Find the text element
    const textElement = document.querySelector(".gsap_text");

    if (!textElement) {
        console.error('No .gsap_text element found!');
        return;
    }

    // console.log('Text element found:', textElement);

    // Split text into words
    function splitTextIntoWords(element) {
        const text = element.textContent;
        const words = text.split(' ').filter(word => word.length > 0);

        // Clear original text
        element.innerHTML = '';

        // Create spans for each word
        words.forEach((word, index) => {
            let span = document.createElement("span");
            span.className = "gsap-word";
            span.style.display = "inline-block";
            span.textContent = word;
            element.appendChild(span);

            // Add space after each word except the last
            if (index < words.length - 1) {
                element.appendChild(document.createTextNode(' '));
            }
        });
    }

    // Apply splitting
    splitTextIntoWords(textElement);

    const words = textElement.querySelectorAll('.gsap-word');
    // console.log('Words created:', words.length);

    // Set initial state
    gsap.set(words, { opacity: 0.2 });

    // Create animation
    gsap.to(words, {
        opacity: 1,
        stagger: 0.04,
        duration: 2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".project_info",
            start: "top 90%",
            end: "bottom 10%",
            scrub: 2,
            markers: false, // TEMPORARILY ENABLED to see trigger points
            // onEnter: () => console.log('Animation triggered!'),
        }
    });

    // console.log('Animation setup complete!');

    // Header scroll animation
    const header = document.querySelector('header');
    const hamburger = document.querySelector('.hamburger');

    if (header) {
        let lastScroll = 0;

        if (hamburger) {
            hamburger.addEventListener('click', () => {
                alert('Mobile menu would open here');
            });
        }

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                gsap.to(header, {
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                });
                return;
            }

            if (currentScroll > lastScroll && currentScroll > 100) {
                gsap.to(header, {
                    y: -100,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            } else if (currentScroll < lastScroll) {
                gsap.to(header, {
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }

            lastScroll = currentScroll;
        });
    }
    // Header scroll animation

    // slick slider js
   
    // slick slider js
});


 $(".inds_slider").slick({
        infinite:0,
        slidesToShow:2,
        slidesToScroll:1,
        dots:false,
        arrows:false,
        autoplay:true,
        autoplaySpeed:0,
        speed:5e3,
        cssEase:"linear",        
    })