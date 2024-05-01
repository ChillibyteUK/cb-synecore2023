<section class="accreditations py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="h4 mb-4 text-center">' . get_field('title') . '</h2>';
        }

        if( have_rows('badges_repeater') ):
        ?>
                <div class="accreditations__flow">
        <?php
            while( have_rows('badges_repeater') ) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                    ?>
                    <div class="accreditaition__image">
                        <?php
                        if ( $link ) {
                        ?>
                        <a href="<?=$link;?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                        <?php
                        } else {
                        ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php
                        }
                        ?>
                        <div class="accreditations__caption"><?=$title?></div>
                    </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>