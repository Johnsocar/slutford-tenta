


<div class="wrapper-adoption col-md-6 col-lg-4" id="adoption-cards" >
    <h3><?php the_title(); ?></h3>
    
    
    <?php the_excerpt(); ?>
    
    <?php $link = get_post_meta($post->ID, 'Link');
    
    
    if($link) : ?>
    <a href="<?php echo $link[0]; ?>">Link to this project</a>
    <?php endif  ?>
    
</div>