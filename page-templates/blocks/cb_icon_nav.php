<section class="icon_nav">
    <div class="container-xl">
        <?php
        if (get_field('icons')) {
            echo '<div class="d-flex mt-4 icon_flex">';
            while(have_rows('icons')) {
                the_row();
                if (get_sub_field('link')) {
                    echo '<a href="' . get_the_permalink(get_sub_field('link')) . '">';
                }
                ?>
                <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                <div class="h4"><?=get_the_title(get_sub_field('link'))?></div>
                <?php
                if (get_sub_field('link')) {
                    echo '</a>';
                }
            }
            echo '</div>';
        }
        ?>
    </div>
</section>