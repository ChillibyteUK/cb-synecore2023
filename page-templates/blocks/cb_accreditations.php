<section class="accreditations py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="h4 mb-4 text-center">' . get_field('title') . '</h2>';
        }
        ?>
        <div class="accreditations__flow">
            <?php
        foreach (get_field('accreditations','option') as $a) {
            ?>
            <img src="<?=wp_get_attachment_image_url($a,'large')?>" alt="">
            <?php
        }
            ?>
        </div>
    </div>
</section>