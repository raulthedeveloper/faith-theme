<?php 
// Template Name: Contact

get_header('secondary');
 ?>

 
<section id="contact" class="d-flex section_cta-even " style="height:initial">
    <div class="container-fluid">
<div class="row">


        <div class="col-md-6 col-sm-12 p-2 pt-4">
        
        
            <h2 class="text-center">Contact Us</h2>
            <form>
                <div class="mb-3 row">
                    <div class="col-md-6 col-sm-12">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea3">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                </div>

                <button type="submit" class="faith-btn-dark mt-3 mb-3">Submit</button>
            </form>
      
        </div>


        <div class="col-md-6 col-sm-12 p-0">
        <iframe style="width:100%; height:100%"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.922972160594!2d-75.1701375842279!3d41.026941126224344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c4891f2307f839%3A0x8181925c53de052a!2sFaith%20to%20Faith%20Ministries!5e0!3m2!1sen!2sus!4v1629426647688!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        </div>
    </div>

    

        




</section>


<?php  get_template_part('sections/section','form') ?>




<?php 
get_footer();
?>