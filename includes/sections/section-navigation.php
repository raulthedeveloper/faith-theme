<header>
    <nav class="navbar navbar-expand-md navbar-light">

        <div class="container">
            <a class="navbar-brand" href="#">Faith To Faith</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://faith-to-faith.local">Home</a>
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

                          <a class="nav-link" href="<?php echo get_permalink($myposts[0]->ID); ?>">Xpress</a>

                                
                        
                                <?php endif;
                                wp_reset_query()
                                ?>
                        
                            
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://faith-to-faith.local/events/" >Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://faith-to-faith.local/gallery/" >Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://faith-to-faith.local/blog/" >Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://faith-to-faith.local/store/" >Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://faith-to-faith.local/about/" >About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-success">Donate</button>
                </div>
            </div>
        </div>
    </nav>
</header>


        


