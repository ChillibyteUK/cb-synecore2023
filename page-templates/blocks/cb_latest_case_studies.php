<?php
$q = wp_get_recent_posts(array(
    'post_type' => 'projects',
    'numberposts' => 2
));
?>
<section class="cs_latest all_projects py-5">
    <div class="container-xl">
        <div class="all_projects__grid">
            <?php
            foreach ($q as $i) {
                $img = get_the_post_thumbnail_url($i['ID']);
                if (!$img ) {
                    foreach ( parse_blocks( get_the_content(null, false, $i['ID']) ) as $b ) {
                        if($b['blockName'] == 'acf/cb-hero') {
                            $img = $b['attrs']['data']['images_0_image'];
                            $img = wp_get_attachment_image_url($img,'large');
                        }
                    }
                }
                ?>
            <a class="all_projects__card" href="<?=get_the_permalink($i['ID'])?>">
                <img src="<?=$img?>" alt="">
                <h2><?=get_the_title($i['ID'])?></h2>
            </a>
                <?php
            }
            ?>
        </div>
    </div>
</section>