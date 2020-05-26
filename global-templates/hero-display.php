<?php 
/*
*Hero for the front page
*/
?>

    <?php
        $image = get_field('hero_image');
        $bg_color = get_field('hero_background_color');
        
    ?>

<section id="front-page-hero" style="background-image: url(<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>)" >

<?php get_header(); ?>
    
    

   
</section>