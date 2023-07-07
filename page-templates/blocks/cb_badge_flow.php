<section class="accreditations py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="h4 mb-4 text-center">' . get_field('title') . '</h2>';
        }
        ?>
        <div class="accreditations__flow">
            <?php
        foreach (get_field('badges') as $a) {
            ?>
            <div class="accreditaition__image">
                <img src="<?=wp_get_attachment_image_url($a['ID'],'large')?>" alt="">
            <?php
            if (get_field('show_caption')[0] ?? null && get_field('show_caption')[0] == 'Yes') {
                ?>
                <div class="accreditations__caption"><?=$a['caption']?></div>
                <?php
            }
            ?>
            </div>
            <?php
        }
            ?>
        </div>
    </div>
</section>