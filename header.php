<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- wp_head() must be called just before the closing </head> tag -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Navigation -->
    <header class="main-header">
        <div class="logo">
            <?php bloginfo('name'); ?>
        </div>

        <nav class="nav-links">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => false, // Fallback off for cleaner code
                'items_wrap' => '%3$s', // Remove UL wrapper to match static design style (anchors directly in nav)
                // Note: Standard WP menus output UL/LI. If strict flat anchors are needed, 
                // a custom walker is required. For now, assuming basic WP menu structure 
                // can be styled or the user adapts the CSS to target LI A. 
                // However, preserving the user's specific HTML structure:
            ));
            ?>
            <!-- Fallback / Static Links if menu not valid to show intended structure -->
            <?php if (!has_nav_menu('primary')): ?>
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="#products">Systems</a>
                <a href="#solar">Power</a>
                <a href="#support">Support</a>
            <?php endif; ?>
        </nav>

        <div class="nav-icons">
            <a href="#" aria-label="Search">Search</a>
            <a href="#" aria-label="Account">Account</a>
            <a href="#" aria-label="Cart">Cart</a>
        </div>
    </header>