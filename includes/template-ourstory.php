<?php
/**
 *Template Name: Our Story
 *
 */
get_header('secondary');


?>


<div class="container">

    <div class="row"  >
        <div class="col" >
            <div class="pagination__list" >

                <div class="pagination__item">
                    <?php echo get_field('page_1'); ?>
                </div>

                <div class="pagination__item">
                    <?php echo get_field('page_2'); ?>
                </div>

                <div class="pagination__item">
                    <?php echo get_field('page_3'); ?>
                </div>

                <div class="pagination__item">
                    <?php echo get_field('page_4'); ?>
                </div>

                <div class="pagination__item">
                    <?php echo get_field('page_5'); ?>
                </div>

                <div class="pagination__item">
                    <?php echo get_field('page_6'); ?>
                </div>

            </div>
        </div>

    </div>

</div>








<?php




get_footer()
?>

<script>
    jQuery(document).ready(function () {
        jQuery('.pagination__list').paginate({
            items_per_page: 1,
            prev_next: true,
            prev_text: '&laquo;',
            next_text: '&raquo;'
        });


        jQuery('.pagination li a').addClass('page-link').click(function(){
            jQuery(window).scrollTop(200);

        });
        jQuery('.pagination__controls').addClass('d-flex justify-content-center')


    })
</script>