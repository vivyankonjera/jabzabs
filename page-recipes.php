<?php get_header();?>

<div class="page_heading">

    <h1 class="page_title">Recipes</h1>
    <div id="page-accent-line"></div>

</div>



<div id="nutrition-section"> 

        <?php

        $query = new WP_Query(array('cat' => 17));

        
        if($query->have_posts() ){

            while($query->have_posts() ){

                $query->the_post();
                $id = get_the_ID();
                $cookingTime = get_post_meta($id, 'cookingTime', true);
                $serves = get_post_meta($id, 'serves', true);
                $postlink = get_permalink($id);
                
        ?>

            <a href=<?php echo $postlink?>>
                <div class="recipe_card">
                    
                    <div class="card_body">
                        <img class="card_image" alt="" src=<?php the_post_thumbnail()?>
                        <h4 class=card_title><?php the_title()?></h4>

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

                        <!-- <p class="card_desc"></p> -->
                    </div>

                    <button class="card_btn">View Recipe</button>

                </div>
            </>

                
        <?php
                }
            }
        ?>
</div>

<?php get_footer(); ?>