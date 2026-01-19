<?php
/**
 * The template for displaying the front page
 *
 * @package Cube27
 */

get_header();
?>

<!-- ========================================================================
       HERO SECTION
       ======================================================================== -->
<section class="hero">
    <div class="carousel">
        <div class="carousel-track">
            <!-- Slide 1: Stability. Intelligence. Scale. -->
            <div class="carousel-slide">
                <div class="container">
                    <div class="hero__inner">
                        <div class="hero__content">
                            <span class="hero__badge">Our Vision</span>
                            <h1 class="hero__title">
                                Stability.<br>
                                Intelligence.<br>
                                Scale.
                            </h1>
                            <h2 class="heading-3 mb-6">Not a dev shop. A GCC Partner.</h2>
                            <p class="hero__subtitle">
                                We partner with global enterprises to drive sustainable growth by providing the
                                stability of a dedicated workforce, the intelligence of top-tier engineering,
                                and the ability to scale rapidly.
                            </p>
                            <div class="hero__actions">
                                <a href="<?php echo esc_url(home_url('/services/#commerce')); ?>"
                                    class="btn btn--primary btn--lg">Explore Commerce
                                    Solutions</a>
                                <a href="<?php echo esc_url(home_url('/case-studies')); ?>"
                                    class="btn btn--secondary btn--lg">View Case Studies</a>
                            </div>
                        </div>
                        <div class="hero__image-container">
                            <div class="hero-stats">
                                <div class="h-stat">
                                    <span class="h-stat__value">150+</span>
                                    <span class="h-stat__label">Team Members</span>
                                </div>
                                <div class="h-stat">
                                    <span class="h-stat__value">95%</span>
                                    <span class="h-stat__label">Enterprise SLA</span>
                                </div>
                                <div class="h-stat">
                                    <span class="h-stat__value">$1B+</span>
                                    <span class="h-stat__label">Ad Spend Optimized</span>
                                </div>
                                <div class="h-stat">
                                    <span class="h-stat__value">20+</span>
                                    <span class="h-stat__label">Years Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: GCC & BOT Model -->
            <div class="carousel-slide">
                <div class="container">
                    <div class="hero__inner">
                        <div class="hero__content">
                            <span class="hero__badge">Global Capability Centers</span>
                            <h1 class="hero__title">
                                Your Global Innovation<br>
                                <span>Hub, De-risked.</span>
                            </h1>
                            <p class="hero__subtitle">
                                Expand your engineering footprint without diluting your culture. We act as your
                                "Shadow CTO," managing talent, legal, and infrastructure.
                            </p>
                            <div class="hero__actions">
                                <a href="<?php echo esc_url(home_url('/services/#gcc')); ?>"
                                    class="btn btn--primary btn--lg">Explore GCC
                                    Delivery</a>
                            </div>
                        </div>
                        <div class="hero__image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-gcc.webp"
                                alt="Global GCC Hub" class="hero__image"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hero__image-placeholder" style="display: none;">
                                <span style="font-size: 4rem; opacity: 0.1;">🏢</span>
                                <h3 class="heading-4 text-tertiary">Global Capability Center</h3>
                                <p class="text-sm text-tertiary">Bespoke Engineering & Ops</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Enterprise Commerce -->
            <div class="carousel-slide">
                <div class="container">
                    <div class="hero__inner">
                        <div class="hero__content">
                            <span class="hero__badge">Enterprise Commerce</span>
                            <h1 class="hero__title">
                                Scalable Systems,<br>
                                <span>Seamless Growth.</span>
                            </h1>
                            <div class="tech-stack__items" style="flex-wrap: wrap; gap: 0.5rem;">
                                <span class="service-card__tag">Salesforce Commerce Cloud</span>
                                <span class="service-card__tag">SAP Hybris</span>
                                <span class="service-card__tag">Magento Commerce</span>
                                <span class="service-card__tag">Adobe Commerce</span>
                                <span class="service-card__tag">BigCommerce</span>
                            </div>
                            <p class="hero__subtitle">
                                Deploy high-performance commerce architectures on Salesforce, SAP, and Magento.
                                Built for stability at the highest transaction volumes.
                            </p>
                            <div class="hero__actions">
                                <a href="<?php echo esc_url(home_url('/services/#commerce')); ?>"
                                    class="btn btn--primary btn--lg">View Commerce
                                    Tech</a>
                            </div>
                        </div>
                        <div class="hero__image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-commerce.webp"
                                alt="Enterprise Commerce" class="hero__image"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hero__image-placeholder" style="display: none;">
                                <span style="font-size: 4rem; opacity: 0.1;">🛒</span>
                                <h3 class="heading-4 text-tertiary">Enterprise Commerce</h3>
                                <p class="text-sm text-tertiary">Salesforce • SAP • Magento</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-nav">
            <div class="carousel-dot carousel-dot--active" data-index="0"></div>
            <div class="carousel-dot" data-index="1"></div>
            <div class="carousel-dot" data-index="2"></div>
        </div>
    </div>
</section>

<!-- ========================================================================
       TRUST BAR
       ======================================================================== -->
<section class="trust-bar">
    <div class="trust-bar__container">
        <div class="trust-bar__slider">
            <!-- Set 1 -->
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <span>Dell</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />
                </svg>
                <span>Ford</span>
            </div>
            <!-- ... other logos (Assuming SVG inline so no path change needed) ... -->
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                </svg>
                <span>Epson</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                </svg>
                <span>Avaya</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                </svg>
                <span>Arrow</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                </svg>
                <span>Nvidia</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
                <span>Intel</span>
            </div>

            <!-- Set 2 (Duplicate for infinite) - Keeping structure identical -->
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <span>Dell</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />
                </svg>
                <span>Ford</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                </svg>
                <span>Epson</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                </svg>
                <span>Avaya</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                </svg>
                <span>Arrow</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                </svg>
                <span>Nvidia</span>
            </div>
            <div class="trust-bar__logo">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
                <span>Intel</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
       CORE OFFERINGS
       ======================================================================== -->
<section class="section section--alt" id="offerings">
    <div class="container">
        <div class="section-header">
            <div>
                <span class="section-header__subtitle">Core Offerings</span>
                <h2 class="section-header__title heading-2">What We Deliver</h2>
            </div>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="section-header__link">View All Services
                →</a>
        </div>

        <div class="services-grid">
            <!-- 1. GCC & BOT Model -->
            <a href="<?php echo esc_url(home_url('/services/#gcc')); ?>" class="service-card" data-aos="fade-up">
                <div class="service-card__bg-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <h3 class="service-card__title heading-5">GCC & BOT Model</h3>
                <p class="service-card__description">
                    Build-Operate-Transfer teams with culture mirroring and HR Ops.
                </p>
            </a>

            <!-- 2. Enterprise Commerce -->
            <a href="<?php echo esc_url(home_url('/services/#commerce')); ?>" class="service-card"
                data-aos="fade-up" data-aos-delay="100">
                <div class="service-card__bg-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                        <path d="M3 6h18" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                </div>
                <h3 class="service-card__title heading-5">Enterprise Commerce</h3>
                <p class="service-card__description">
                    Scalable commerce architectures on Salesforce, SAP, and Magento.
                </p>
            </a>

            <!-- 3. MarTech & Intelligence -->
            <a href="<?php echo esc_url(home_url('/services/#martech')); ?>" class="service-card" data-aos="fade-up"
                data-aos-delay="200">
                <div class="service-card__bg-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                        <path d="M22 12A10 10 0 0 0 12 2v10z" />
                    </svg>
                </div>
                <h3 class="service-card__title heading-5">MarTech & Intelligence</h3>
                <p class="service-card__description">
                    Data connectivity, proprietary BI tools, and predictive analytics.
                </p>
            </a>

            <!-- 4. Agentic AI & Automation -->
            <a href="<?php echo esc_url(home_url('/services/#ai')); ?>" class="service-card" data-aos="fade-up"
                data-aos-delay="300">
                <div class="service-card__bg-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M12 8V4H8" />
                        <rect width="16" height="12" x="4" y="8" rx="2" />
                        <path d="M2 14h2" />
                        <path d="M20 14h2" />
                        <path d="M15 13v2" />
                        <path d="M9 13v2" />
                    </svg>
                </div>
                <h3 class="service-card__title heading-5">Agentic AI & Automation</h3>
                <p class="service-card__description">
                    From Process Automation to autonomous Agentic Checkout systems.
                </p>
            </a>
        </div>
    </div>
</section>

<!-- ========================================================================
       THE CUBE27 ADVANTAGE
       ======================================================================== -->
<section class="section" id="advantage">
    <div class="container">
        <div class="section-header text-center" style="justify-content: center;">
            <div>
                <span class="section-header__subtitle">Why Choose Us</span>
                <h2 class="section-header__title heading-2">The Cube27 Advantage</h2>
            </div>
        </div>

        <div class="advantages" data-aos="fade-up">
            <div class="advantage">
                <div class="advantage__stat">Top 1%</div>
                <h4 class="advantage__title">Stringent Hiring</h4>
                <p class="advantage__description">
                    Global best practices ensuring top 1% talent acquisition.
                </p>
            </div>
            <div class="advantage">
                <div class="advantage__stat">6 Weeks</div>
                <h4 class="advantage__title">Rapid Scale</h4>
                <p class="advantage__description">
                    Resource onboarding time.
                </p>
            </div>
            <div class="advantage">
                <div class="advantage__stat">&lt;10%</div>
                <h4 class="advantage__title">Stability</h4>
                <p class="advantage__description">
                    Attrition rate ensures long-term project continuity.
                </p>
            </div>
            <div class="advantage">
                <div class="advantage__stat">24/7</div>
                <h4 class="advantage__title">Global Reach</h4>
                <p class="advantage__description">
                    Support across NORAM, EMEA, APAC, and India.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
       CTA SECTION
       ======================================================================== -->
<section class="section section--alt">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h2 class="heading-2 mb-4">Ready to Transform?</h2>
            <p class="text-lg text-secondary mb-8" style="max-width: 600px; margin-left: auto; margin-right: auto;">
                Schedule a consultation with our Solutions Architect.
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn--primary btn--lg">Partner with
                Us</a>
        </div>
    </div>
</section>

<?php
get_footer();
