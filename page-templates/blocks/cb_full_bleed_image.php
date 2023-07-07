<?php
$img = wp_get_attachment_image_url( get_field('image') ,'full');
?>
<link rel="preload" as="image" href="<?=$img?>">
<section class="full_bleed" style="background-image:url(<?=$img?>)"></section>