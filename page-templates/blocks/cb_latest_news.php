<?php
$q = wp_get_recent_posts(array(
    'numberposts' => 1,
    'post_status' => 'publish'
));

?>
<section class="news_latest py-5">
    <div class="row mb-3">
        <div class="col-md-6 bg-blue text-md-end p-3 text-white"><h2 class="h3 mb-0">Latest News</h2></div>
    </div>
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h3 class="h4 wrap"><?=$q[0]['post_title']?></h3>
                <div class="text-end">
                    <a href="<?=get_the_permalink($q[0]['ID'])?>">Read More</a>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <img src="<?=get_the_post_thumbnail_url($q[0]['ID'],'full')?>" alt="">
            </div>
        </div>
        <div class="text-center text-md-start">
            <a href="/blog/" class="btn btn-secondary">View all news</a>
        </div>
    </div>
</section>