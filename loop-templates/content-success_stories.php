<?php $successimage = get_field('success_image'); ?>


<div class="wrapper-success col-md-6 col-lg-12" id="success-cards">
    <h1><?php the_title(); ?></h1>
    
    <img src="<?php echo($successimage) ?>" alt="">
    
    <?php the_excerpt(); ?>
    
    <?php $link = get_post_meta($post->ID, 'Link');
    
    
    if($link) : ?>
    <a href="<?php echo $link[0]; ?>">Link to this project</a>
    <?php endif  ?>
    
</div>