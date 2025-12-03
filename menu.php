<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        transition: box-shadow 0.3s ease;
    }
    .portfolio-text {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
    }

    /* From Uiverse.io by barisdogansutcu */
    .head_btn {
        display: flex;
        width: fit-content;
        align-items: center;
        justify-content: center;
        height: 50px;
        position: relative;
        padding: 0 20px;
        font-size: 18px;
        text-transform: uppercase;
        border: 1px solid black;
        border-radius: 12px;
        overflow: hidden;
        transition: 31ms cubic-bezier(.5, .7, .4, 1);
    }

    .head_btn:before {
        content: attr(alt);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        inset: 0;
        font-size: 24px;
        font-weight: 400;
        line-height: 14px;
        color: #0A101C;
        opacity: 1;
    }

    .head_btn:active {
        box-shadow: none;
        transform: translateY(7px);
        transition: 35ms cubic-bezier(.5, .7, .4, 1);
    }

    .head_btn:hover:before {
        transition: all .0s;
        transform: translateY(100%);
        opacity: 0;
    }

    .head_btn i {
        color: #0A101C;
        font-size: 24px;
        font-weight: 400;
        line-height: 14px;
        font-style: normal;
        transition: all 2s ease;
        transform: translateY(-20px);
        opacity: 0;
    }

    .head_btn:hover i {
        transition: all .2s ease;
        transform: translateY(0px);
        opacity: 1;
    }

    .head_btn:hover i:nth-child(1) {
        transition-delay: 0.045s;
    }

    .head_btn:hover i:nth-child(2) {
        transition-delay: calc(0.045s * 3);
    }

    .head_btn:hover i:nth-child(3) {
        transition-delay: calc(0.045s * 4);
    }

    .head_btn:hover i:nth-child(4) {
        transition-delay: calc(0.045s * 5);
    }

    .head_btn:hover i:nth-child(6) {
        transition-delay: calc(0.045s * 6);
    }

    .head_btn:hover i:nth-child(7) {
        transition-delay: calc(0.045s * 7);
    }

    .head_btn:hover i:nth-child(8) {
        transition-delay: calc(0.045s * 8);
    }

    .head_btn:hover i:nth-child(9) {
        transition-delay: calc(0.045s * 9);
    }

    .head_btn:hover i:nth-child(10) {
        transition-delay: calc(0.045s * 10);
    }


    .hamburger {
        display: none;
        flex-direction: column;
        gap: 0.25rem;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
    }

    .hamburger span {
        width: 25px;
        height: 3px;
        background-color: #1f2937;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .portfolio-text {
            display: none;
        }

        .head_btn {
            display: none;
        }

        .hamburger {
            display: flex;
        }
    }
</style>
<header>
    <div class="logo">
        <a href="#">
            <img src="./images/iw_logo.svg" alt="intelliworkz">
        </a>
    </div>
    <div class="portfolio-text">
        <h2 class="title_30"><span style="color:#9D9CC2;">Our </span> <span style="color:#282663;">Portfolio</span></h2>
    </div>
    <a href="#" class="head_btn" alt="Start a Project">
        <i>S</i>
        <i>t</i>
        <i>a</i>
        <i>r</i>
        <i>t</i>
        <i>&nbsp;</i>
        <i>a</i>
        <i>&nbsp;</i>
        <i>P</i>
        <i>r</i>
        <i>o</i>
        <i>j</i>
        <i>e</i>
        <i>c</i>
        <i>t</i>
    </a>
    <button class="hamburger" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</header>
