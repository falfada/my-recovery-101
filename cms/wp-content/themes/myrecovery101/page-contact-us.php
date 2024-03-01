<?php get_header(); ?>
<section>
    <div class="container mt-xl-48">
        <h1 class="text-center fs-4xl col-xl-11 m-auto">YOUR JOURNEY STARTS  WITH <span class="ff-serif fs-serif-xl">a conversation</span></h1>
        <?php echo apply_shortcodes( '[contact-form-7 id="d24e768" title="Contact form"]' ); ?>
    </div>

</section>
<section class="referral-bg mt-40">
    <div class="container">
        <h2 class="ff-serif fs-serif-md">Ready to get started?</h2>
        <h3 class="fs-2xl mt-8 col-lg-8 col-2xl-12">Fill in our referral form and let the journey begin!</h3>
        <a href="<?= home_url('/referral-form/') ?>" class="button circle uppercase fw-semibold mt-24"><span>REFERRAL FORM</span></a>
    </div>
</section>
<?php get_footer() ?>