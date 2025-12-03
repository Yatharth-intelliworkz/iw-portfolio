<?php include('header.php') ?>

<style>
  .case-list {
    padding: 120px 0;    
    color: #333;
  }

.case-row {
  display: flex;
  width: 100%;
  min-height: 240px;
  padding: 60px 0;
  border-bottom: 1px solid #222;
  overflow: hidden;
  cursor: pointer;
  position: relative;
  /* ADD THIS LINE */
  contain: layout style;
}

  .case-media {
    width: 0%;
    overflow: hidden;
    flex-shrink: 0;
    border-radius: 16px;
    margin-right: 60px;
  }

  .case-media img {
    width: 100%;
    height: 680px;
    /* tall image forces row height */
    object-fit: cover;
    transform: translateX(-100%);
    border-radius: 16px;
  }

  .case-text {
    width: 100%;
    padding-right: 60px;
    transition: width 1.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .num {
    font-size: 20px;
    color: #333;
    display: block;
    margin-bottom: 16px;
  }

  .case-row h2 {
    font-size: 56px;
    font-weight: 400;
    margin: 0 0 24px 0;
    line-height: 1.1;
    color: #333;
  }

  .tags {
    margin: 24px 0 32px;
  }

  .tags span {
    display: inline-block;    
    color: #333;
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 14px;
    margin-right: 12px;
    margin-bottom: 8px;
  }

  .case-text p {
    font-size: 20px;
    line-height: 1.7;    
  }

  /* ACTIVE STATE */
  .case-row.active .case-media {
    width: 60%;
  }

  .case-row.active .case-text {
    width: 40%;
  }

  .case-row.active .case-media img {
    transform: translateX(0);
  }

  .case-row.active .case-text,
  .case-row.active .case-text * {
    color: #333 !important;
  }

  /* .case-row.active::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.75);
    z-index: -1;
    pointer-events: none;
  } */
</style>

<!-- ========== CASE STUDY LIST SECTION ========== -->
<section class="case-list">
  <div class="container">

    <!-- PROJECT 01 -->
    <div class="case-row">
      <div class="case-media">
        <img
          src="https://images.unsplash.com/photo-1764526624453-db32c24eca55?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0fHx8ZW58MHx8fHx8"
          alt="">
      </div>
      <div class="case-text">
        <span class="num">01</span>
        <h2>Heavy Metal & Tubes</h2>
        <div class="tags">
          <span>3D Design</span>
          <span>UI/UX</span>
          <span>Motion</span>
          <span>Development</span>
        </div>
        <p>
          Forging a new era of industrial storytelling through cinematic 3D, bold typography,
          and immersive digital experiences. From technical precision to emotional impact.
        </p>
      </div>
    </div>

    <!-- PROJECT 02 -->
    <div class="case-row">
      <div class="case-media">
        <img src="https://images.unsplash.com/photo-1581093458791-9d6c92d2e2c3?w=1200&h=800&fit=crop" alt="">
      </div>
      <div class="case-text">
        <span class="num">02</span>
        <h2>Flexibel Expansion Joints</h2>
        <div class="tags">
          <span>Branding</span>
          <span>WebGL</span>
          <span>Engineering</span>
        </div>
        <p>
          A seamless fusion of engineering precision and digital artistry. WebGL-driven 3D
          configurator meets minimalist branding.
        </p>
      </div>
    </div>

  </div>
</section>


<script>
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
</script>
<?php include('footer.php') ?>