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
            markers: true, // TEMPORARILY ENABLED to see trigger points
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
});