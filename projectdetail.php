<?php include('header.php') ?>
<style>
    .img_wrapper {
        overflow: hidden;
        border-radius: 20px;
        margin: 15px 0;
    }
</style>
<div class="container">
    <div class="inner_head">
        <h1 class="title_80">Flexibel Expansion Joints</h1>
        <div class="breadcrumbs">
            <a href="javascript:void(0)">
                Our Portfolio
            </a>
            /
            <a href="javascript:void(0)">
                Metal Industry
            </a>
            /
            <a href="javascript:void(0)" class="active_breadcrumb">
                Flexibel Expansion Joints
            </a>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="innerbanner">
            <div class="img_wrapper">
                <img src="./images/banner_1.png" alt="" class="img-fluid img">
            </div>
        </div>

        <div class="mid_detail">
            <div class="col-lg-6">
                <a class="visit_btn" href="javascript:void(0)">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#9D9CC2" />
                    </svg>
                    <span>Visit Website</span>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="project_info">
                    <p class="gsap_text">A UAE-based manufacturer specializing in high-quality expansion joints, metal
                        hoses, and flexible
                        piping solutions for industrial systems.</p>
                </div>
                <div class="techstack">
                    <table class="project_details" aria-label="Project details">
                        <tbody>
                            <tr>
                                <th scope="row">Services</th>
                                <td>
                                    <div class="tags">
                                        <a class="tag" href="#">3D Model</a>
                                        <a class="tag" href="#">UI/UX Design</a>
                                        <a class="tag" href="#">Web Development</a>
                                        <a class="tag" href="#">Brochure Design</a>
                                        <a class="tag" href="#">Social Media Post</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Sector</th>
                                <td>
                                    <div class="tags">
                                        <a class="tag muted" href="#">Metal</a>
                                        <a class="tag muted" href="#">Manufacturing</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Technology</th>
                                <td>
                                    <div class="tags">
                                        <a class="tag" href="#">PHP</a>
                                        <a class="tag" href="#">Laravel</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="bottom_detail">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img_wrapper">
                        <img src="./images/detail_1.png" alt="" class="img-fluid img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_wrapper">
                        <img src="./images/detail_2.png" alt="" class="img-fluid img">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="img_wrapper">
                        <img src="./images/detail_3.png" alt="" class="img-fluid img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_wrapper">
                        <img src="./images/detail_4.png" alt="" class="img-fluid img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_wrapper">
                        <img src="./images/detail_4.png" alt="" class="img-fluid img">
                    </div>
                </div>
            </div>

            <div class="next_project">
                <h5 class="title_80">Next Project</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="15" viewBox="0 0 70 15" fill="none">
                    <path
                        d="M69.7071 8.07088C70.0976 7.68035 70.0976 7.04719 69.7071 6.65666L63.3431 0.292702C62.9526 -0.0978227 62.3195 -0.0978227 61.9289 0.292702C61.5384 0.683226 61.5384 1.31639 61.9289 1.70692L67.5858 7.36377L61.9289 13.0206C61.5384 13.4111 61.5384 14.0443 61.9289 14.4348C62.3195 14.8254 62.9526 14.8254 63.3431 14.4348L69.7071 8.07088ZM0 7.36377V8.36377H69V7.36377V6.36377H0V7.36377Z"
                        fill="#282663" />
                </svg>
            </div>
        </div>

</section>
<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script>
    // register plugin
    gsap.registerPlugin(ScrollTrigger);

    // simple approach: animate each image from scale 1 & y: 40 -> scale 1.08 & y: -40 as it passes through viewport
    // scrub: true makes the animation tied to scroll position (smooth)
    const imgs = gsap.utils.toArray('.img');

    imgs.forEach(img => {
        gsap.fromTo(img,
            { scale: 1.15, y: 5 },                    // start state when the image enters the bottom
            {
                scale: 1,
                y: -5,
                // vertical parallax movement in opposite direction
                ease: 'none',
                scrollTrigger: {
                    trigger: img,
                    start: 'top bottom',                // when top of image hits bottom of viewport
                    end: 'bottom top',                  // when bottom of image hits top of viewport
                    scrub: 0.6,                         // smoothing: 0.6s of inertia for smoother motion
                }
            }
        );
    });

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        ScrollTrigger.getAll().forEach(st => st.kill());
        imgs.forEach(i => i.style.transform = 'none');
    }
</script>
<?php include('footer.php') ?>