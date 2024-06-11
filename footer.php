<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl text-center">
        <img src="https://www.synecore.co.uk/wp-content/themes/cb-synecore2023/img/synecore-logo.png" class="footer__logo" alt="" width=300 height=60>
        <div class="footer__address mb-4">
            <?=strip_tags(do_shortcode('[contact_address]'))?>
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
        <div class="mb-4"><a href="/wp-content/uploads/2023/11/Synecore-Terms-and-Conditions-2020.pdf">Terms &amp; Conditions</a></div>
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

<script>
jQuery(document).ready(function($) {
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');
 
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });
 
        return false;
    });
});
</script>
</body>

</html>