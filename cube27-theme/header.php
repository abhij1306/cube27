<?php
/**
 * The header for our theme
 *
 * @package Cube27
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cube27 - Building high-performance Global Capability Centers (GCC) and delivering bespoke Enterprise Commerce solutions. Powered by People, Enabled by Tech.">
    <!-- Title is handled by wp_head() theme support -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Background Decor -->
    <div class="bg-bloom bg-bloom--1"></div>
    <div class="bg-bloom bg-bloom--2"></div>
    <div class="scroll-progress"></div>

    <!-- ========================================================================
       HEADER
       ======================================================================== -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <span class="header__motto">Powered by People, Enabled by Tech</span>
            </div>
        </div>
        <div class="header__main">
            <div class="container">
                <div class="header__inner">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Cube27 Logo">
                        <span>Cube27</span>
                    </a>

                    <nav class="nav">
                        <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <ul class="nav__list">
                            <li class="nav__mobile-brand">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                    alt="Cube27 Logo">
                                <span>Cube27</span>
                            </li>
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/services')); ?>" class="nav__link">Services
                                    <i>▼</i></a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo esc_url(home_url('/services/#gcc')); ?>"
                                        class="dropdown-link">GCC-as-a-Service</a>
                                    <a href="<?php echo esc_url(home_url('/services/#commerce')); ?>"
                                        class="dropdown-link">Salesforce & Platforms</a>
                                    <a href="<?php echo esc_url(home_url('/services/#engineering')); ?>"
                                        class="dropdown-link">Digital Engineering</a>
                                    <a href="<?php echo esc_url(home_url('/services/#ai')); ?>"
                                        class="dropdown-link">Agentic AI & Automation</a>
                                </div>
                            </li>
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="nav__link">About Us
                                    <i>▼</i></a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo esc_url(home_url('/about/#vision')); ?>"
                                        class="dropdown-link">Vision & Values</a>
                                    <a href="<?php echo esc_url(home_url('/about/#life')); ?>"
                                        class="dropdown-link">Life at Cube27</a>
                                    <a href="<?php echo esc_url(home_url('/about/#leaders')); ?>"
                                        class="dropdown-link">Meet Our Leaders</a>
                                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"
                                        class="dropdown-link">Privacy Policy</a>
                                </div>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/case-studies')); ?>"
                                    class="nav__link nav__link--no-indicator">Success
                                    Stories</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>"
                                    class="nav__link nav__link--no-indicator">Contact</a></li>
                            <li class="nav__cta-mobile">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                                    class="btn btn--primary btn--lg" style="width: 100%;">Partner
                                    with Us</a>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>"
                            class="btn btn--primary nav__cta">Partner with Us</a>
                    </nav>
                </div>
            </div>
    </header>