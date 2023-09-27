<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-700.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
            );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
            );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
?>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Synecore",
            "url": "https://www.synecore.co.uk/",
            "logo": "https://www.synecore.co.uk/wp-content/theme/cb-synecore2023/img/synecore-logo.jpg",
            "description": "...",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1 Conqueror Court",
                "addressLocality": "Sittingbourne",
                "addressRegion": "Kent",
                "postalCode": "ME10 5BH",
                "addressCountry": "UK"
            },
            "telephone": "+44 (0) 1795 509 509",
            "email": "sales@synecore.co.uk"
        }
        }
    </script>

</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php do_action('wp_body_open'); ?>
<div id="wrapper-navbar" class="fixed-top">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-xl py-2 nav-top align-items-center navbar-grid">
            <a href="/" class="logo d-none d-sm-block" aria-label="Synecore Homepage"><img src="<?=get_stylesheet_directory_uri()?>/img/synecore-logo.svg"></a>
            <a href="/" class="logo--icon d-sm-none" aria-label="Synecore Homepage"><img src="<?=get_stylesheet_directory_uri()?>/img/synecore-icon.svg"></a>
            <div class="button-container d-md-none text-end">
                <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="d-flex flex-column-reverse flex-md-column">
                <div id="topNav" class="d-none d-md-flex px-2 px-md-0 collapse navbar-collapse navbars">
                    <ul id="top-nav" class="navbar-nav w-100 justify-content-end align-items-md-center mt-2 mt-md-0 d-flex flex-row">
                        <li class="menu-item nav-item">
                            <a title="Phone" href="tel:<?=parse_phone(get_field('contact_phone','options'))?>" class="nav-link"><?=get_field('contact_phone','options')?></a>
                        </li>
                        <li class="menu-item nav-item">
                            <a title="Email" href="mailto:<?=get_field('contact_email','options')?>" class="nav-link"><?=get_field('contact_email','options')?></a>
                        </li>
                        <li class="nav-item"><?=do_shortcode('[social_in_icon]')?></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                        <?php
                        wp_nav_menu(
        array(
            'theme_location'  => 'primary_nav',
            'container_class' => 'w-100',
            'menu_class'      => 'navbar-nav justify-content-between',
            'fallback_cb'     => '',
            'menu_id'         => 'navbarr',
            'depth'           => 3,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
    );
    ?>
                </div>
            </div>
            <div class="sidenav-container d-none d-md-block">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="sidenav" aria-labelledby="sidenavLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidenavLabel"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'sidebar_nav',
                'container_class' => 'w-100',
                'menu_class'      => 'navbar-nav justify-content-around',
                'fallback_cb'     => '',
                'menu_id'         => 'navbarr',
                'depth'           => 3,
                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            )
        );
        ?>
    </div>
</div>