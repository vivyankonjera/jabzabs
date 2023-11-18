<?php get_header();?>


<div id="banner">
    <div class="banner_content">
        <h1 id="slogan" >BELIEVE <br> DEDICATE <br> ACHIEVE</h1>   
    </div>   
</div>


<section id="section1">
   
   <div id ="content">

        <h1>About <br> Jabz</h1>

        <div id="accent-line"></div>
    
        <div class="para-pane">
            <p id="about-content">Jabz Abs is what they call me, I am a personal trainer of over 6 years. My training style is more than counting reps, I aim is to increase your 
            personal well-being and mental health through getting you fit and active. Being a plant based athlete, I can also guide you on nutritional values.</p> 
        
            <div class="partners-sec">
            <p id="partners">Partners & associations</p>
            <img src="<?php bloginfo('template_directory');?>/images/partnerships.png" alt="" id="partner-logos">
        </div>
    </div>

        
   </div>
      
</section>

<div id="sectiontest">

    <div id="test-wrapper">
        <?php echo do_shortcode('[testimonial_view id="1"]');?>
    </div>
    

</div>


<section id="section3">

<div class="container d-flex flex-column align-items-center justify-content-center h-100">
  
  <div id ="form-card">

      <div id ="contact-img"></div>

          <div id= "contact-form">
              <h5>Contact</h5>
              <h6>Bookings & Enquiries</h6>

              <div id="accent-lineC"></div>

          
                <form class="formSize d-flex flex-column" action="" method="POST" autocomplete="off">
                <p id = "disclaimer">*I will typically reply to your message within 2-3 working days.</p>
                    <!-- <input class="jabfor" name="name" id="username" type="text" autocomplete="off" placeholder="Name" required>
                    
                    <input class="jabfor" name="email" type="email" placeholder="Email" required>

                    <textarea class="jabfor" name="message" rows="5" placeholder="Message" required></textarea> -->

                    <?php echo do_shortcode('[wpforms id="259"]'); ?>  
        
                </form> 

                

          <!-- <button type="submit" class="small-btn">Send</button>  -->

          </div>

        
  </div>
    
</div>
</section>






<?php get_footer();?>

