<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('storefront_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">
        <!-- removed the text
        © Sport Butiken 2023 and Built with Storefront & WooCommerce.
        and added a text instead. -->
        <p><?php echo 'Tack för att ni besöker oss på sport butiken 💫' ?></p>

        <!-- dynamic_sidebar for my footer  plug in-->
        <div class="footer-widgets">
            <div class="footer-widget-area" id="footer_kort_om_oss">
                <?php dynamic_sidebar('footer_kort_om_oss'); ?>
            </div>
            <div class="footer-widget-area" id="footer_cont">
                <?php dynamic_sidebar('footer_cont'); ?>
            </div>
            <div class="footer-widget-area" id="footer_social-media">
                <?php dynamic_sidebar('footer_social-media'); ?>
            </div>
        </div>

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>