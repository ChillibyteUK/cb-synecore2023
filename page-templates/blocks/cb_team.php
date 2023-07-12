<section class="team py-5">
    <div class="container-xl">
        <div class="team__grid">
        <?php
        while( have_rows('members')) {
            the_row();
            ?>
            <div class="team__card">
                <img class="team__image" src="<?=wp_get_attachment_image_url(get_sub_field('image'),'full')?>" alt="">
                <div class="team__detail">
                    <div class="team__info">
                        <div class="team__name"><?=get_sub_field('name')?></div>
                        <div class="team__role"><?=get_sub_field('title')?></div>
                        <div class="team__linkedin"><a href="<?=get_sub_field('linkedin_url')?>" target="_blank"><i class="fa-brands fa-linkedin-in text-blue"></i></a></div>
                    </div>
                    <div class="team__bio"><?=get_sub_field('bio')?></div>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>