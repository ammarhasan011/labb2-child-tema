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
    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>