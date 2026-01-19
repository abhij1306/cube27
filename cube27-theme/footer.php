<?php
/**
 * The template for displaying the footer
 *
 * @package Cube27
 */

?>

<!-- ========================================================================
       FOOTER
       ======================================================================== -->
<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div class="footer__brand">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Cube27 Logo">
                    Cube27
                </div>
                <p class="footer__tagline" style="margin-bottom: 1rem;">
                    Stability. Intelligence. Scale.<br>
                    Building high-performance GCCs and enterprise solutions.
                </p>
                <p class="text-sm font-semibold"
                    style="color: var(--color-primary); letter-spacing: 0.05em; text-transform: uppercase;">
                    Powered by People, Enabled by Tech
                </p>
            </div>

            <div>
                <h4 class="footer__title">Services</h4>
                <ul class="footer__links">
                    <li><a href="<?php echo esc_url(home_url('/services/#gcc')); ?>" class="footer__link">GCC & BOT
                            Model</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/#commerce')); ?>"
                            class="footer__link">Enterprise Commerce</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/#martech')); ?>"
                            class="footer__link">MarTech & Intelligence</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/#ai')); ?>" class="footer__link">Agentic AI
                            & Automation</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer__title">Company</h4>
                <ul class="footer__links">
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="footer__link">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/case-studies')); ?>" class="footer__link">Success
                            Stories</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer__link">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer__title">Contact</h4>
                <ul class="footer__links">
                    <li><a href="mailto:contact@cube27.com" class="footer__link">contact@cube27.com</a></li>
                    <li><a href="tel:+919881720375" class="footer__link">+91-9881720375</a></li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom">
            <p>© <?php echo date('Y'); ?> Cube27. All rights reserved.</p>
            <div class="footer__legal">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts are enqueued in functions.php -->
<?php wp_footer(); ?>

</body>

</html>