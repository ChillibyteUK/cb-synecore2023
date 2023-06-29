<section class="our_clients py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="mb-4 text-center">' . get_field('title') . '</h2>';
        }
        if (get_field('subtitle')) {
            echo '<div class="fw-bold mb-4 text-center">' . get_field('subtitle') . '</div>';
        }
        if (get_field('intro')) {
            echo '<div class="mb-5 text-center">' . get_field('intro') . '</div>';
        }
        ?>
        <div class="our_clients__slider">
            <?php
        foreach (get_field('logos','options') as $l) {
            ?>
            <div class="our_clients__logo">
                <img src="<?=wp_get_attachment_image_url($l,'large')?>" alt="">
            </div>
            <?php
        }
            ?>
        </div>
        <div class="our_clients__arrows">
            <img class="prev" src="<?=get_stylesheet_directory_uri()?>/img/arrow-left--red.png" alt="">
            <img class="next" src="<?=get_stylesheet_directory_uri()?>/img/arrow-right--red.png" alt="">
        </div>
    </div>
</section>
<?php
add_action('wp_footer',function(){
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
jQuery(function($){
  $('.our_clients__slider').slick({
    infinite: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    dots: false,
    responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    autoplay: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true
                }
            }
        ]
  });
});
</script>
    <?php
});