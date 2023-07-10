<?php
$bg = get_field('background');
$left_align = get_field('left_alignment') == 'Left' ? 'text-start' : 'text-center';
$right_align = get_field('right_alignment') == 'Left' ? 'text-start' : 'text-center';
?>
<section class="two_col_text py-5" style="background-color:<?=$bg?>">
    <div class="container-xl">
        <div class="row g-5">
            <div class="col-lg-6 <?=$left_align?>">
                <h2 class="mb-4"><?=get_field('left_title')?></h2>
                <?=get_field('left_content')?>
                <?php
                if (get_field('left_cta')) {
                    $link = get_field('left_cta');
                    ?>
                <a class="btn btn-dark" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>   </a>
                    <?php
                }
                if (get_field('left_icons')) {
                    echo '<div class="d-flex mt-4 icon_flex">';
                    while(have_rows('left_icons')) {
                        the_row();
                        ?>
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                        <?php
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-lg-6 <?=$right_align?>">
                <h2 class="mb-4"><?=get_field('right_title')?></h2>
                <?=get_field('right_content')?>
                <?php
                if (get_field('right_cta')) {
                    $link = get_field('right_cta');
                    ?>
                <a class="btn btn-dark" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>   </a>
                    <?php
                }
                if (get_field('right_icons')) {
                    echo '<div class="d-flex icon_flex">';
                    while(have_rows('right_icons')) {
                        the_row();
                        ?>
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                        <?php
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>