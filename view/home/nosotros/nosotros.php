<?php
$cssTime = filemtime('../../view/home/nosotros/nosotros.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<link rel="stylesheet" href="../../view/home/nosotros/nosotros.css?v=<?= $cssTime ?>">

<section class="about-apps">
    <h1 class="about-apps__title">About our apps</h1>
    <p class="about-apps__intro">
        A visual collection of our most recent works - each piece crafted with intention, emotion and style.
    </p>

    <div class="about-apps__wrapper">
        <div class="about-apps__glow"></div>

        <img
            class="about-apps__image"
            src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?q=80&w=830&h=844&auto=format&fit=crop"
            alt="About our apps"
        />

        <div class="about-apps__content">
            <h2 class="about-apps__subtitle">Our Latest features</h2>
            <p class="about-apps__text">
                Ship Beautiful Frontends Without the Overhead — Customizable, Scalable and Developer-Friendly UI
                Components.
            </p>

            <div class="about-apps__features">
                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/flashEmoji.png" alt="Flash icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Lightning-Fast Performance</h3>
                        <p class="feature-item__text">Built with speed — minimal load times and optimized.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/colorsEmoji.png" alt="Colours icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Beautifully Designed Components</h3>
                        <p class="feature-item__text">Modern, pixel-perfect UI components ready for any project.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/puzzelEmoji.png" alt="Puzzle icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Plug-and-Play Integration</h3>
                        <p class="feature-item__text">Simple setup with support for React, Next.js and Tailwind css.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
