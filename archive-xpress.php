<?php get_header('secondary',['header_var' => 'Word Xpress Archive']); ?>



<div class="container  mb-3">
<h1 class="text-center"><?php echo single_cat_title(); ?></h1>
<div class="row">
    <?php get_template_part('includes/sections/section','xpress' ); ?>

</div>

<div class="d-flex justify-content-between mt-5">
<?php  previous_posts_link(); ?>

 <?php  next_posts_link(); ?>
</div>

</div>

    </div>
    
</div>



<?php get_footer(); ?>