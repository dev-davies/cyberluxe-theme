<?php
/**
 * Template Name: Front Page
 */
get_header();
?>

<main>
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="video-placeholder"></div>
        <div class="hero-overlay">
            <h1 class="glitch-text" data-text="PRECISION. VISION. POWER.">PRECISION. VISION. POWER.</h1>
            <p class="hero-subhead">Next-Gen Electronics for the Modern Habitat.</p>
            <a href="#setup" class="cta-button">INITIATE SETUP</a>
        </div>
    </section>

    <!-- Product Showcase -->
    <section id="products" class="products-section">
        <h2 class="section-title">SYSTEM UPGRADES</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <article class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3>OLED VISION 55</h3>
                    <span class="tech-badge">4K 120Hz</span>
                    <p class="price">$1,299.00</p>
                </div>
            </article>
            <!-- Product 2 -->
            <article class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3>AUDIO NEXUS</h3>
                    <span class="tech-badge">Spatial 360</span>
                    <p class="price">$499.00</p>
                </div>
            </article>
            <!-- Product 3 -->
            <article class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3>HOME CORE</h3>
                    <span class="tech-badge">AI Hub</span>
                    <p class="price">$299.00</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Solar Reactor Section -->
    <section id="solar" class="solar-section">
        <div class="solar-content">
            <h2>OFF-GRID DOMINANCE</h2>
            <p>High-capacity solar energy solutions.</p>
            <a href="#solar-explore" class="cta-button secondary">Explore Power</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>