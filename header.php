<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://kit.fontawesome.com/0be7275dfd.js" crossorigin="anonymous"></script>
   

    <?php wp_head();?>
</head>
<body <?php body_class('test');?>> 


<header>
    <a href="http://jabzabs.test/">
        <img src = "<?php bloginfo('template_directory');?>/images/logoSecondary.png" class="img-fluid logo2">
    </a>

    <div class="menu-wrapper">
        

        <div class="d-flex align-items-center justify-content-around">
            <a href="http://jabzabs.test/">
                    <img src = "<?php bloginfo('template_directory');?>/images/logoSecondary.png" class="img-fluid logo">
                </a>
                    <!-- <div class = "menuPanel"> -->
                    
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-menu'
                            )

                    );?>
        </div>
                <!-- </div> -->

                <!-- The social media icon bar -->
                <div class="icon-bar">
                    <!-- <a href="#" class="facebook social-btn"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="https://twitter.com/jabz6ft1?lang=en" target="_blank" class="twitter social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/jabz6ft1/?hl=en" target="_blank" class="instagram social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCuB6kB6mnFV_lg7qqrBAXeA" target="_blank" class="youtube social-btn"><i class="fab fa-youtube"></i></a>
                    <a href="http://jabzabs.test/#form-card" class="email social-btn"><i class="fas fa-envelope"></i></a>
                </div>    
    </div> 

    <div class="icon-bar iconbar-home">
        <a href="https://twitter.com/jabz6ft1?lang=en" target="_blank" class="twitter social-btn"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/jabz6ft1/?hl=en" target="_blank" class="instagram social-btn"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCuB6kB6mnFV_lg7qqrBAXeA" target="_blank" class="youtube social-btn"><i class="fab fa-youtube"></i></a>
        <a href="http://jabzabs.test/#form-card" class="email social-btn"><i class="fas fa-envelope"></i></a>
    </div>   

    <div class = "menuBtn">
        <div class = "menuBtnBurger"></div>
    </div> 

    

    <script src = "<?php bloginfo('template_directory');?>/app.js"></script>
</header>





 