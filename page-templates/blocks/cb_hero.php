<?php
$class = $block['className'] ?? null ?: '';
?>
<header class="hero <?=$class?>">
    <div class="carousel slide carousel-fade mb-4" data-bs-ride="carousel" id="front-carousel">
        <div class="carousel-inner">
            <?php
        $active = 'active';
        while (have_rows('images')) {
            the_row();
            $img = wp_get_attachment_image_url( get_sub_field('image') ,'full');
            ?>
            <link rel="preload" as="image" href="<?=$img?>">
            <div class="carousel-item <?=$active?>" style="background-image:url(<?=$img?>)"></div>
            <?php
            $active = '';
        }
        ?>
    </div>
    <ol class="carousel-indicators w-100">
        <?php
        $count = count(get_field('images'));
        $active = 'active';
        for ($i = 0; $i < $count; $i++) {
            echo '<li data-bs-target="#front-carousel" data-bs-slide-to="' . $i . '" class="'. $active . '"></li>';
            $active = '';
        }
        ?>
    </ol>
    </div>
    <?php
if (get_field('title') != null) {
    ?>
    <div class="hero__grid">
        <div class="hero__content bg-dark bg-opacity-75">
            <div class="hero__content--inner">
                <h1 class="mb-4"><?=get_field('title')?></h1>
                <?php
                if (get_field('content') != null) {
                    ?>
                <div><?=get_field('content')?></div>
                    <?php
                }
                ?>
            </div>
        </div>
    <?php
}
?>
    </div>
</header>

