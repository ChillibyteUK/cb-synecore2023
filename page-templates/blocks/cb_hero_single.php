<?php
$class = $block['className'] ?? null ?: '';
$img = wp_get_attachment_image_url( get_field('image') ,'full');
$colour = get_field('theme') == 'Dark' ? 'bg-dark' : ''; 
?>
<link rel="preload" as="image" href="<?=$img?>">
<header class="hero-single <?=$class?>" style="background-image:url(<?=$img?>)">
<div class="hero-single__grid">
    <div class="hero-single__content <?=$colour?> bg-opacity-75">
        <div class="hero-single__content--inner">
            <h1 class="mb-4"><?=get_field('title')?></h1>
            <div><?=get_field('content')?></div>
        </div>
    </div>
</div>
</header>