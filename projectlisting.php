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
<section>
  <div class="container">
    <div class="inner_head">
      <h1 class="title_80">Metal industry</h1>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

      <!-- ALL -->
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
          type="button" role="tab" aria-controls="pills-all" aria-selected="true">
          All
        </button>
      </li>

      <!-- CREATIVE -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-creative-tab" data-bs-toggle="pill" data-bs-target="#pills-creative"
          type="button" role="tab" aria-controls="pills-creative" aria-selected="false">
          Creative
        </button>
      </li>

      <!-- DIGITAL -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-digital-tab" data-bs-toggle="pill" data-bs-target="#pills-digital"
          type="button" role="tab" aria-controls="pills-digital" aria-selected="false">
          Digital
        </button>
      </li>

      <!-- WEBSITE -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-website-tab" data-bs-toggle="pill" data-bs-target="#pills-website"
          type="button" role="tab" aria-controls="pills-website" aria-selected="false">
          Website
        </button>
      </li>

    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
        <div class="case-list">
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
      </div>

      <div class="tab-pane fade" id="pills-creative" role="tabpanel" aria-labelledby="pills-creative-tab">
        <div class="case-list">
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
      </div>

      <div class="tab-pane fade" id="pills-digital" role="tabpanel" aria-labelledby="pills-digital-tab">
        <div class="case-list">
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
      </div>

      <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">
        <div class="case-list">
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
      </div>

    </div>

  </div>
</section>
<section>
  <div class="container">
    <div class="inds_slider">
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Food & Beverages</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Solar</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Jewellery</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Pharmaceuticals</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Water</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Real Estate</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Cosmetics</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Events & Expo</h2>
            <p>Industry</p>
          </div>
        </a>
      </div>
      <div class="slide">
        <a href="javascript:void(0)">
          <div class="title_wrapper">
            <h2 class="title_80">Engineering</h2>
            <p>Industry</p>
          </div>
        </a>
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