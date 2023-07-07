<?php
$orderImage = '';
$constrain = 'constrain-left';

$bg = get_field('background') ?: '#fff';
$img_bg = get_field('image_background') ?: '#fff';
$text = get_field('content_text') ?: '#363635';
?>
<section class="text_text_full_image" style="background-color:<?=$bg?>">
    <div class="text_text_full_image__content">
        <div class="<?=$constrain?> text_text_full_image__content--wrapper">
            <div class="text-center py-5" style="color:<?=$text?>">
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
                        ?>
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                        <?php
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="text_text_full_image__content--wrapper">
            <div class="pb-5 py-lg-5 mt-lg-5" style="color:<?=$text?>">
                <?=get_field('centre_content')?>
            </div>
        </div>
    </div>
    <div class="text_text_full_image__img <?=$orderImage?>" style="background-color:<?=$img_bg?>">
        <img src="<?=wp_get_attachment_image_url(get_field('image'),'full')?>">
    </div>
</section>