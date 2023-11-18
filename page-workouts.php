<?php get_header();?>

<div class="page_heading">

    <h1 class="page_title">Workouts</h1>
    <div id="page-accent-line"></div>

</div>

<?php
$arr_video_ids = array(
    'https://www.youtube.com/embed/h9ibKdkEllg',
    'https://www.youtube.com/embed/cQXQ_kz095E',
    'https://www.youtube.com/embed/9ZvOW9svF1Q', 
);

function getYouTubeThumbnailImage($video_id) {
    return "http://i3.ytimg.com/vi/$video_id/hqdefault.jpg";
}
 
function extractVideoID($url){
    $regExp = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/";
    preg_match($regExp, $url, $video);
    return $video[7];
}

?>

<div class="workouts-section">

    <div id="workouts-banner">
        <img src="<?php bloginfo('template_directory');?>/images/jalogo.png" id="jalogo" alt="">
    </div>

    <div class="workout-vids">
        
            <?php foreach ($arr_video_ids as $video) { ?>
                <?php
                $video_id = extractVideoID($video);
                $video_thumbnail = getYouTubeThumbnailImage($video_id);
                ?>
                
                    <div class="pb-2">
                        <a data-fancybox="video-gallery" href="<?php echo $video; ?>">
                            <img src="<?php echo $video_thumbnail; ?>" class="img-thumbnail" />
                        </a>
                    </div>
            <?php } ?>
    </div>

    <!-- <div class="videos-wrapper">

         <iframe width="560" height="315" src="https://www.youtube.com/embed/h9ibKdkEllg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/cQXQ_kz095E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9ZvOW9svF1Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<?php get_footer(); ?>