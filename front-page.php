<?php get_header(); ?>

<section class="text-box">
    <div class="container-fluid">
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda dolorem eaque esse impedit incidunt ipsam itaque, magni perspiciatis quae, quis quod ratione repellendus repudiandae sint voluptas. Iusto, recusandae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda dolorem eaque esse impedit incidunt ipsam itaque, magni perspiciatis quae, quis quod ratione repellendus repudiandae sint voluptas. Iusto, recusandae.</p>

        </div>
    </div>
</section>


<section class="d-flex section_cta section_cta-odd">

    <div class="text-box ">
        <div class="container">
            <div class="row">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet at dolores, laboriosam, laborum maiores maxime molestias mollitia necessitatibus nesciunt nihil nulla numquam omnis optio, provident quas quia quisquam veritatis!</p>
                <div class="faith-btn"\>Read More</div>
            </div>

        </div>

    </div>
    <img  src="<?php echo get_template_directory_uri() ?>/images/faith_owner.jpg" alt="">
</section>


    <section class="d-flex section_cta  section_cta-even flex-row-reverse">
        <div class="container">
            <div class="row">
                <div class="text-box  ">
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet at dolores, laboriosam, laborum maiores maxime molestias mollitia necessitatibus nesciunt nihil nulla numquam omnis optio, provident quas quia quisquam veritatis!</p>
                    <div class="faith-btn">Read More</div>
                </div>
            </div>
        </div>

        <img  src="<?php echo get_template_directory_uri() ?>/images/faith-lineup.jpeg" alt="">
    </section>


<section class="section_cta-normal">
    <div class="container-fluid p-5">
        <div class="row">
            <h2 class="text-center">Latest Xpress Videos</h2>
            <div class="col-md-4 col-sm-12">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images.pexels.com/photos/3724031/pexels-photo-3724031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12">
                <a href="#">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images.pexels.com/photos/3724031/pexels-photo-3724031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        
                    </div>
                </div>
                </a>
                
            </div>


            <div class="col-md-4 col-sm-12">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images.pexels.com/photos/3724031/pexels-photo-3724031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="row pt-3">
        <a href="#" class="faith-btn m-auto">See More</a>
        </div>
        
    </div>

</section>

<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab asperiores eligendi eos est et eum facilis hic illum iste iusto molestiae mollitia necessitatibus nemo quia sapiente, soluta sunt ullam?</p>
                <a href="#" class="faith-btn">Read More</a>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="d-flex section_cta-even">
   <div class="p-3" style="width:50%">
    <h2 class="text-center">Contact Us</h2>
   <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="faith-btn">Submit</button>
</form>
   </div>
   <iframe  style="width:50%; height:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.922972160594!2d-75.1701375842279!3d41.026941126224344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c4891f2307f839%3A0x8181925c53de052a!2sFaith%20to%20Faith%20Ministries!5e0!3m2!1sen!2sus!4v1629426647688!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


<?php get_footer() ;?>