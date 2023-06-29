<section class="three_nav">
    <div class="container-xl">
        <div class="three_nav__grid">
            <?php
            while(have_rows('nav')) {
                the_row();
                ?>
            <a href="<?=get_the_permalink(get_field('page'))?>">
                <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'),'full')?>" alt="">
                <p><?=get_sub_field('title')?></p>
            </a>
                <?php
            }
            ?>
        </div>
    </div>
</section>