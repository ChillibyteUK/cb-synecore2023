<section class="image_offset">
    <img src="<?=wp_get_attachment_image_url(get_field('top_image'),'full')?>" alt="" class="image_offset__top-img">
        <div class="middle">
            <div class="text__left">
                <div class="text__left--inner text-center">
                    <h2 class="mb-4"><?=get_field('left_title')?></h2>
                    <?=get_field('left_content')?>
                    <?php
                    if (get_field('left_cta')) {
                        $link = get_field('left_cta');
                        ?>
                    <a class="btn btn-dark" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>   </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="text__right">
                <div class="text__right--inner text-center">
                    <h2 class="mb-4"><?=get_field('right_title')?></h2>
                    <?=get_field('right_content')?>
                    <?php
                    if (get_field('right_cta')) {
                        $link = get_field('right_cta');
                        ?>
                    <a class="btn btn-outline" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?>   </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <img src="<?=wp_get_attachment_image_url(get_field('bottom_image'),'full')?>" alt="" class="image_offset__bottom-img">
</section>