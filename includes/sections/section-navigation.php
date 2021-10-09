<header>
    <nav class="navbar navbar-expand-md navbar-light">

        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url() ?>">
            <img width="50" height="50" src="<?php echo get_template_directory_uri() . '/images/faith_logo_small.png' ?>" alt="">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo home_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    

                    <?php 
                            $args = array(  
                                'post_type' => 'xpress',
                                'post_status' => 'publish',
                                'post_per_page' => 1
                            );
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ): 
                                $myposts = get_posts( $args );
                            ?>

                          <a class="nav-link" href="<?php echo get_permalink($myposts[0]->ID); ?>">The Word Xpress</a>

                                
                        
                                <?php endif;
                                wp_reset_query()
                                ?>
                        
                            
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/events/" >Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/gallery/" >Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/blog/" >Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/store/" >Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/about/" >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url() ?>/contact/" >Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <!-- <button class="btn btn-warning" >Donate</button> -->
                </div>
            </div>
        </div>
    </nav>
</header>


        


