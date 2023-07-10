<?php
$orderImage = '';
$constrain = 'constrain-left';

if (get_field('order') == 'Image/Text') {
    $orderImage = 'reverse';
    $constrain = 'constrain-right';
}

$bg = get_field('background') ?: '#fff';
$img_bg = get_field('image_background') ?: '#fff';
$text = get_field('content_text') ?: '#363635';
?>
<section class="text_full_image" style="background-color:<?=$bg?>">
    <div class="text_full_image__content">
        <div class="text_full_image__content--wrapper">
            <div class="<?=$constrain?> text-center py-5" style="color:<?=$text?>">
                <h2 class="mb-4"><?=get_field('title')?></h2>
                <?=get_field('content')?>
                <?php
                if (get_field('cta')) {
                    $link = get_field('cta');
                    ?>
                <a class="btn btn-dark" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>   </a>
                    <?php
                }
                if (get_field('icons')) {
                    echo '<div class="d-flex mt-4 icon_flex">';
                    while(have_rows('icons')) {
                        the_row();
                        if (get_sub_field('link')) {
                            echo '<a href="' . get_the_permalink(get_sub_field('link')) . '">';
                        }
                        ?>
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                        <?php
                        if (get_sub_field('link')) {
                            echo '</a>';
                        }
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="text_full_image__img <?=$orderImage?>" style="background-color:<?=$img_bg?>">
        <img src="<?=wp_get_attachment_image_url(get_field('image'),'full')?>">
    </div>
</section>