<?php get_header();?>

<section id="single_section"> 


    
    <?php

        
    if(have_posts() ){

        while( have_posts() ){

            the_post();
            $id = get_the_ID();
            $cookingTime = get_post_meta($id, 'cookingTime', true);
            $serves = get_post_meta($id, 'serves', true);
            
            
    ?>

            
            <div class="recipe_wrapper">
                <img class="card_image" alt="" src=<?php the_post_thumbnail()?>
                <h3 class="recipe_title"><?php the_title()?></h3>
                <div class="recipe_info">
                            <div class="meta_fields">
                                <i class='recipe-icon fas fa-clock' style='font-size:18px'></i>
                                <p class='meta_data'><?php echo $cookingTime ?></p>
                            </div>
                            <div class="meta_fields">
                                <i class='recipe-icon fas fa-utensils'style='font-size:18px'></i>
                                <p class ='meta_data'><?php echo $serves ?></p>
                        </div>
                </div>
                <div class="recipe_content"><?php the_content();?></div>
                <a href="http://jabzabs.test/recipes">
                    <button class="single_btn"><i class='back_icon fas fa-arrow-circle-left'></i> Back to recipes</button>
                </a>
            </div>


            
    <?php
            }
        }
    ?>

    

    </section>

<?php get_footer(); ?>