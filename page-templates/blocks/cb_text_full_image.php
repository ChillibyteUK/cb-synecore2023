<?php
$orderImage = '';
$constrain = 'constrain-left';

if (get_field('order') == 'Image/Text') {
    $orderImage = 'reverse';
    $constrain = 'constrain-right';
}
?>
<section class="text_full_image">
    <div class="text_full_image__content bg-grey">
        <div class="text_full_image__content--wrapper">
            <div class="<?=$constrain?> text-center">
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
    </div>
    <div class="text_full_image__img <?=$orderImage?>" style="background-color:<?=get_field('image_background')?>">
        <img src="<?=wp_get_attachment_image_url(get_field('image'),'full')?>">
    </div>
</section>