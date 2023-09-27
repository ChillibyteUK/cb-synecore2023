<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl text-center">
        <img src="<?=get_stylesheet_directory_uri()?>/img/synecore-logo.svg"
                        class="footer__logo" alt="" width=300 height=60>
        <div class="footer__address mb-4">
            <?=do_shortcode('[contact_address]')?>
            |
            <?=do_shortcode('[contact_phone]')?>
            |
            <?=do_shortcode('[contact_email]')?>
        </div>
        <div class="footer__menu pb-4">
            <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
        </div>
    </div>
</footer>
<div class="colophon pt-1">
    <div class="container-xl pb-2 text-center">
        <div class="mb-4"><?=get_field('colophon','options')?></div>
        <div class="mb-4">&copy; <?=date('Y')?> Synecore Ltd. Registered in England, no. 05420500</div>
        <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>