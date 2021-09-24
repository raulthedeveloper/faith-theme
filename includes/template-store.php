<?php /**
 *Template Name: Store Page
 *
 */
?>
<?php get_header('secondary') ?>

<div class="container mb-3">
    <div class="d-flex justify-content-center flex-column text-center mb-3">
        <h1 class="display-2">Store Coming Soon</h1>
        <img class="w-50 m-auto" src="<?php echo get_template_directory_uri() . '/images/construction.png' ?>" alt="">
        <h3 class="display-6">Please check back later...</h3>
    </div>
    <a href="<?php echo home_url() ?>" class="faith-btn-dark m-auto d-block">Back Home</a>

</div>

<?php get_footer() ?>