<?php
$cta = get_field('cta');
?>
<section class="text_nav py-5">
    <div class="container-xl">
        <div class="row gx-5">
            <div class="col-lg-6 col-xl-7 text-center">
                <h1 class="mb-4"><?=get_field('title')?></h1>
                <?=get_field('content')?>
                <a href="<?=$cta['url']?>" target="<?=$cta['target']?>" class="btn btn-red"><?=$cta['title']?></a>
            </div>
            <div class="col-lg-5 col-xl-5 text_nav__nav">
                <?php
                while(have_rows('nav')) {
                    the_row();
                    ?>
                    <a class="text_nav__nav-item" href="<?=get_the_permalink(get_sub_field('page'))?>">
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'))?>" alt="">
                        <p><?=get_the_title(get_sub_field('page'))?></p>    
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>