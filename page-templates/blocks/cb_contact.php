<section class="contact pad-top">
    <iframe src="<?=get_field('maps_url')?>" frameborder="0" width="100%" height="450" loading="lazy"></iframe>
    <div class="container-xl my-5">
        <div class="row g-4">
            <div class="col-md-6">
                <h2>Contact</h2>
                <?=do_shortcode('[gravityform id="' . get_field('form_id') . '" title="false"]')?>
            </div>
            <div class="col-md-6">
                <h2 class="h3">Contact</h2>
                <div class="mb-2">Phone: <a href="tel:<?=parse_phone(get_field('contact_phone','options'))?>"><?=get_field('contact_phone','options')?></a></div>
                <div class="mb-2">Fax: <?=get_field('contact_fax','options')?></div>
                <div class="mb-4">Email: <a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
                <h2 class="h3">Head Office</h2>
                <div class="mb-4"><?=get_field('contact_address', 'options')?></div>
                <div>Registered in England No. 05420500</div>
            </div>
        </div>
    </div>
</section>